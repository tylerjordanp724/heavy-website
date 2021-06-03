<?php
/**
 * Block Name : Post Carousel
 * 
 * 
 */
$images = get_sub_field('images');
?>
<div class="post-block-carousel">
    <?php if(!empty($images)):?>
        <div class="post-block-carousel__inner carousel__container row-inside--md px-0">
            <?php foreach($images as $image):
                $image_url = $image['url'];        
            ?>
                <div class="carousel__image img--wide-cover">
                    <figure>
                        <picture>
                            <img class="b-lazy" data-src="<?php echo $image_url;?>"/>
                        </picture>
                    </figure>
                </div>
            <?php endforeach;?>
        </div>
    <?php endif;?>
</div>