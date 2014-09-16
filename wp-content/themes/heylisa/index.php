<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage HeyLisa
 * @since HeyLisa 1.0
 */

get_header(); ?>

	<!-- <section class="results">
		<?php
			/*$args = array('post_type' => 'hey-lisa-events');
			$loop = new WP_QUERY($args);
			while($loop->have_posts()) : $loop->the_post();
				echo "<h1>".the_title()."</h1>";
				echo the_content();
			endwhile;*/
		?>
	</section> -->

	<section class="container">
		<h1 class="event-title">Mike's Birthday</h1>
		<section class="description bubble">
			<p>Bacon ipsum dolor sit amet swine pork loin andouille filet mignon tail ham hock flank. Boudin cow pig pork chop leberkas filet mignon, capicola meatloaf brisket ribeye pork belly prosciutto ham. Short ribs ham tongue brisket fatback hamburger. Fatback strip steak prosciutto jerky turkey, meatball brisket.</p>
		</section>
		<figure>
			<a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/lisa.png" alt="Lisa Headshot" /></a>
		</figure>
		<section class="details">
			<ul>
				<li>
					<strong>Location:</strong> Mikes House
				</li>
				<li>
					<strong>Event Time:</strong> 9:00
				</li>
				<li>
					<strong>Date:</strong> 11/11/1900
				</li>
			</ul>
		</section>
	</section>

<?php
get_footer();