<?php
/*
Template Name: Pattern
*/
?>
<?php get_header(); ?>

<div id = "mainProfile" class = "screen profile">

<article id = "home">
    <header>
            <h1>Petterns</h1>
    </header>
    <?php require_once (ABSPATH . WPINC . '/feed.php');
    $rss = @fetch_feed('http://feeds.feedburner.com/Patternpic');
 
    if (!is_wp_error( $rss ) ) :
        $maxitems = $rss->get_item_quantity(50);
        $rss_items = $rss->get_items(0, $maxitems);
    endif;
 
    foreach ( $rss_items as $item ) : ?>
        <div class="tumblr-post">
            <p><?php echo string_limit_words($item->get_description(), 25); ?>
        [<a href='<?php echo wp_filter_kses($item->get_link()); ?>'>read more...]</a></p>
        </div>
    <?php endforeach; ?>
	
	
</article>

</div>

<?php get_footer(); ?>