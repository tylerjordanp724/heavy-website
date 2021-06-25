<?php 
/**
 * Block Name: Feature (Basic)
 * 
 * 
 */
$title = get_sub_field('title');
$link = get_sub_field('link');
$featured_post = get_sub_field('featured_post');
?>
<div class="teaser-row teaser--featured-post row-inside--xl">
    <div class="teaser-row__container container">
        <div class="teaser-header d-md-flex row-outside--md justify-content-between">
            <?php if(!empty($title)):?>
                <h2 class="f--headline"><?php echo $title;?></h2>
            <?php endif;?>
            <?php if(!empty($link)):?>
                <a class="link--w-arrow" href="<?php echo $link['url'];?>">
                    <span class="link__arrow"></span><span class="link__text"><?php echo $link['title'];?></span>
                </a>
            <?php endif;?>
        </div>
        <?php if(!empty($featured_post)):?>
            <?php foreach($featured_post as $post): setup_postdata($post);
                $post_title = get_the_title($post);
                $post_url = get_the_permalink($post);
                $post_thumbnail = get_the_post_thumbnail_url($post);
            ?>
                <div class="teaser teaser--flex d-md-flex align-items-md-start effect--hover">
                    <div class="teaser__col teaser__col--text col-md-5 mb-4">
                        <?php if(!empty($post_title)):?>
                            <?php if(!empty(get_the_category())):?>
                                <?php foreach(get_the_category() as $category): ?>
                                    <span class="f--label row-outside--sm"><?php echo $category->name;?></span>
                                <?php endforeach;?>
                            <?php endif;?>
                            <h3 class="f--headline"><?php echo $post_title;?></h3>    
                        <?php endif;?>
                        <?php if(!empty($post_url)):?>
                            <a class="link--w-arrow" href="<?php echo $post_url;?>">
                                <span class="link__arrow"></span><span class="link__text">Read More</span>
                            </a>
                        <?php endif;?>
                    </div>
                    <?php if(!empty($post_thumbnail)):?>
                        <div class="teaser__col teaser__col--img img--wide-cover col-md-7">
                            <figure>
                                <picture>
                                <img class="b-lazy" data-src="<?php echo $post_thumbnail;?>"/>
                                </picture>
                            </figure>
                        </div>
                    <?php endif;?>
                </div>
            <?php endforeach; wp_reset_postdata();?>
        <?php endif;?>
    </div>
</div>