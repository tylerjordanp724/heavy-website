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
                            <img src="<?php echo $image_url;?>"/>
                        </picture>
                    </figure>
                </div>
                
            <?php endforeach;?>
        </div>
    <?php endif;?>

    <div class="text-banner container d-md-flex row-inside--md">
        <div class="text-banner__col text-banner__col--title col-md">
            this is a text column
        </div>
        <div class="text-banner__col text-banner__col--body col-md">
            this is another text column
        </div>
    </div>
</div> 