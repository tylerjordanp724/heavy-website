<?php
/**
 * Block Name : Careers
 * 
 * 
 */
$title = get_sub_field('title');
?>

<div class="careers row-inside--lg bg--white-1">
    <div class="careers__container container">
        <?php if(!empty($title)):?>
            <div class="section-title">
                <h5><?php echo $title;?></h5>
            </div>    
        <?php endif;?>
        <?php if(have_rows('positions')):?>
            <div class="careers__list row-inside--lg px-0 d-md-flex">
                <div class="career__title-list col-md-3 pl-0">
                    <span>Currently Seeking:</span>
                    <ul class="mt-3 p-0">
                        <?php while(have_rows('positions')): the_row();
                          $career_title = get_sub_field('title');      
                        ?>
                            <?php if(!empty($career_title)):?>
                                <li data-title="<?php echo sanitize_title_with_dashes($career_title);?>"><?php echo $career_title;?></li>
                            <?php endif;?>
                        <?php endwhile;?>
                    </ul>
                </div>
                <div class="career__desc col pl-0">
                    <?php while(have_rows('positions')): the_row();
                        $career_title = get_sub_field('title'); 
                        $career_desc = get_sub_field('description');
                    ?>
                        <?php if(!empty($career_desc)):?>
                            <div class="career__desc-container row-inside--md px-0" id="<?php echo sanitize_title_with_dashes($career_title);?>">
                                <?php echo $career_desc;?>
                            </div>
                        <?php endif;?>
                    <?php endwhile;?>
                </div>
            </div>    
        <?php endif;?>
    </div>
</div>