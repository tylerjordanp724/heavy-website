<?php
/**
 * 
 * 
 * Block Name : Stats 
 * 
 */
$block_title = get_sub_field('title');
?>

<div class="stats row-inside--lg">
    <div class="stat__title block__title container">
        <div class="stat__title-container row-inside--md">
            <?php if(!empty($block_title)):?>
                <h4><?php echo $block_title;?></h4>  
            <?php endif;?>
            </div>
    </div>  
    <div class="stats__container container d-md-flex">
        <?php if(have_rows('stat')): while(have_rows('stat')): the_row();
            $stat_number = get_sub_field('stat_number');
            $stat_text = get_sub_field('stat_text');
        ?>
            <div class="stat col-md-4 text-center">
                <?php if(!empty($stat_number)):?>
                    <h1 class="f--headline counter-up"><?php echo $stat_number;?></h1>
                <?php endif;?>
                <?php if(!empty($stat_text)):?>
                    <p><?php echo $stat_text;?></p>    
                <?php endif;?>
            </div>
        <?php endwhile; endif;?>
    </div>
</div>