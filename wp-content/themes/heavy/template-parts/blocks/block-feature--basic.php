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
$image = get_sub_field('image');
?>
<?php if($orientation == 'landscape'):?>
    <div class="feature feature-basic--wide row-inside--xl" <?php bg_color();?>>
        <div class="feature__wrap container">
            <?php if(!empty($image)):?>
                <div class="feature__img img--wide row-outside--lg">
                    <figure>
                        <picture>
                            <img src="<?php echo $image;?>"/>
                        </picture>
                    </figure>
                </div>
            <?php endif;?>
            <div class="feature__text d-md-flex text-white">
                <div class="feature__title row-outside--md col px-0">
                    <?php if(!empty($headline)):?>
                        <h2 class="f--headline"><?php echo $headline;?></h2>
                    <?php endif;?>
                </div>
                <div class="feature__text col px-0">
                    <?php if(!empty($text)):?>
                        <p class="text-white row-outside--md"><?php echo $text;?></p>
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
    <div class="feature feature-basic--tall d-md-flex align-items-center" <?php bg_color();?>>
        <?php if(!empty($image)):?>
            <div class="feature__img img--tall col-md-6">
                <figure>
                    <picture>
                        <img src="<?php echo $image;?>"/>
                    </picture>
                </figure>
            </div>
        <?php endif;?>
        <?php if(!empty($text) || !empty($headline)):?>
            <div class="feature__text text-white row-inside--md col-md-6 px-4 py-5">
                <h2 class="f--headline d-block mb-4"><?php echo $headline?></h2>
                <p class="text-white d-block mb-4"><?php echo $text;?></p>
                <?php if(!empty($link)):
                    $link_text = $link['title'];
                    $link_url = $link['url'];    
                ?>
                    <a class="link--w-arrow-white" href="<?php echo $link_url;?>">
                        <span class="link__arrow"></span><span class="link__text"><?php echo $link_text;?></span>
                    </a>
                <?php endif;?>
            </div>
        <?php endif;?>
    </div>
<?php endif;?>