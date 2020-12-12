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
<div class="teaser-row teaser--featured-work bg--gray-1 row-inside--md">
    <div class="teaser-row__container container">
        <div class="teaser-header row-y-inside--md row-outside--md d-md-flex justify-content-between">
            <?php if(!empty($title)):?>
                <div class="teaser-header__col">
                    <h2 class="f--headline text-white"><?php echo $title;?></h2>
                    <?php if(!empty($desc)):?>
                        <p class="text-white"><?php echo $desc;?></p>    
                    <?php endif;?>
                </div>
            <?php endif;?>
            <div class="teaser-header__col">
                <a class="link--w-arrow-white" href="">
                    <span class="link__arrow"></span><span class="link__text">See All Posts</span>
                </a>
            </div>
        </div>
        <?php if($featured_work):?>
            <div class="teaser-group d-md-flex">
                <?php foreach($featured_work as $post): setup_postdata($post);
                    $teaser_title = get_field('display_title', $post);
                    $teaser_desc = get_field('description', $post);
                ?>
                    <div class="teaser col">
                        <?php if(!empty($teaser_title)):?>
                            <h4><?php echo $teaser_title;?></h4>    
                        <?php endif;?>
                    </div>

                        <?php endforeach; wp_reset_postdata();?>
            </div>    
        <?php endif;?>
    </div>
    
</div>