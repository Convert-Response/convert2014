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
			<div id="case-study-top" class="section" style="background-image:url(<?php echo the_field('large_top_image'); ?>)">
				<div class="next-case"><?php c2c_previous_or_loop_post_link('%link'); ?><?php c2c_next_or_loop_post_link('%link'); ?></div>
			</div>				
			<div id="case-content">

				<div id="inner-content" class="clearfix">
			
					<div id="main" class="clearfix row" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <h1 class="case-study-title large-12 columns"><?php the_title(); ?></h1>
						<h3 class="case-study-service large-12 columns"><?php echo the_field('case_study_service');?></h3>
						<div class="row">
							<div class="sub-line-full large-12 columns"></div>
						</div>	
					    <?php endwhile; endif; ?>
			
							<div class="large-6 medium-6 small-12 columns challenge">
								<h3 class="sub-title">OUR CHALLENGE</h3>
								<div class="sub-line"></div>									
								<div class="case-text"><?php echo the_field('our_challenge');?></div>
							</div>
							<div class="large-1 show-for-large-only columns"></div>
							<div class="large-5 medium-6 small-12 columns convert-helped">
								<h3 class="sub-title">HOW CONVERT HELPED</h3>
								<div class="sub-line"></div>							
								<div class="case-text"><?php echo the_field('how_we_helped');?></div>
							</div>
						<?php 
						$screenshot = get_field('site_screenshot');
						if ($screenshot) { ?>
						<div class="row site-screen">
							<div class="large-12">
								<img src="<?php echo $screenshot; ?>" width="100%">
							</div>
						</div>
						<?php } ?>
						
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #case-content -->
			<?php $takeimg = get_field('takeaway_bg_image');
			
			if($takeimg) { ?>
				<div id="takeaways" style="background:url(<?php echo get_field('takeaway_bg_image');?>);">
			<?php } else { ?>
				<div id="takeaways" style="background-color:<?php echo the_field('takeaway_bg_color');?>;">				
			<?php } ?>
				<div class="row">
					<div class="large-12 columns">
						<h3 class="project-snap-title" style="color:<?php echo the_field('takeaway_title_color');?>;">PROJECT SNAPSHOT</h3>
						<div class="sub-line"></div>
							<?php if( have_rows('snapshot_icons') ): ?>
							
							<ul class="row">
							
								<?php while( have_rows('snapshot_icons') ): the_row(); 
								
								// vars
								$icon = get_field_object('icon');
								$icon_title = get_sub_field('icon_title');
								$icon_copy = get_sub_field('icon_copy');
								
								$field = get_field_object('icon');
								$value = get_field('icon');
								$label = $field['choices'][ $value ];
								
								?>
								
									<li class="columns">
									
										<?php 
										
										echo $label;
											
										?>
										<?php echo $content; ?>
									
									</li>
								
								<?php endwhile; ?>
							
							</ul>
							
							<?php endif; ?>									
					</div>									
				</div>	
			</div>
			<div id="bottom-success">
				<div class="row">
					<div class="large-12 columns">
						<h3 class="sub-title">OUR SUCCESS</h3>
						<div class="sub-line"></div>									
						<div class="case-text"><?php echo the_field('success_message');?></div>
					</div>
				</div>	
			</div>
								
<?php footer_contact(); ?>	
<?php get_footer(); ?>