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
$video_type = get_sub_field('video_type');
?>

<?php if($video_type === 'file'):?>
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
<?php elseif($video_type === 'vimeo'):?>
    <?php if(have_rows('vimeo_ids')):?>
        <div class="carousel carousel--case-study carousel--case-study-video">
            <div class="carousel__container">
                <?php while(have_rows('vimeo_ids')): the_row();
                    $vimeo_id = get_sub_field('vimeo_id');
                ?>
                    <?php if(!empty($vimeo_id)):?>
                        <div class="carousel__video">
                            <iframe src="https://player.vimeo.com/video/<?php echo $vimeo_id;?>" frameborder="0" allow="autoplay; fullscreen" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>    
                    <?php endif;?>
                <?php endwhile;?>
            </div>
        </div>
    <?php endif;?>
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

