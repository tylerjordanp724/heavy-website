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
        set_query_var('hero_bg_color', $hero_bg_color);
        set_query_var('hero_text', $hero_text);
    ?>
        <?php get_template_part('template-parts/blocks/block', 'text-hero');?>

    <?php elseif($content_block == 'feature_w_video'):
        set_query_var('feature_video', $feature_video);
        set_query_var('feature_text', $feature_text);
        set_query_var('feature_link', $feature_link);
    ?>
        <?php get_template_part('template-parts/blocks/block', 'feature--w-video');?>
        
    <?php endif;?>
<?php endwhile; endif;?>