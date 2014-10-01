<div class = "screen foot">
    <h4>Portfolio</h4>
	<footer>
        <?php
			if(is_single()) { $currentpost = get_the_ID(); }
			//query_posts('numberposts=20&category_name=work');
			$temp = $wp_query;
			$wp_query = null;
			$wp_query = new WP_Query();
			$wp_query->query('posts_per_page=20&category_name=work');
			//end of query section
			if ($wp_query->have_posts()) :
			    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class = "item">
                    <a href = "<?php the_permalink(); ?>" class = "internal<?php if($currentpost == $post->ID) { echo ' current'; } ?>">
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class = "thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class = "block">
                            <h3><?php the_title(); ?></h3>
                            <?php 
	                            $tags = wp_get_post_tags($post->ID);
	                            $html = '<ul>';
	                            foreach ( $tags as $tag ) {
	                                $html .= "<li>{$tag->name}</li>";
	                            }
	                             $html .= "</ul>";
	                             echo $html;
	                           
	                           ?>
                        </div>
                        <span class = "seen">
	                    	viewed <i class = 'fa fa-check'></i>
	                    </span>
                    </a>
                    
                </div>
			<?php
    		        endwhile;
				next_posts_link('&laquo; Older Entries');
				previous_posts_link('Newer Entries &raquo;');
			else:
				echo 'no posts';
			endif;
			wp_reset_query();
		?>
        
        <div class = "clearfix"></div>
    
      </footer>
</div>
</body>
</html>