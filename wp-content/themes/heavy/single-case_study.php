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
    $video_url = $hero['video_url'];
    $vimeo_id = $hero['vimeo_id'];   
?>
    <!-- case study hero -->
    
    <?php if($hero_type === 'video'):?>
        <?php if(!empty($video_url)):?>
            <!-- This should be a background video -->
            <div class="hero hero--case-study-video">
                <video class="hero__video" autoplay="true" mute loop>
                    <source src="<?php echo $video_url;?>">
                </video>
                <?php if(!empty($vimeo_id)):?>
                    <div class="hero__overlay d-flex align-items-center justify-content-center">
                        <div class="btn--play btn--modal" data-content="video">
                            <span class="play__arrow"></div>
                        </div>
                    </div>    
                <?php endif;?>
            </div>
        <?php endif;?>
    
    <?php elseif($hero_type === 'image'):
        $image_url = $hero['image'];    
    ?>
        <div class="hero hero--case-study-img">
            <figure>
                <picture>
                    <img src="<?php echo $image_url;?>"/>
                </picture>
            </figure>
        </div>
    <?php endif;?>

<?php endif;?>

<?php if(!empty($display_title)):
    $client_name = get_field('client_name');    
?>
    <div class="case-study__meta row-inside--lg">
        <div class="case-study__meta-wrapper container d-md-flex align-items-start">
            <div class="case-study__meta-col col-md mb-5">
                <h1 class="f--headline"><?php echo $display_title;?></h1>
            </div>
            <div class="case-study__meta-col col-md d-md-flex">
                <?php if(!empty($client_name)):?>
                    <div class="col-md px-0 mb-4">
                        <h5 class="f--label">Client Name</h5>
                        <?php echo $client_name;?>
                    </div>
                <?php endif;?>
                <?php if(has_category()):
                    $categories = get_categories(array(
                        'exclude' => array(1,3)
                    ));    
                ?>
                    <div class="col-md px-0">
                        <h5 class="f--label">Services</h5>
                        <div class="list-container list-container--category">
                            <ul>
                                <?php foreach($categories as $category):?>
                                    <li><?php echo $category->name;?></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>     
<?php endif;?>

<?php if(!empty($tagline)):?>
    <div class="case-study-intro row-inside--lg pt-0">
        <div class="case-study-intro__wrapper container d-md-flex">
            <div class="case-study-intro__col col-md mb-5 pr-md-5">
                <h2 class="f--headline"><?php echo $tagline;?></h2>
            </div>
            <?php if(!empty($full_desc)):?>
                <div class="case-study-intro__col col-md">
                    <p><?php echo $full_desc;?></p>
                </div>
            <?php endif;?>
        </div>
    </div>
<?php endif;?>

<!-- flexible case study content -->
<?php if(have_rows('flexible_case_study_content')): while(have_rows('flexible_case_study_content')): the_row();
    $content_block = get_row_layout();
?>
<?php if($content_block == 'image_carousel'):?>
   <?php get_template_part('template-parts/blocks/block-carousel','-case-study');?>
   <?php elseif($content_block == 'video_carousel'):?>
        <?php get_template_part('template-parts/blocks/block-carousel', '-case-study-video');?>  
    <?php elseif($content_block == 'image_banner'):?>
        <?php get_template_part('template-parts/blocks/block', 'image-banner');?>
    <?php elseif($content_block == 'text_banner'):?>
        <?php get_template_part('template-parts/blocks/block', 'text-banner');?>
    <?php elseif($content_block == 'video'):?>
        <?php get_template_part('template-parts/blocks/block', 'video');?>     
<?php endif;?>
<!-- content blocks go here -->
<?php endwhile; endif;?>

<?php get_footer();?>