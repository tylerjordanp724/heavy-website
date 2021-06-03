<?php 
/**
 * 
 * Block Name : Content List (Logo Grid)
 * 
 * 
 */
$title = get_sub_field('title');
$logo_grid =  get_sub_field('logo_grid');
?>
<div class="content-list content-list--logo-grid row-inside--lg">
    <div class="content-list__wrapper container">
        <?php if(!empty($title)):?>
            <div class="content-list__title">
                <h2 class="f--headline"><?php echo $title;?></h2>
            </div>
        <?php endif;?>
        <?php if(!empty($logo_grid)):?>
            <div class="content-list__logo-grid row">
                <?php 
                $i = 0;
                foreach($logo_grid as $logo):
                    $i++;
                    $logo_url = $logo['url'];

                    if($i > 4) {
                        $i = 0;
                        echo '</div><div class="content-list__logo-grid row">';
                    }
                ?>
                    <div class="logo-grid-item col-6 col-md-3 py-3">
                        <figure>
                            <picture>
                                <img class="b-lazy" data-src="<?php echo $logo_url;?>"/>
                            </picture>
                        </figure>
                    </div>
                <?php endforeach;?>
            </div>    
        <?php endif;?>
    </div>
</div>