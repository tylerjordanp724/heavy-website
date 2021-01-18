<?php
/**
 * Block Name : Text Banner
 * 
 * 
 */
$banner_title = get_sub_field('title');
$banner_desc = get_sub_field('description');
?>

<?php if(!empty($banner_title)):?>
    <div class="text-banner container d-md-flex row-inside--md">
        <div class="text-banner__col text-banner__col--title col-md">
            <h5><?php echo $banner_title;?></h5>
        </div>
        <?php if(!empty($banner_desc)):?>
            <div class="text-banner__col text-banner__col--body col-md">
                <p><?php echo $banner_desc;?></p>
            </div>
        <?php endif;?>
    </div>
<?php endif;?>