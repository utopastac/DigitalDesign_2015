<?php get_header(); ?>


<div id = "main" class = "screen">

<article id = "project">
        
        
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			
			$agency = get_post_custom_values("Agency", $post->ID);	
			$brand = get_post_custom_values("Brand", $post->ID);
		
		?> 
        
        
        <section class = "sideColumn">
            <div class = "content">
                <header>
                    
                    <h1><?php the_title(); ?></h1>
                    
                    <div class = "extra">
                        <p><span class = "agency">Agency </span><?php echo $agency[0]; ?></p>
                        <p><span class = "brand"> Brand </span><?php echo $brand[0]; ?></p>
                        <p><span class = "roles"> Roles </span><?php echo strip_tags(get_the_tag_list('',', ','')); ?></p>
                    </div>                
                </header>
                
                <section class = "mainContent"><?php the_content(); ?></section>
            
                <div class = "nextLinks clearfix">
                        <?php if(get_adjacent_post(TRUE, '', FALSE)){
                            next_post_link('%link', '<i class="fa fa-long-arrow-left"></i> %title', TRUE);
                        } else {
                            echo '<p></p>';
                        }; ?>
                        <div class = "line"></div>
                        <?php if(get_adjacent_post(TRUE, '', TRUE)){
                            previous_post_link('%link', '%title <i class="fa fa-long-arrow-right"></i>', TRUE);
                        } else {
                            echo '<p></p>';
                        }; ?>
                 </div>
             </div>
        </section>
        
        <section class = "mainColumn">
		    <div class = "content">
            <div class = "images">
                <ul>
            
     <?php 
        display_images_in_list("<li class = '", "'><span></span><img src ='", "' /></li>");
      ?>
                </ul>
            </div>
            </div>
        </section>

<?php endwhile; endif; ?>
      </article>

</div>
        
<?php get_footer('category'); ?>