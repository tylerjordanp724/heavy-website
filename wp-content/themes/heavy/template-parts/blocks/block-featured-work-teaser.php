<?php 
/**
 * Block Name: Feature (Basic)
 * 
 * 
 */
$title = get_sub_field('title');
$link = get_sub_field('link');
$desc = get_sub_field('description');
$featured_work = get_sub_field('featured_work');
?>
<div class="teaser-row teaser--featured-work bg--gray-1 row-inside--xl">
    <div class="teaser-row__container container">
        <div class="teaser-header row-outside--md d-md-flex justify-content-between">
            <?php if(!empty($title)):?>
                <div class="teaser-header__col">
                    <h2 class="f--headline text-white mb-3"><?php echo $title;?></h2>
                    <?php if(!empty($desc)):?>
                        <p class="text-white mb-3"><?php echo $desc;?></p>    
                    <?php endif;?>
                </div>
            <?php endif;?>
            <div class="teaser-header__col">
                <?php if(!empty($link)):?>
                    <a class="link--w-arrow-white" href="<?php echo $link['url'];?>">
                        <span class="link__arrow"></span><span class="link__text"><?php echo $link['title'];?></span>
                    </a>
                <?php endif;?>
            </div>
        </div>

        <?php if(!empty($featured_work)):?>
            <div class="teaser-group d-md-flex">
                <?php foreach($featured_work as $post): setup_postdata($post);
                    $teaser_title = get_field('display_title');
                    $teaser_desc = get_field('short_description');
                    $teaser_thumbnail = get_the_post_thumbnail_url();
                    $teaser_link = get_the_permalink();
                ?>
                    <div class="teaser col-md-6 effect--hover">
                    <?php if(!empty($teaser_thumbnail)):?>
                        <div class="teaser__col teaser__col--img img--wide-cover mb-4">
                            <figure>
                                <picture>
                                    <img class="b-lazy" data-src="<?php echo $teaser_thumbnail;?>"/>
                                </picture>
                            </figure>
                        </div>
                    <?php endif;?>
                        <?php if(!empty($teaser_title)):?>
                            <h4 class="text-white d-block mb-3"><?php echo $teaser_title;?></h4>    
                        <?php endif;?>
                        <?php if(!empty($teaser_desc)):?>
                            <p class="text-white d-block mb-3"><?php echo $teaser_desc;?></p>    
                        <?php endif;?>
                        <a class="link--w-arrow-white" href="<?php echo $teaser_link;?>">
                            <span class="link__arrow"></span><span class="link__text">Read More</span>
                        </a>
                    </div>
                <?php endforeach; wp_reset_postdata();?>
            </div>    
        <?php endif;?>
    </div>
    
</div>