<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heavy
 */
$hero = get_field('case_study_hero');
if(!empty($hero)) {
	$hero_type = $hero['hero_type'];    
    $video_url = $hero['video_url'];
    $vimeo_id = $hero['vimeo_id']; 
}
    
?>
  

	
		<div class="modal-window">
			<div class="modal-window__close">
				<div class="close__slice"></div>
				<div class="close__slice"></div>
			</div>
			<?php if(!empty(get_field('shortcode', 'option'))):?>
				<div class="modal-window-content__container modal-window-content--form">
					<div class="contact-form">
						<div class="contact-form__inner row-inside--md bg--gray-1">
							<?php echo do_shortcode(get_field('shortcode', 'option'));?>
						</div>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($vimeo_id)):?>
				<div class="modal-window-content__container modal-window-content--video">
					<div class="video-wrapper">
						<iframe src="https://player.vimeo.com/video/<?php echo $vimeo_id;?>" frameborder="0" allow="autoplay; fullscreen" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			<?php endif;?>
		</div>
		
	
	<footer class="footer">
		<div class="footer__container container m-auto no-gutters d-md-flex py-4">
			<div class="footer__col d-md-none">
				<a class="btn btn--contact btn--modal" data-content="form">
					<span class="btn__text">Contact Us</span><span class="btn__arrow"></span>
				</a>
			</div>
			<div class="footer__col-wrap col-md d-md-flex">
				<div class="footer__col col-md px-0">
					<h5>philadelphia</h5>
					<p>200 Locust Street, Unit 7CN<p/>
					<p>Philadelphia, PA 19106<p/><br>
					<p><a href="tel:2159482451">(215) 948-2451</a><p/>
				</div>
				<div class="footer__col col-md px-0">
					<h5>san diego</h5>
					<p>2869 Historic Decatur Road<p/>
					<p>San Diego, CA 92106<p/>
				</div>
			</div>
			<div class="footer__col-wrap col-md d-md-flex">
				<div class="footer__col col-md px-0">
					<ul>
						<li><a href="">Instagram</a></li>
						<li><a href="">Twitter</a></li>
						<li><a href="">LinkedIn</a></li>
						<li><a href="">Facebook</a></li>
					</ul>
				</div>
				<div class="footer__col d-none d-md-block">
					<a class="btn btn--contact btn--modal" data-content="form">
						<span class="btn__text">Contact Us</span><span class="btn__arrow"></span>
					</a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
