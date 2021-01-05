<?php 
/**
 *  Block Name : Carousel (Case Study Video)
 * 
 * 
 * 
 * 
 */
$banner_title = get_sub_field('title');
$banner_desc = get_sub_field('description');
?>

<?php if(have_rows('video_links')):?>
    <div class="carousel carousel--case-study carousel--case-study-video">
        <div class="carousel__container">
            <?php while(have_rows('video_links')): the_row();
                $link = get_sub_field('link');
            ?>
                <?php if(!empty($link)):?>
                    <div class="carousel__video">
                        <video mute loop controls="true">
                            <source src="<?php echo $link;?>">
                        </video>
                    </div>    
                <?php endif;?>
            <?php endwhile;?>
        </div>
    </div>
<?php endif;?>
<?php if(!empty($banner_title)):?>
    <div class="text-banner container d-md-flex row-inside--md">
        <div class="text-banner__col text-banner__col--title col-md">
            <h5><?php echo $banner_title;?></h5>
        </div>
        <?php if(!empty($banner_desc)):?>
            <div class="text-banner__col text-banner__col--body col-md">
                <p><?php echo $banner_desc;?></p>
            </div>
        <?php endif;?>
    </div>
<?php endif;?>

