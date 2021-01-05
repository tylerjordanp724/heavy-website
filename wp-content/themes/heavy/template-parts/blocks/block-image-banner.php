<?php 
/**
 *  Block Name : Image Banner
 * 
 * 
 * 
 * 
 */
?>

<?php if(have_rows('image_selection')):?>
    <div class="image-banner d-md-flex">
        <?php while(have_rows('image_selection')): the_row();
            $image = get_sub_field('image');
        ?>
            <div class="img--wide-cover col-md">
                <figure>
                    <picture>
                        <img src="<?php echo $image;?>"/>
                    </picture>
                </figure>
            </div>
        <?php endwhile;?>
    </div>    
<?php endif;?>