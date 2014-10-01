<?php get_header(); ?>

<?php $current_tag = single_tag_title("", false); ?>

<div id = "main" class = "screen home">

    <article id = "home">
        <header>
            <h1><?php echo $current_tag;  ?></h1>
        </header>
    </article>

</div>

<?php get_footer('tag'); ?>