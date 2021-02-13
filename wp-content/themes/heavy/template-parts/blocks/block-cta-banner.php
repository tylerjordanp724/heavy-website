<?php 
/**
 * 
 * Block Name : (CTA Banner)
 * 
 * 
 * 
 */
$title = get_sub_field('title');
$desc = get_sub_field('description');
$link = get_sub_field('link');
?>

<div class="cta-banner row-inside--lg d-flex align-items-center bg--gray-1 row-inside--xl">
    <div class="cta-banner__wrapper container text-center text-white">
        <div class="cta-banner__text col-md-6 m-auto">
            <?php if(!empty($title)):?>
                <h2 class="f--headline mb-4"><?php echo $title;?></h2>    
            <?php endif;?>
            <?php if(!empty($desc)):?>
                <p class="text-white mb-4"><?php echo $desc;?></p>    
            <?php endif;?>
            <?php if(!empty($link)):
                $link_text = $link['title'];
                $link_url = $link['url'];    
            ?>
                <a class="btn btn--white m-auto" href="<?php echo $link_url;?>"><span class="btn__text"><?php echo $link_text;?></span><span class="btn__arrow"></span></a>    
            <?php endif;?>
        </div>
    </div>
</div>