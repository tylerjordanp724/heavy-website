<?php
/**
 * Block Name : Video Hero
 * 
 * 
 * 
 */
 $video_url = get_sub_field('video_url');
 $hero_img = get_sub_field('image');
?>

<?php if(!empty($video_url)):?>
    <div class="hero hero--video" data-vide-bg="<?php echo $video_url;?>" data-vide-options="loop: true, muted: true">
        <?php if(!empty($hero_img)):?>
            <div class="hero__content container">
                <div class="hero__image">
                    <figure>
                        <picture>
                            <img class="d-block m-auto" src="<?php echo $hero_img;?>"/>
                        </picture>
                    </figure>
                </div>
            </div>
        <?php endif;?>
    </div>
<?php endif;?>


