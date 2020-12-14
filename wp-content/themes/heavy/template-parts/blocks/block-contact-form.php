<?php
/**
 * Block Name: Contact Form
 * 
 * 
 */
$form_shortcode = get_sub_field('form_shortcode');
?>
<?php if(!empty($form_shortcode)):?>
    <div class="contact-form row-inside--lg">
        <div class="contact-form__wrapper container">
            <div class="contact-form__col col-10 m-auto">
                <?php echo do_shortcode($form_shortcode);?>
            </div>
        </div>
    </div>
<?php endif;?>

