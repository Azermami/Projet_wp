<aside class="sidebar">
    <div class="widget">
        <h4 class="widget-title"><?php _e('Search'); ?></h4>
        <?php get_search_form(); ?>
    </div>
    

    <div class="widget">
        <h4 class="widget-title"><?php _e('Recent Posts'); ?></h4>
        <?php echo get_recent_posts_with_images_and_dates(4); ?>
    </div>

    <div class="widget">
        <h4 class="widget-title"><?php _e('Archives'); ?></h4>
        <ul class="list-archive">
            <?php wp_get_archives(array('type' => 'monthly', 'limit' => 12)); ?>
        </ul>
    </div>

    <div class="widget">
        <h4 class="widget-title"><?php _e('Categories'); ?></h4>
        <ul class="list-categorie">
            <?php wp_list_categories(array('title_li' => '')); ?>
        </ul>
    </div>

    <div class="widget">
        <h4 class="widget-title"><?php _e('Tags'); ?></h4>
        <div class="tag-links">
            <?php wp_tag_cloud(); ?>
        </div>
    </div>
</aside>
