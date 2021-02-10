<?php
/**
 * Block Name: Case Study Sort List
 * 
 * 
 */
$args = array('post_type' => 'case_study', 'posts_per_page' => -1);
$case_studies = new WP_Query($args);    
?>

<?php if($case_studies -> have_posts()):
    $count = 0;
?> 
    <div class="grid-sort-nav">
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
    </div>
    <div class="grid grid-sort__row row-inside--lg">
        <div class="grid-sort__wrapper container">
            <div class="grid-sizer"></div>
            <?php while($case_studies -> have_posts()): $case_studies -> the_post();
                $post_title = get_the_title();
                $post_thumb = get_the_post_thumbnail();
                $post_categories = get_the_category();
                $slug = '';
                $count++;
                $grid_size = '';

                if(!empty($post_categories)) {
                    foreach($post_categories as $cat) {
                        $slug .= $cat->slug.' ';
                    }
                }

                if($count === 1 || $count === 7) {
                    $grid_size .= 'xl';
                }

                if($count % 2 === 0) {
                    $grid_size = 'md';
                } elseif($count % 3 === 0 || $count === 5) {
                    $grid_size .= 'sm';
                }
                
                if($count === 4) {
                    $grid_size = 'lg-4';
                }

                if($count === 8) {
                    $grid_size = 'lg-8';
                }

                if($count === 6) {
                    $grid_size = 'md-6';
                    $count = 1;
                }
            ?>
                <div class="grid-item grid-item--<?php echo $grid_size;?> <?php echo $slug;?>">
                    <?php if(!empty($post_thumb)):?>
                        <div class="grid-item__img img--wide-cover">
                            <figure>
                                <picture>
                                    <img src="<?php echo $post_thumb;?>"/>
                                </picture>
                            </figure>
                        </div>
                    <?php endif;?>
                    <?php if(!empty($post_thumb)):?>
                        <h3><?php echo $post_title;?></h3>
                    <?php endif;?>
                    <a href="<?php echo get_permalink();?>" class="link-whole-area"></a>
                </div>
            <?php endwhile; wp_reset_postdata();?> 
        </div>
    </div> 
<?php endif;?>