<?php 
/**
 * Block Name: Case Study Grid
 * 
 * 
 */
$case_study = get_sub_field('case_studies_list');
?>

<div class="collection--list <?php if(is_page('good-together')){ echo 'collection--pro-bono px-0';} else {
    echo 'row-inside--lg';
}?>">
    <div class="collection__wrapper container<?php if(is_page('good-together')){echo '-fluid no-gutters';}?> px-0">
        <div class="collection__grid d-md-flex flex-wrap">
            <?php 
                $i = 0;
                foreach($case_study as $post): setup_postdata($post);
                $i++;
                $post_title = get_the_title($post->ID);
                $post_link = get_the_permalink($post->ID);
                $post_thumb = get_the_post_thumbnail($post->ID);
            ?>
                <div class="collection__item col-md-<?php if(is_page('good-together')){ echo '6 p-0'; }else { echo '4 mb-5'; }?> <?php if(is_page('good-together') && $i % 2 === 0){ echo 'right-col';} else{ echo 'left-col';}?>">
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