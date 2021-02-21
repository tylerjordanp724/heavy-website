<?php 
/** Block Name: Carousel
 * 
 * 
 */
$title = get_sub_field('title');
$images = get_sub_field('images');
?>
<?php if(!empty($title)):?>
    <div class="text-banner container d-md-flex row-inside--md">
        <div class="text-banner__col text-banner__col--title col-md">
            <h5><?php echo $title;?></h5>
        </div>
    </div>
<?php endif;?>
<div class="carousel carousel--case-study carousel--case-study-image mb-5">
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

</div> 