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
    <?php elseif($content_block == 'hero_w_image'):?>
        <?php get_template_part('template-parts/blocks/block', 'hero--w-image');?>
    <?php elseif($content_block == 'feature_w_video'):?>
        <?php get_template_part('template-parts/blocks/block', 'feature--w-video');?>
    <?php elseif($content_block == 'feature_basic'):?>
        <?php get_template_part('template-parts/blocks/block', 'feature--basic');?>
    <?php elseif($content_block == 'featured_post_teaser'):?>
        <?php get_template_part('template-parts/blocks/block', 'featured-post-teaser');?>
    <?php elseif($content_block == 'featured_work_teaser'):?>
        <?php get_template_part('template-parts/blocks/block', 'featured-work-teaser');?>
    <?php elseif($content_block == 'contact_form'):?>
        <?php get_template_part('template-parts/blocks/block', 'contact-form');?>
    <?php elseif($content_block == 'case_study_collection'):
        $display = get_sub_field('display');
    ?>
        <?php if($display === 'sort_by_category'):?>
                <?php get_template_part('template-parts/blocks/block', 'case-study-sort-list');?>
            <?php elseif($display === 'list'):?>
                <?php get_template_part('template-parts/blocks/block', 'case-study-list');?>
            <?php elseif($display === 'grid'):?>
                <?php get_template_part('template-parts/blocks/block', 'case-study-grid');?>
        <?php endif;?>
    <?php elseif($content_block === 'content_list'):
        $content_type = get_sub_field('content_type');    
    ?>
        <?php if($content_type === 'logo_grid'):?>
            <?php get_template_part('template-parts/blocks/block', 'content-list--logo-grid');?>
        <?php elseif ($content_type === 'text_list'):?>
            <?php get_template_part('template-parts/blocks/block', 'content-list--text-list');?>
        <?php endif;?>
    <?php elseif($content_block === 'cta_banner'):?>
        <?php get_template_part('template-parts/blocks/block', 'cta-banner');?>
    <?php elseif($content_block === 'text_intro'):?>
        <?php get_template_part('template-parts/blocks/block', 'text-intro');?>
    <?php elseif($content_block === 'image_carousel'):?>
        <?php get_template_part('template-parts/blocks/block', 'carousel');?>
    <?php elseif($content_block === 'content_carousel'):?>
        <?php get_template_part('template-parts/blocks/block', 'carousel--content');?>
    <?php elseif($content_block === 'careers'):?>
        <?php get_template_part('template-parts/blocks/block', 'careers');?>
    <?php elseif($content_block === 'text_banner'):?>
        <?php get_template_part('template-parts/blocks/block', 'text-banner');?>
    <?php elseif($content_block === 'stats'):?>
        <?php get_template_part('template-parts/blocks/block', 'stats');?>
    <?php elseif($post_content_block === 'video'):?>
        <?php get_template_part('template-parts/blocks/block', 'video');?>
    
    
    <?php endif;?>
<?php endwhile; endif;?>