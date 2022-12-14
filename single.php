<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content inovice" tabindex="-1">

		<div class="row">


			<main class="site-main col-sm-8  mx-auto" id="main">
			
				<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'loop-templates/content', 'single' ); ?>

				


					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
					?>

				<?php endwhile; // end of the loop. ?>
			

			</main><!-- #main -->

		
		

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
