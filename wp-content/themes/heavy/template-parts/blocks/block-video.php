<?php 
/**
 * Block Name : Block Video
 * 
 */
$vimeo_id = get_sub_field('vimeo_id');
?>
<?php if(!empty($vimeo_id)):?>
    <div class="video mb-5">
        <div class="video__inner row-inside--lg">
            <div class="video__container">
                <iframe src="https://player.vimeo.com/video/<?php echo $vimeo_id;?>" frameborder="0" allow="autoplay; fullscreen" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php endif;?>