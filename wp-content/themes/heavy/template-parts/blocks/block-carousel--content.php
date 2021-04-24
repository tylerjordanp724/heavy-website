<?php
/**
 * Block Name : Content Carousel
 * 
 * 
 */
$bg_color = get_sub_field('background_color');

?>

<div class="carousel carousel--content" style="background-color: <?php if(!empty($bg_color)){ echo $bg_color; }?>;">
    <?php if(have_rows('carousel_slide')): while(have_rows('carousel_slide')): the_row();
        $img = get_sub_field('image');
        $title = get_sub_field('title');
        $text = get_sub_field('text');
    ?>
        <div class="carousel__slide d-md-flex align-items-md-center row-inside--lg">
            <?php if(!empty($img)):?>
                <div class="carousel__img col-md-6 img--wide-cover">
                    <figure>
                        <picture>
                            <img src="<?php echo $img;?>">
                        </picture>
                    </figure>
                </div>
            <?php endif;?>
            <div class="carousel__text col-md-5 text-white">
                <?php if(!empty($title)):?>
                    <h2><?php echo $title;?></h2>    
                <?php endif;?>
                <?php if(!empty($text)):?>
                    <p class="text-white"><?php echo $text;?></p>    
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; endif;?>
</div>

