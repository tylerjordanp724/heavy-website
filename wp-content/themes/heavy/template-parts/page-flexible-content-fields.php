<?php
/**
 *  Flexible Content Fields
 * 
 */
?>

<?php if(have_rows('flexible_content_blocks')):?>
    <?php while(have_rows('flexible_content_blocks')): the_row();?>
        we got some shit
    <?php endwhile;?>  
<?php endif;?>