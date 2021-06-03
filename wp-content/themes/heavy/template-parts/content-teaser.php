<?php 
    $post_thumb = get_the_post_thumbnail();
    $post_author = get_the_author();
    $post_categories = get_the_category();
    $post_date = get_the_date();
    $post_title = get_the_title();
?>
    <div class="post-teaser col-md-6 mb-5">
        <div class="post-teaser__img img--wide-cover">
            <figure>
                <picture>
                    <img class="b-lazy" data-src="<?php echo $post_thumb;?>"/>
                </picture>
            </figure>
        </div>
        <div class="post-teaser__text">
            <span class="f--label-sm d-block mb-3"><?php echo $post_date?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $post_categories[0]->cat_name;?></span>
            <h3 class="d-block mb-3"><?php echo $post_title;?></h3>
            <a href="<?php echo get_permalink();?>" class="btn btn--fit-content btn--gray-1-solid">Read More</a>
        </div>
    </div>
