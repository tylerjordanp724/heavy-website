<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package heavy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post__hero row-outside--xl">
		<!-- Hero goes here -->
	</div>
	<div class="post__body container">
		<div class="post__header">
			<div class="post__meta row-outside--md">
				<?php heavy_posted_on();?>
			</div><!-- .entry-meta -->
			<div class="post__title row-outside--xl">
				<?php the_title( '<h1 class="f--headline">', '</h1>' );?>
			</div>
		</div><!-- .entry-header -->

		<div class="post__content row-outside--xl">
			<?php the_content();?>
		</div>
	</div>
	<!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
