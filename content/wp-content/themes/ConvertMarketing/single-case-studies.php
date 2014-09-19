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
			<div id="takeaways" style="background-color:<?php echo the_field('takeaway_bg_color');?>;">				
				<div class="row">
					<div class="large-12 columns">
						<h3 class="project-snap-title" style="color:<?php echo the_field('takeaway_title_color');?>;">PROJECT SNAPSHOT</h3>
						<div class="sub-line"></div>
							<?php

							 if( get_field('snapshot_icons') ): ?>
							
							<ul class="row">
							
								<?php 
								$i = 0;
								$x = 0;
								$y = 0;
								while( has_sub_field('snapshot_icons')):
								
								// vars
								$icon_number = get_sub_field('icon_number');
								$icon_start = get_sub_field('start_count_number');	
								$icon_end = get_sub_field('icon_number');															
								$icon_copy = get_sub_field('icon_copy');
								$icon_psym = get_sub_field('proceeding_symbol');
								$icon_fsym = get_sub_field('following_symbol');								
							    $icon = get_sub_field('icon'); 
							    
							    ?>
							    	<li class="large-4 columns">
										<?php if( $icon == 'clicks' ){ ?>
												<i class="icon icon-c_clicks"></i>
											<?php } else if( $icon  == 'opens' ){ ?>
												<i class="icon icon-c_opens"></i>
											<?php } else if( $icon  == 'conversions' ){ ?>
												<i class="icon icon-c_conversions"></i>
											<?php } else if( $icon  == 'signatures' ){ ?>
												<i class="icon icon-c_signatures"></i>
											<?php } else if( $icon  == 'recovery' ){ ?>
												<i class="icon icon-c_recovery"></i>
											<?php } else if( $icon  == 'donor' ){ ?>
												<i class="icon icon-c_donor"></i>
											<?php } else if( $icon  == 'lead' ){ ?>
												<i class="icon icon-c_lead"></i>							
											<?php } else if( $icon  == 'none' ){ ?>
												
										<?php } ?>
																		
										<div class="icon-number"><?php echo $icon_psym; ?><span id="icon-digit-<?php echo $i++; ?>"></span><?php echo $icon_fsym; ?></div>
										<div style="display:none;" id="icon-start-<?php echo $x++; ?>"><?php echo $icon_start; ?></div>		
										<div style="display:none;" id="icon-end-<?php echo $y++; ?>"><?php echo $icon_end; ?></div>
										<div class="icon-copy"><?php echo $icon_copy; ?></div>
									
									</li>
								
								<?php endwhile; ?>
							
							</ul>
							
							<?php endif; ?>									
					</div>									
				</div>	
			</div>
			<script>
				jQuery(document).ready(function($) {
				
					jQuery('.single-case-studies #main').waypoint(function() {
						jQuery('.icon').fadeIn(900);
						var number1 = $('#icon-start-0').text();
						var number2 = $('#icon-start-1').text();		
						var number3 = $('#icon-start-2').text();
						var end1 = $('#icon-end-0').text();
						var end2 = $('#icon-end-1').text();		
						var end3 = $('#icon-end-2').text();														
						var numAnim1 = new countUp("icon-digit-0", number1, end1, 0, 3);
					    numAnim1.start();
						var numAnim2 = new countUp("icon-digit-1", number2, end2, 0, 3);
					    numAnim2.start();	
						var numAnim3 = new countUp("icon-digit-2", number3, end3, 0, 3);
					    numAnim3.start();						
					}, { offset: 700 });																		    				    
			    });							
			</script>
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