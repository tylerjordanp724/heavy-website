<?php 
/**
 * Block Name: Case Study List
 * 
 * 
 */
$title = get_sub_field('title');
$case_study = get_sub_field('case_studies_list');
?>
<div class="collection--list row-inside--lg">
    <div class="collection__wrapper container">
        <div class="collection__title">
            <?php if(!empty($title)):?>
                <h2 class="f--headline"><?php echo $title;?></h2>    
            <?php endif;?>
        </div>
        <div class="collection__list">
            <ul class="p-0">
                <?php foreach($case_study as $post): setup_postdata($post);
                    $post_title = get_the_title($post->ID);
                    $post_link = get_the_permalink($post->ID);
                ?>
                <li class="d-block">
                   <a class="py-4" href="<?php echo $post_link;?>"><span class="arrow"></span><?php echo $post_title;?></a>
                </li>
                <?php endforeach; wp_reset_postdata();?>
            </ul>
        </div>
    </div>
</div>