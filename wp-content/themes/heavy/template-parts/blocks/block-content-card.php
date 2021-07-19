<?php 
/**
 * Block Name: Content Card
 * 
 * 
 */
$bg_color = get_sub_field('background_color');
$img = get_sub_field('image');
$title = get_sub_field('title');
$text = get_sub_field('description');
$alignment = get_sub_field('text_placement');
?>
<div class="content-card" style="background-color: <?php if(!empty($bg_color)){ echo $bg_color; }?>;">
    <div class="content-card__inner container row-inside--lg px-md-0 d-md-flex align-items-center <?php if($alignment === 'right'){echo 'flex-row-reverse';}?>">
        <?php if(!empty($img)):?>
            <div class="content-card__img col-md-6 img--wide-cover">
                <figure>
                    <picture>
                        <img class="b-lazy" data-src="<?php echo $img;?>">
                    </picture>
                </figure>
            </div>
        <?php endif;?>
        <?php if(!empty($title || $text)):?>
            <div class="content-card__text col-md-6 px-md-5 text-white">
                <?php if(!empty($title)):?>
                    <h2><?php echo $title;?></h2>    
                <?php endif;?>
                <?php if(!empty($text)):?>
                    <p class="text-white"><?php echo $text;?></p>    
                <?php endif;?>
            </div>
        <?php endif;?>
    </div>
</div>