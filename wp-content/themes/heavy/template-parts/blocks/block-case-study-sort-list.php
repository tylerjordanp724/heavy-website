<?php
/**
 * Block Name: Case Study Sort List
 * 
 * 
 */
$case_study = get_sub_field('case_studies_list');
$count = 0;    
?>

 
    <!-- <div class="grid-sort-nav">
        <div class="grid-sort-nav__wrapper container">
            <div class="grid-sort-nav__list p-0">
                <div class="btn btn--filter btn--gray-1" data-filter="*">All</div>
                <div class="btn btn--filter btn--gray-1" data-filter=".featured">Featured</div>
                <div class="btn btn--filter btn--gray-1" data-filter=".branding">Branding</div>
                <div class="btn btn--filter btn--gray-1" data-filter=".film">Film</div>
                <div class="btn btn--filter btn--gray-1" data-filter=".higher-education">Higher Education</div>
                <div class="btn btn--filter btn--gray-1" data-filter=".digital">Digital</div>
                <div class="btn btn--filter btn--gray-1" data-filter=".identity">Identity</div>
                <div class="btn btn--filter btn--gray-1" data-filter=".advertising">Advertising</div>
            </div>
        </div>
    </div> -->
    <div class="grid grid-sort__row row-inside--lg">
        <div class="grid-sort__wrapper container">
            <div class="grid-sizer"></div>
            <?php foreach($case_study as $post): setup_postdata($post);
                $post_title = get_the_title($post->ID);
                $post_thumb = get_the_post_thumbnail_url($post->ID);
                $post_categories = get_the_category($post->ID);
                $slug = '';
                $count++;
                $grid_size = '';
                $grid_size_mod = '';

                if(!empty($post_categories)) {
                    foreach($post_categories as $cat) {
                        $slug .= $cat->slug.' ';
                    }
                }

                if($count === 1 || $count === 10) {
                    $grid_size = 'xl';

                    if($count === 10) {
                        $count = 1;
                    }
                }

                if($count === 2 || $count === 6 || $count === 8) {
                    $grid_size = 'md';

                    if($count === 2 || $count === 8) {
                        $grid_size_mod = '2';
                    }

                    if($count === 6) {
                        $grid_size_mod = '6';
                    }
                }
                
                if($count === 3 || $count === 5 || $count === 9) {
                    $grid_size = 'sm';
                }
                
                if($count === 4 || $count === 7) {
                    $grid_size = 'lg';

                    if($count === 4) {
                        $grid_size_mod = '4';
                    }

                    if($count === 7) {
                        $grid_size_mod = '7';
                    }
                }


            ?>
                <div class="grid-item grid-item--<?php echo $grid_size;?> <?php if(!empty($grid_size_mod)) {echo 'grid-item--'.$grid_size.'-'.$grid_size_mod.'';}?> <?php echo $slug;?> effect--hover">
                    <?php if(!empty($post_thumb)):?>
                        <div class="grid-item__img img--wide-cover">
                            <figure>
                                <picture>
                                    <img class="b-lazy" data-src="<?php echo $post_thumb;?>"/>
                                </picture>
                            </figure>
                        </div>
                    <?php endif;?>
                    <?php if(!empty($post_thumb)):?>
                        <h3><?php echo $post_title;?></h3>
                    <?php endif;?>
                    <a href="<?php echo get_permalink();?>" class="link-whole-area"></a>
                </div>
            <?php endforeach; wp_reset_postdata();?> 
        </div>
    </div> 