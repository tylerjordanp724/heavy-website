<?php 
/**
 * Block Name: Case Study Grid
 * 
 * 
 */
$case_study = get_sub_field('case_studies_list');
?>
<?php if(is_page('good-together')): $i = 0;?>
    <div class="collection--list collection--list-pro-bono d-md-flex flex-wrap">
        <?php foreach($case_study as $post): setup_postdata($post);
            $i++;
            $post_title = get_the_title($post->ID);
            $post_link = get_the_permalink($post->ID);
            if(has_post_thumbnail()){
				$imgID = get_post_thumbnail_id($post->ID);
				$featuredImage = wp_get_attachment_image_src($imgID, 'full' );
				$imgURL = $featuredImage[0];
			}
        ?>
            <div class="collection__item p-0 <?php if($i % 2 === 0) { echo 'right-col'; }else { echo 'left-col'; };?>" style="background:url(<?php echo $imgURL;?>) no-repeat center center/cover">
                <div class="collection__item-meta">
                    <span><?php echo $post_title;?></span>
                </div>
                <a class="link-whole-area" href="<?php echo $post_link;?>"></a>
            </div>
        <?php endforeach; wp_reset_postdata();?>
    </div>
<?php else:?>
    <div class="collection--list">
        <div class="collection__wrapper container px-0">
            <div class="collection__grid d-md-flex flex-wrap">
                <?php foreach($case_study as $post): setup_postdata($post);
                    $post_title = get_the_title($post->ID);
                    $post_link = get_the_permalink($post->ID);
                    $post_thumb = get_the_post_thumbnail($post->ID);
                ?>
                    <div class="col-md-4 mb-5">
                        <div class="img--wide-cover">
                            <figure class="mb-0">
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
<?php endif;?>

