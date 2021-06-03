<?php 
/**
 * Component Name : Post Teaser
 * 
 * 
 */
$post_thumb = get_the_post_thumbnail();
$post_author = get_the_author();
$post_categories = get_the_category();
$post_date = get_the_date();
$post_title = get_the_title();
?>

<div class="post-teaser col-md-4 mb-5 mb-md-0">
    <div class="post-teaser__img img--wide-cover">
        <figure>
            <picture>
                <img class="b-lazy" data-src="<?php echo $post_thumb;?>"/>
            </picture>
        </figure>
    </div>
    <div class="post-teaser__text">
        <h4 class="d-block mb-3 text-white"><?php echo $post_title;?></h4>
        <a href="<?php echo get_permalink();?>" class="link-whole-area"></a>
    </div>
</div>