<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			<div id="career-top" class="section">
				<div class="row">
					<div class="large-12">
						<div class="tagline">If you're one of us, you'll join.</div>
					</div>
				</div>		
			</div>				
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-8 medium-8 columns first clearfix" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <h2><?php the_title(); ?></h2>	
					    <div>Posted on <?php the_date(); ?></div><br>
						<?php the_content(); ?>

					    					
					    <?php endwhile; endif; ?>
			
					</div> <!-- end #main -->

					<div id="side" class="large-4 medium-4 columns second clearfix" role="sidebar">
					    <h3>Other Job Postings</h3>	
							<?php 
							$this_post = $post->ID;
							$args = array( 'post_type' => 'career', 'post__not_in' => array($this_post), 'posts_per_page' => 2 );
							$loop = new WP_Query( $args );
						
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="side-job-posting">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4><?php
								echo '<div class="entry-content">';
								the_excerpt();
								echo '</div>';
							echo '</div>';	
							endwhile; ?>						
					</div>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
<?php footer_contact(); ?>	
<?php get_footer(); ?>