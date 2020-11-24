<?php
/**
 *  Flexible Content Fields
 * 
 */
?>

<?php if(have_rows('flexible_content_blocks')): while(have_rows('flexible_content_blocks')): the_row();
    $content_block = get_row_layout();
?>
    
    <?php if($content_block == 'text_hero'):?>
        <?php get_template_part('template-parts/blocks/block', 'text-hero');?>

    <?php elseif($content_block == 'feature_w_video'):?>
        <?php get_template_part('template-parts/blocks/block', 'feature--w-video');?>
    
    <?php elseif($content_block == 'feature_basic'):?>
        <?php get_template_part('template-parts/blocks/block', 'feature--basic');?>
    
    <?php endif;?>
<?php endwhile; endif;?>