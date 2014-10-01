<?php get_header(); ?>

<?php $current_category = single_cat_title("", false); ?>

<div id = "main" class = "screen home">

    <article id = "home">
        <header>
            <h1><?php echo $current_category;  ?></h1>
        </header>
    </article>

</div>

<?php get_footer('category'); ?>