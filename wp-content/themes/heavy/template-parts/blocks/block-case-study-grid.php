<?php 
/**
 * Block Name: Case Study Grid
 * 
 * 
 */
$case_study = get_sub_field('case_studies_list');
?>

<div class="collection--list <?php if(!is_page('good-together')){ echo 'row-inside--lg';}?>">
    <div class="collection__wrapper container<?php if(is_page('good-together')){echo '-fluid no-gutters p-0';}?> px-0">
        <div class="collection__grid d-md-flex flex-wrap">
            <?php foreach($case_study as $post): setup_postdata($post);
                $post_title = get_the_title($post->ID);
                $post_link = get_the_permalink($post->ID);
                $post_thumb = get_the_post_thumbnail($post->ID);
            ?>
                <div class="col-md-<?php if(is_page('good-together')){ echo '6 p-0'; }else { echo '4 mb-5'; }?>">
                    <div class="img--wide-cover">
                        <figure class="mb-0">
                            <picture>
                                <img src="<?php echo $post_thumb;?>"/>
                            </picture>
                        </figure>
                    </div>
                    <?php if(!is_page('good-together')):?>
                        <span><?php echo $post_title;?></span>
                    <?php endif;?>
                    <a class="link-whole-area" href="<?php echo $post_link;?>"></a>
                </div>
            <?php endforeach; wp_reset_postdata();?>
            
        </div>
    </div>
</div>