<?php 
/**
 * 
 * Block Name : Content List (Text List)
 * 
 * 
 */
$title = get_sub_field('title');
$layout = get_sub_field('layout');
?>

<div class="content-list content-list--logo-grid row-inside--md">
    <div class="content-list__wrapper container">
        <?php if(!empty($title)):?>
            <div class="content-list__title">
                <h2 class="f--headline"><?php echo $title;?></h2>
            </div>
        <?php endif;?>
        <?php if(have_rows('text_list')):?>
            <div class="content-list__text-list">
                <ul class="<?php if($layout === 'column') {echo 'd-lg-flex justify-content-between';}?>">
                    <?php while(have_rows('text_list')): the_row();
                        $text = get_sub_field('title');
                    ?>
                        <li><?php echo $text;?></li>
                    <?php endwhile;?>
                </ul>
            </div>    
        <?php endif;?>
        
    </div>
</div>