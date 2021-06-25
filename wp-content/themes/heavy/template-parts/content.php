<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package heavy
 */
$featured_image = get_the_post_thumbnail_url();
?>

<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
	<div class="post__hero row-outside--lg">
		<figure>
			<picture>
			<img class="b-lazy" data-src="<?php echo $featured_image;?>"/>
			</picture>
		</figure>
	</div>
	<div class="post__body container px-4">
		<div class="post__header col-lg-10 m-auto px-0">
			<a class="link--w-arrow mb-3" href="<?php echo get_site_url();?>/blog"><span class="link__arrow link__arrow--back"></span><span class="link__text">Back to home</span></a>
			<div class="post__meta row-outside--md px-0">
				<?php heavy_posted_on();?>
			</div><!-- .entry-meta -->
			<div class="post__title row-outside--xl px-0">
				<?php the_title( '<h1 class="f--headline">', '</h1>' );?>
			</div>
		</div><!-- .entry-header -->
		<div class="post__content row-outside--xl px-0">
			<div class="col-lg-10 m-auto px-0">
				<?php the_content();?>
					<?php if(have_rows('post_content_fields')):while(have_rows('post_content_fields')): the_row();
					$post_content_block = get_row_layout();
				?>
					<?php if($post_content_block === 'post_block'):?>
						<?php get_template_part('template-parts/blocks/block','post-block');?>
					<?php elseif($post_content_block === 'image_carousel'):?>
						<?php get_template_part('template-parts/blocks/block', 'post-carousel');?>
					<?php elseif($post_content_block === 'video'):?>
						<?php get_template_part('template-parts/blocks/block', 'post-video');?>
					<?php endif;?>

				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
	<!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
