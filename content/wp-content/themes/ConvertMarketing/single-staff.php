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
			<div id="case-study-top" class="section" style="background-image:url(<?php echo the_field('large_top_staff_image'); ?>)">
				<div class="next-case"><?php c2c_previous_or_loop_post_link('%link'); ?><?php c2c_next_or_loop_post_link('%link'); ?></div>
			</div>	
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-12 medium-12 columns first clearfix" role="main">
						
<!--
							<div id="avatar" class="large-5 columns">							
								<?php 
								
									$image = get_field('animated_gif');
									
									if( !empty($image) ): ?>
								    <div class="round static" style="background-image:url(<?php if ( has_post_thumbnail() ) { echo wp_get_attachment_url( get_post_thumbnail_id() ); } ?>);"></div>									
									<div class="round animated" style="background-image:url(<?php echo $image['url']; ?>);"></div>
								<?php else: ?>
								    <div class="round" style="background-image:url(<?php if ( has_post_thumbnail() ) { echo wp_get_attachment_url( get_post_thumbnail_id() ); } ?>);"></div>	
-->								
								<!-- <?php endif; ?> -->
<!--
								<div class="social-links">
																																				</div>
-->
<!-- 							</div> -->
							<div id="bio-text" class="">
								<div class="staff-title-social-wrap row">
									<h1 class="large-6 columns"><?php the_title(); ?></h1>
									<div class="social-links large-6 columns">
									<?php 
									
									$email = get_field('email_address', $post->ID);									
									$facebook = get_field('facebook', $post->ID);
									$twitter = get_field('twitter', $post->ID);
									$instagram =  get_field('instagram', $post->ID);
									$linkedin = get_field('linkedin', $post->ID);
									$github = get_field('github', $post->ID);
									$dribble = get_field('dribble', $post->ID);									
									$flickr = get_field('flickr', $post->ID);	
									$behance = get_field('behance', $post->ID);
																												
									if( $facebook ):?>
										<div class="facebook social"><a href="<?php the_field('facebook', $post->ID);?>" target="_blank" title="Facebook"><i class="fi-social-facebook large"></i></a></div>
									<?php endif; ?>	
									<?php if( $twitter ):?>	
										<div class="twitter social"><a href="<?php the_field('twitter', $post->ID);?>" target="_blank" title="Twitter"><i class="fi-social-twitter large"></i></a></div>
									<?php endif; ?>		
									<?php if( $instagram ):?>	
										<div class="instagram social"><a href="<?php the_field('instagram', $post->ID);?>" target="_blank" title="Instagram"><i class="fi-social-instagram large"></i></a></div>
									<?php endif; ?>	
									<?php if( $linkedin ):?>	
										<div class="linkedin social"><a href="<?php the_field('linkedin', $post->ID);?>" target="_blank" title="LinkedIn"><i class="fi-social-linkedin large"></i></a></div>
									<?php endif; ?>													
									<?php if( $github ):?>	
										<div class="github social"><a href="<?php the_field('github', $post->ID);?>" target="_blank" title="Github"><i class="fi-social-github large"></i></a></div>
									<?php endif; ?>	
									<?php if( $dribble ):?>	
										<div class="dribble social"><a href="<?php the_field('dribble', $post->ID);?>" target="_blank" title="Dribble"><i class="fi-social-dribbble large"></i></a></div>
									<?php endif; ?>	
									<?php if( $flickr ):?>	
										<div class="flickr social"><a href="<?php the_field('flickr', $post->ID);?>" target="_blank" title="Flickr"><i class="fi-social-flickr large"></i></a></div>
									<?php endif; ?>	
									<?php if( $behance ):?>	
										<div class="behance social"><a href="<?php the_field('behance', $post->ID);?>" target="_blank" title="Behance"><i class="fi-social-behance large"></i></a></div>
									<?php endif; ?>										
								</div>
								</div>
								<div class="row">	
									<div class="staff-roll large-12 columns"><?php the_field('staff_job_title', $post->ID);?><?php if( $email ):?> - <?php the_field('email_address', $post->ID);?><?php endif; ?></div>
									<div class="staff-text text-1-col large-6 medium-12 small-12 columns">
										<?php the_field('1st_column_text');?>														
								    </div>	
								    <div class="large-6 medium-12 small-12 columns first clearfix questions">
										<?php if( have_rows('staff_questions') ): ?>
										 
											<ul class="row">
										 
											<?php while( have_rows('staff_questions') ): the_row(); 
										 
												// vars
												$questions = get_sub_field('question');
												$answers = get_sub_field('answer');
										 
												?>
										 
												<li class="slide large-12 columns">
						
												    <div class="question"><?php echo $questions; ?></div>						 
												    <div class="answer"><?php echo $answers; ?></div>
										 
												</li>
										 
											<?php endwhile; ?>
										 
											</ul>
										 
										<?php endif; ?>
									</div>			
								</div>												
							</div>	
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>