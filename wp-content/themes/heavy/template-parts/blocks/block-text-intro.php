<?php 
/**
 * Block Name: Text Intro
 * 
 */
$title = get_sub_field('title');
$desc = get_sub_field('text');
?>
<?php if(!empty($title)):?>
    <div class="case-study-intro row-inside--xl px-0">
        <div class="case-study-intro__wrapper container d-md-flex px-md-0">
            <div class="case-study-intro__col col-md mb-5 pr-md-5">
                <h1 class="f--headline"><?php echo $title;?></h1>
            </div>
            <?php if(!empty($desc)):?>
                <div class="case-study-intro__col col-md">
                    <p><?php echo $desc;?></p>
                </div>
            <?php endif;?>
        </div>
    </div>
<?php endif;?>