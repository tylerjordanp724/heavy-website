<?php
/**
 *  Flexible Content Fields
 * 
 */
?>

<?php if(have_rows('flexible_content_blocks')): while(have_rows('flexible_content_blocks')): the_row();
    $content_block = get_row_layout();
?>
    <?php if($content_block == 'text_hero'):
        $hero_bg_color = get_sub_field('background_color');
        $hero_text = get_sub_field('text');
    ?>
        <div class="hero hero--<?php echo $hero_bg_color;?> row-inside--lg">
            <div class="hero__wrapper container d-md-flex align-items-end">
                <div class="hero__text-col col-md-8">
                    <?php if(!empty($hero_text)):?>
                        <h1><?php echo $hero_text;?></h1>
                    <?php endif;?>
                </div>
                <?php if(have_rows('links')): $link_count;?>
                    <div class="hero__links-col col-md">
                        <?php while(have_rows('links')): the_row();
                            $link_count = 0;
                            $link_count++;
                            $link = get_sub_field('url');
                            $link_text = $link['title'];
                            $link_url = $link['url'];
                        ?>
                            <?php if($link_count < 2):?>
                                <a href="<?php echo $link_url;?>"><?php echo $link_text;?></a>
                            <?php endif;?>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    <?php endif;?>
<?php endwhile; endif;?>