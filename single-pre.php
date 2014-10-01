<?php get_header('pre'); ?>


<div id = "main" class = "screen">
<div class = "wrapper">

<article>
        
        
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			
			$agency = get_post_custom_values("Agency", $post->ID);	
			$brand = get_post_custom_values("Brand", $post->ID);
		
		?> 
        
        

		<header>
        	<div class = "content">
            	<div class = "nextLinks">
					<?php if(get_adjacent_post(TRUE, '', FALSE)){
                    	next_post_link('%link', '< %title', TRUE);
                    } else {
						echo '<p></p>';
                    }; ?>
                    <div class = "line"></div>
					<?php if(get_adjacent_post(TRUE, '', TRUE)){
                        previous_post_link('%link', '%title >', TRUE);
                    } else {
						echo '<p></p>';
                    }; ?>
                    <div class = "clearfix"></div>
                </div>
        		<h1><?php the_title(); ?></h1>
            	<?php the_content(); ?>
                
            </div>
        </header>
		<div class = "extra">
			<span class = "agency">Agency </span><?php echo $agency[0]; ?><span class = "brand"> Brand </span><?php echo $brand[0]; ?><span class = "roles"> Roles </span><?php echo strip_tags(get_the_tag_list('',', ','')); ?> 
        </div>
		<div class = "images">
		
 <?php 
 
 	display_images_in_list("<img src ='", "' />");
  ?>

</div>

<div class = "clearfix"></div> 

<?php endwhile; endif; ?>
      </article>

</div>
</div>
        
<?php get_footer(); ?>