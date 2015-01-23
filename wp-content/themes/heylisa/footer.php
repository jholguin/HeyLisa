<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage HeyLisa
 * @since HeyLisa 1.0
 */
?>
	<?php wp_footer(); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript">
		(function($){
			$('figure a').on('click',function(e){
				e.preventDefault();
				$('.description,.details').animate({
					opacity: 1
				}, 500);
				$('.event-title').slideDown();
				//$(this).addClass('animate');
			});
		})(jQuery);
	</script>
</body>
</html>