<?php
/*
	Plugin Name: HeyLisa Events
	Plugin URI: http://thinkjosh.com
	Description: Theses are the event that Lisa will enter
	Version: 1.0
	Author: Joshua Holguin
	Author URI: http://www.thinkjosh.com
	License: GPLv2
*/

if(!defined('WPINC')){
	die;
}

add_action('init', 'create_heylisa_event');
add_action('admin_init','add_admin_boxes');

function create_heylisa_event(){
	register_post_type('hey-lisa-events',
		array(
			'labels' => array(
				'name' => 'HeyLisa Events',
				'singular_name' => 'HeyLisa Event',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Event',
				'edit' => 'Edit',
				'edit_item' => 'Edit Event',
				'new_item' => 'New Event',
				'view' => 'View',
				'view_item' => 'View HeyLisa Event',
				'search_items' => 'Search HeyLisa Event',
				'not_found' => 'No Events Found',
				'not_found_in_trash' => 'No Events found in Trash',
				'parent' => 'Parent HeyLisa Event'
			),
			'public' => true,
			'menu_position' => 15,
			'supports' => array('title','editor','comments','thumbnail'),
			'taxonomies' => array(''),
			'menu-icon' => plugins_url('images/party.png', __FILE__),
			'has_archive' => false
		)
	);
}

function add_admin_boxes(){
	add_meta_box(
		'heylisa_event_details_meta_box',
		'Event Details',
		'display_heylisa_event_details_meta_box',
		'hey-lisa-events',
		'normal',
		'high'
	);
}

function display_heylisa_event_details_meta_box($heylisa_event){
	$event_location = esc_html(get_post_meta($heylisa_event->ID, 'heylisa_event_location', true));
?>
	<ul>
		<li>Event Location</li>
		<li>
			<input type="text" name="heylisa_event_location" value="<?php echo $event_location ?>">
		</li>
	</ul>
	<ul>
		<li>Event Date</li>
		<li>
			<input type="date" name="heylisa_event_date" value="<?php echo $event_date ?>">
		</li>
	</ul>
	<ul>
		<li>Event Time</li>
		<li>
			<input type="time" name="heylisa_event_time" value="<?php echo $event_time ?>">
		</li>
	</ul>
<?php 
}

function add_heylisa_event_details_fields($heylisa_event_id, $heylisa_event){
	//Check post type for event
	if($heylisa_event->post_type == 'hey-lisa-events'){
		if(isset($_POST['heylisa_event_location']) && $_POST['heylisa_event_location'] != ''){
			update_post_meta($heylisa_event_id, 'event_location', $_POST['heylisa_event_location']);
		}
		
		if(isset($_POST['heylisa_event_date']) && $_POST['heylisa_event_date'] != ''){
			update_post_meta($heylisa_event_id, 'event_date', $_POST['heylisa_event_date']);
		}

		if(isset($_POST['heylisa_event_time']) && $_POST['heylisa_event_time'] != ''){
			update_post_meta($heylisa_event_id, 'event_time', $_POST['heylisa_event_time']);
		}
	}
}