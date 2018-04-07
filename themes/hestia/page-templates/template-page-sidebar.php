<?php
/**
 * Template Name: Page with Sidebar
 *
 * The template for displaying simple page with sidebar
 *
 * @package Hestia
 * @since Hestia 1.1.49
 * @author Themeisle
 */

get_header();

/**
 * Don't display page header if header layout is set as classic blog.
 */
$hestia_header_layout = get_theme_mod( 'hestia_header_layout', 'default' );
if ( $hestia_header_layout !== 'classic-blog' ) {
	hestia_display_page_header();
} ?>

</header>
<div class="<?php echo hestia_layout(); ?>">
	<?php
	$class_to_add = '';
	if ( hestia_woocommerce_check() && ! is_cart() ) {
		$class_to_add = 'blog-post-wrapper';
	}
	?>
	<div class="blog-post <?php esc_attr( $class_to_add ); ?>">
		<div class="container">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
	</div>
	<?php get_footer(); ?>
