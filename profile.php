<?php
/*
Template Name: Profile
*/
?>
<?php get_header(); ?>

<div id = "mainProfile" class = "screen profile">

<article id = "profile">

	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	
		<section class = "mainColumn">
            <?php $thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <header id = "intro" style = "background-image: url(<?php echo $thumb_url; ?>)">
                <div class = "content"><h1><?php echo get_the_excerpt(); ?></h1></div>
            </header>
            <div class = "content">
                
                <?php the_content(); ?>
            </div>
		</section>
    
		
	<?php endwhile; endif; wp_reset_query(); ?>
    
        <section class = "sideColumn">
            
            <div class = "content">
            
                
                
                <div class = "columnSection">
                    <h2>Where I've worked</h2>
                    <a class = "cta" href = "http://www.f-90.co.uk/peter_wright_cv.pdf" target = "_blank">Download C.V.</a>
                    <?php
                        query_posts('category_name=jobs');
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <div class = "job">
                                    <h3><span>Company</span><?php the_title(); ?></h3>
                                    <?php the_content() ?>
                                </div>
                        <?php 
                                endwhile;
                        else:
                            echo 'no posts';
                        endif;
                        wp_reset_query();
                    ?>
                </div>
            
            </div>
            
        </section>
	
</article>

</div>

<?php get_footer(); ?>