<?php 
/**
 * Block Name: Case Study Grid
 * 
 * 
 */
$case_study = get_sub_field('case_studies_list');
?>

<div class="collection--list row-inside--lg">
    <div class="collection__wrapper container">
        <div class="collection__grid d-md-flex">
            <?php foreach($case_study as $post): setup_postdata($post);
                $post_title = get_the_title($post->ID);
                $post_link = get_the_permalink($post->ID);
                $post_thumb = get_the_post_thumbnail($post->ID);
            ?>
                <div class="col-md-4">
                    <div class="img--wide-cover">
                        <figure>
                            <picture>
                                <img src="<?php echo $post_thumb;?>"/>
                            </picture>
                        </figure>
                    </div>
                    <span><?php echo $post_title;?></span>
                    <a class="link-whole-area" href="<?php echo $post_link;?>"></a>
                </div>
            <?php endforeach; wp_reset_postdata();?>
            
        </div>
    </div>
</div>