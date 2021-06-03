<?php 
/** Block Name: Carousel (Case Study)
 * 
 * 
 */
$banner_title = get_sub_field('title');
$banner_desc = get_sub_field('description');
$images = get_sub_field('image_gallery');
?>

<div class="carousel carousel--case-study carousel--case-study-image">
    <?php if(!empty($images)):?>
        <div class="carousel__container">
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

    <?php if(!empty($banner_title)):?>
        <div class="text-banner container d-md-flex row-inside--lg px-md-0">
            <div class="text-banner__col text-banner__col--title col-md">
                <h4><?php echo $banner_title;?></h4>
            </div>
            <?php if(!empty($banner_desc)):?>
                <div class="text-banner__col text-banner__col--body col-md">
                    <p><?php echo $banner_desc;?></p>
                </div>
            <?php endif;?>
        </div>
    <?php endif;?>
</div> 