<?php 
/**
 *  Block: Text Hero
 * 
 */
    $hero_bg_color = get_sub_field('background_color');
    $hero_text = get_sub_field('text');
?>

<div class="hero hero--<?php echo $hero_bg_color;?> d-flex align-items-center row-inside--lg">
    <div class="hero__wrapper row-inside--lg container">
        <div class="hero__col--text col-md-8 mb-4 px-0">
            <?php if(!empty($hero_text)):?>
                <h1 class="f--headline"><?php echo $hero_text;?></h1>
            <?php endif;?>
        </div>
        <?php if(have_rows('links')): $link_count;?>
            <div class="hero__col--links px-0">
                <ul class="link__list">
                    <?php while(have_rows('links')): the_row();
                        $link = get_sub_field('url');
                        $link_text = $link['title'];
                        $link_url = $link['url'];
                    ?>
                        <li>
                            <a class="link--w-arrow" href="<?php echo $link_url;?>">
                                <span class="link__arrow"></span><span class="link__text"><?php echo $link_text;?></span>
                            </a>
                        </li>
                    <?php endwhile;?>
                </ul>
            </div>
        <?php endif;?>
    </div>
</div>