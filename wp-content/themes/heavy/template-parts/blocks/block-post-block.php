<?php
/**
 * Block Name : Post Block
 * 
 * 
 */
$post_block_content = get_sub_field('post_block_content');
?>
<div class="post-block">
    <div class="post-block__inner row-inside--md px-0">
        <?php if(!empty($post_block_content)):?>
            <?php echo $post_block_content;?>
        <?php endif;?>
    </div>
</div>