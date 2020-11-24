<?php
/**
 * Block Name: Feature (Basic)
 * 
 * 
 */
$orientation = get_sub_field('orientation');
$headline = get_sub_field('headline');
$text = get_sub_field('text');
$link = get_sub_field('link');

function bg_color() {
    $bg_color = get_sub_field('background_color');
    if(!empty($bg_color)) {
        echo 'style="background-color:'.$bg_color.';"';
    }
}
?>
<?php if($orientation == 'landscape'):?>
    <div class="feature feature--basic-wide row-inside--lg" <?php bg_color();?>>
        <div class="feature__wrap container">
            <div class="feature__img"></div>
            <div class="feature__text d-md-flex text-white">
                <div class="feature__title col">
                    <?php if(!empty($headline)):?>
                        <h2 class="f--headline"><?php echo $headline?></h2>
                    <?php endif;?>
                </div>
                <div class="feature__text col">
                    <?php if(!empty($text)):?>
                        <p class="text-white"><?php echo $text?></p>
                    <?php endif;?>
                    <?php if(!empty($link)):
                        $link_text = $link['title'];
                        $link_url = $link['url'];    
                    ?>
                        <a class="link--w-arrow-white" href="<?php echo $link_url;?>">
                            <span class="link__arrow"></span><span class="link__text"><?php echo $link_text;?></span>
                        </a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
<?php elseif($orientation == 'portrait'):?>
    <div class="feature feature--basic-tall row-inside--lg" <?php bg_color();?>></div>
<?php endif;?>