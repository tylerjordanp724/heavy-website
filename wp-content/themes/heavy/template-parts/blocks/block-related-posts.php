<?php 
/**
* Module Name : Related Posts
* 
*/
?>

<div class="related-posts row-inside--lg bg--gray-1 px-0">
    <div class="related-posts__inner container px-0">
            <div class="realted-post__title text-white px-3 mb-5">
                <h1>Related Projects</h1>
            </div>
            <div class="realted-posts__post-container d-md-flex">
                <?php foreach( $wpex_query->posts as $post ) : setup_postdata( $post );
                    $post_thumb = get_the_post_thumbnail();
                    $post_author = get_the_author();
                    $post_title = get_the_title();
                    $post_categories = get_the_category_list();
                    $post_date = get_the_date();
                ?>
                    <?php 
                        set_query_var('post_thumb', $post_thumb);
                        set_query_var('post_title', $post_title);
                        set_query_var('post_date', $post_date);
                        get_template_part('template-parts/components/component','post-teaser');
                    ?>
                <?php endforeach; wp_reset_postdata();?>
            </div>
    </div>
</div>