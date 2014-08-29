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
				<div class="next-case"><?php previous_post_link('%link'); ?><?php next_post_link('%link'); ?></div>
			</div>				
			<div id="case-content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-12 columns first clearfix" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <h1><?php the_title(); ?></h1>
						
					    <?php endwhile; endif; ?>
			
						<div class="row">
							<div class="large-6 left columns">
								<img src="<?php echo the_field('client_image');?>">
							</div>
							<div class="large-6 right columns">
								<div class="case-text"><?php echo the_field('case_study_text');?></div>
							</div>
						</div>
						<div class="row stat-row">
							<div class="large-12">
								<?php while( have_rows('stats' , $post->ID)): the_row(); ?>
								<?php	// vars
								$statname = get_sub_field('stat_name');
								$stat = get_sub_field('stat');
								$statnote = get_sub_field('stat_notes');
								$amount_raised = get_sub_field('amount_raised');
								$survey_signers = get_sub_field('survey_signers');
								$emails_sent = get_sub_field('emails_sent');
								$web_address = get_sub_field('web_address');
								?>
							
								<div class="left large-3 small-3 stat">
									<div class="statname"><?php echo $statname; ?></div>
									<div class="raised"><?php echo $amount_raised; ?></div>
									<div class="signers"><?php echo $survey_signers; ?></div>
									<div class="statfigure"><?php echo $stat; ?></div>
									<div class="emails"><?php echo $emails_sent; ?></div>
									<div class="statnote"><?php echo $statnote; ?></div>
								</div>
								<div class="web_address"><a href="http://<?php echo $web_address; ?>" target="_blank"><?php echo $web_address; ?></a></div>
								<?php endwhile; ?>

							</div>
						
						</div>
						<div class="row content">
							<div class="large-12">
							<?php the_content(); ?>	
							</div>
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
    
			</div> <!-- end #content -->
<?php footer_contact(); ?>	
<?php get_footer(); ?>