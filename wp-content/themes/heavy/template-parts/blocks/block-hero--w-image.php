<?php
/**
 * Block Name : Header w/ Image
 * 
 * 
 */
$bg_color = get_sub_field('background_color');
$hero_img = get_sub_field('image');
?>

<div class="hero hero--w-image d-flex align-items-center" style="<?php if(!empty($bg_color)){ echo 'background-color:'.$bg_color.''; }?>">
    <div class="hero__content container">
        <div class="hero__image">
            <figure>
                <picture>
                    <img class="d-block m-auto" src="<?php if(!empty($hero_img)){ echo $hero_img; }?>"/>
                </picture>
            </figure>
        </div>
    </div>
</div>