<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package heavy
 */
global $post;

function get_current_loop_index() {
	global $wp_query;
	return $wp_query->current_post + 1;
}

get_header();
?>

	<main id="primary" class="site-main">
		<?php if(have_posts()):?>
			<?php while(get_current_loop_index() === 0): the_post();
				$post_thumb = get_the_post_thumbnail();
				$post_author = get_the_author();
				$post_categories = get_the_category();
				$post_date = get_the_date();
				$post_title = get_the_title();
			?>
				<div class="hero hero--blog bg--gray-1 row-inside--lg d-flex align-items-center">
					<div class="hero__content--blog container d-md-flex align-items-center">
						<?php if(!empty($post_thumb)):?>
							<div class="hero__img img--wide-cover col-md-6 px-0">
								<figure>
									<picture>
										<img src="<?php echo $post_thumb;?>"/>
									</picture>
								</figure>
							</div>
						<?php endif;?>
						<div class="hero__text col-md-6 px-md-5">
							<span class="text-white f--label-sm">Recent News</span>
							<div class="post-meta--recent text-white mt-3">
								<span class="f--label-md"><?php echo $post_date?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $post_categories[0]->cat_name;?></span>
								<h2 class="d-block mb-5"><?php echo $post_title;?></h2>
								<a href="<?php echo get_permalink();?>"class="btn btn--white btn--fit-content">Read More</a>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile;?>
			<?php if(have_posts()):?>
				<div class="posts-row row-inside--lg">
					<div class="posts-row__content container">
						<h3>Stories<h3/>
						<?php while(have_posts()): the_post();
							$post_thumb = get_the_post_thumbnail();
							$post_author = get_the_author();
							$post_categories = get_the_category();
							$post_date = get_the_date();
							$post_title = get_the_title();
						?>
							<div class="posts__wrapper d-md-flex row-inside--md px-0">
								<div class="post-teaser col-md-6 pl-0">
									<div class="post-teaser__img img--wide-cover">
										<figure>
											<picture>
												<img src="<?php echo $post_thumb;?>"/>
											</picture>
										</figure>
									</div>
									<div class="post-teaser__text">
										<span class="f--label-sm d-block mb-3"><?php echo $post_date?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $post_categories[0]->cat_name;?></span>
										<h4 class="d-block mb-3"><?php echo $post_title;?></h3>
										<div class="btn btn--fit-content btn--gray-1-solid">Read More</div>
									</div>
								</div>
							</div>
						<?php endwhile;?>
					<div>
				</div>
			<?php endif;?>
		<?php endif; wp_reset_postdata();?>
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
