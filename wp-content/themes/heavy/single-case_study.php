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
    $poster_image = $hero['poster_image'];   
?>
    <!-- case study hero -->
    <?php if($hero_type === 'video'):?>
        <?php if(!empty($video_url)):?>
            <div class="hero hero--case-study-video" data-vide-bg="mp4:<?php echo $video_url;?>, poster:<?php echo $poster_image['url'];?>" data-vide-options="className:'vide-player' loop: true muted: true posterType:<?php echo $poster_image['subtype'];?>">
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
                    <img class="b-lazy" src="<?php echo $image_url;?>" data-src="<?php echo $image_url;?>"/>
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
            <div class="case-study__meta-col col-md mb-5 pl-0">
                <h1 class="f--headline d-block pr-5"><?php echo $display_title;?></h1>
            </div>
            <div class="case-study__meta-col col-md d-md-flex pl-0">
                <?php if(!empty($client_name)):?>
                    <div class="col-md px-0 mb-4">
                        <h5 class="f--label">Client Name</h5>
                        <?php echo $client_name;?>
                    </div>
                <?php endif;?>
                <?php if(has_category()):
                    $categories = get_the_category_list();    
                ?>
                    <div class="col-md px-0">
                        <h5 class="f--label">Services</h5>
                        <div class="list-container list-container--category">
                            <?php if(!empty($categories)){
                                echo ''.strip_tags($categories, '<ul>, <li>').'';
                            }?>
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
            <div class="case-study-intro__col col-md mb-5 pl-0">
                <h2 class="f--headline d-block pr-5"><?php echo $tagline;?></h2>
            </div>
            <?php if(!empty($full_desc)):?>
                <div class="case-study-intro__col col-md pl-0">
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
<?php get_template_part('template-parts/blocks/block', 'related-posts');?>

<?php get_footer();?>