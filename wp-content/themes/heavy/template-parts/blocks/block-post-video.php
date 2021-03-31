<?php 
/**
 * Block Name : Post Video
 * 
 */
$vimeo_id = get_sub_field('vimeo_id');
?>
<?php if(!empty($vimeo_id)):?>
    <div class="post-block-video">
        <div class="post-block__inner row-inside-md px-0">
            <div class="video__container">
                <iframe src="https://player.vimeo.com/video/<?php echo $vimeo_id;?>" frameborder="0" allow="autoplay; fullscreen" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php endif;?>