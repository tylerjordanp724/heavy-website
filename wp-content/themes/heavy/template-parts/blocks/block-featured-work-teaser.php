<?php 
/**
 * Block Name: Feature (Basic)
 * 
 * 
 */
$title = get_sub_field('title');
$link = get_sub_field('link');
$desc = get_sub_field('description');
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
        
    </div>
</div>