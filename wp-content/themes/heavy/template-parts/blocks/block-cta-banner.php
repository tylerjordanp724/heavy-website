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

<div class="cta-banner row-inside--lg d-flex align-items-center bg--gray-1">
    <div class="cta-banner__wrapper container text-center text-white">
        <?php if(!empty($title)):?>
            <h2 class="f--headline"><?php echo $title;?></h2>    
        <?php endif;?>
        <?php if(!empty($desc)):?>
            <p class="text-white"><?php echo $desc;?></p>    
        <?php endif;?>
        <?php if(!empty($desc)):?>
            <a class="btn btn--white" href="">something</a>    
        <?php endif;?>
    </div>
</div>