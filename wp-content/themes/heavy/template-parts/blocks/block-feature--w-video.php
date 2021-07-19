<?php
/**
 * Block Name: Feature w/ Video
 * 
 * 
 */
$feature_video = get_sub_field('video');
$feature_text = get_sub_field('text');
$feature_link = get_sub_field('link');
$poster_image = get_sub_field('poster_image');
?>

<div class="feature feature--w-video row-inside--lg px-4 p-md-0">
    <div class="feature__video mb-3 mb-md-0" data-vide-bg="mp4:<?php echo $feature_video;?>,poster:<?php echo $poster_image['url'];?>" data-vide-options="className:'vide-player' loop: true muted: true posterType:<?php echo $poster_image['subtype'];?>"></div>
    <?php if(!empty($feature_text)):?>
        <div class="feature__overlay d-none d-md-flex align-items-end">
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
        <div class="feature__text--mobile d-md-none">
            <h2 class="f--headline mb-3"><?php echo $feature_text;?></h2>
            <?php if(!empty($feature_link)):
                $link_text = $feature_link['title'];
                $link_url = $feature_link['url'];
            ?>
                <a class="link--w-arrow" href="<?php echo $link_url;?>">
                    <span class="link__arrow"></span>
                    <span class="link__text"><?php echo $link_text;?></span>
                </a>
            <?php endif;?>
        </div>
    <?php endif;?>
</div>