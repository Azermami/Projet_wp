<?php get_header('404'); ?>

<main id="site-main" class="site-main not-found">
    <div class="container">
        <div class="row">
            <div class="">
            <h1>404 Error.</h1>
            <p>The page you were looking for couldn't be found.</p>
            <p>Maybe try a search?</p>
            <br>
            <?php get_search_form(); ?>
            </div>
        </div>
    </div>

<?php get_footer('404') ?>