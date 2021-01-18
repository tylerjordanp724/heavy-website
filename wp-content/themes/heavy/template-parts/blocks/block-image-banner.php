<?php 
/**
 *  Block Name : Image Banner
 * 
 * 
 * 
 * 
 */
?>

<?php if(have_rows('image_selection')):
    $count;    
?>
    <div class="image-banner-row d-md-flex">
        <?php while(have_rows('image_selection')): the_row();
            $image = get_sub_field('image');
            $count = 0;
            if($count == 2) {
                echo '</div><div class="image-banner-row d-md-flex">';
            } 
        ?>
            <div class="img--wide-cover-banner col-md">
                <figure>
                    <picture>
                        <img src="<?php echo $image;?>"/>
                    </picture>
                </figure>
            </div>
        <?php endwhile; $count++;?>
    </div>    
<?php endif;?>