<?php
/**
 * Single Case Study Template
 * 
 * 
 * 
 */

$hero = get_field('case_study_hero');
$display_title = get_field('display_title');
$tagline = get_field('tagline');
$short_desc = get_field('short_description');
$full_desc = get_field('full_description');
get_header();
?>

<?php if(!empty($hero)):
    $hero_type = $hero['hero_type'];    
?>
    <!-- case study hero -->
    <div class="hero hero--case-study">
        <?php if($hero_type === 'video'):
            $video_url = $hero['video_url'];
            $vimeo_id = $hero['vimeo_id'];    
        ?>
            <?php if(!empty($video_url)):?>
                <video class="hero__video" controls="false" autoplay="true" mute loop>
                    <source src="<?php echo $video_url;?>">
                </video>
            <?php elseif(!empty($vimeo_id)):?>
                <video class="hero__video" controls="false" autoplay="true" mute loop>
                    <source src="<?php echo $vimeo_id;?>">
                </video>
            <?php endif;?>
        
        <?php elseif($hero_type === 'image'):?>
            <div class="hero__image-wrapper"></div>
        <?php endif;?>
    </div>
<?php endif;?>

<!-- flexible case study content -->
<?php if(have_rows('flexible_case_study_fields')): while(have_rows('flexible_case_study_fields')): the_row();
    $content_block = get_row_layout();
?>
<!-- content blocks go here -->
<?php endwhile; endif;?>

<?php get_footer();?>