<?php
/**
 * Block Name: Feature w/ Video
 * 
 * 
 */
$feature_video = get_sub_field('video');
$feature_text = get_sub_field('text');
$feature_link = get_sub_field('link');
?>

<div class="feature feature--w-video">
    <div class="feature__video">
        <video autoplay mute loop>
            <source src="<?php echo $feature_video;?>">
        </video>
    </div>
    <?php if(!empty($feature_text)):?>
        <div class="feature__overlay row-inside--lg container-fluid d-flex align-items-end">
            <div class="feature__col col-md-5 m-md-auto">
                <h2 class="f--headline"><?php echo $feature_text;?></h2>
                <?php if(!empty($feature_link)):
                    $link_text = $feature_link['title'];
                    $link_url = $feature_link['url'];
                ?>
                    <a class="link--w-arrow-white" href="<?php echo $link_url;?>">
                        <span class="link__arrow"></span><span class="link__text"><?php echo $link_text;?></span>
                    </a>
                <?php endif;?>
            </div>
        </div>
        
    <?php endif;?>
</div>