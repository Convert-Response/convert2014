<?php
/*
Template Name: Case Studies
*/
?>

<?php get_header(); ?>
			
<div id="case-studies-top">
	<div class="row">
		<div class="large-12 small-12 columns">
			<h1 class="tk-futura-pt">Case Studies</h1>
		</div>
	</div>	
</div> <!-- end #top-services -->	
<div id="case-study-showcase">
		<?php
			$args = array( 'post_type' => 'case-studies', 'posts_per_page' => 5 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="case-study row"> 
			<?php if( have_rows('stats' , $post->ID) ): ?>
			 
			<div class="large-6 small-12 left client-image columns">
			 	<a href="<?php the_permalink(); ?>"><div style="background-image:url(<?php echo the_field('client_image'); ?>)"></div></a>
			 </div>
			<div class="large-6 small-12 right client-info columns">
				<div class="">
					<h2 class="study-title tk-futura-pt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php 
						while( have_rows('stats' , $post->ID)): the_row(); ?>
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
						<?php if($statname) { ?>
							<div class="statname"><?php echo $statname; ?></div>
							<div class="raised"><?php echo $amount_raised; ?></div>
							<div class="signers"><?php echo $survey_signers; ?></div>
							<div class="statfigure"><?php echo $stat; ?></div>
							<div class="emails"><?php echo $emails_sent; ?></div>
							<div class="statnote"><?php echo $statnote; ?></div>
						<?php } ?>	
							<?php if ($web_address) { ?>
								<div class="web_address"><?php echo $web_address; ?></div>
							<?php } ?>
						</div>
				<?php endwhile; ?>
						<div class="left casestudy-text"><?php echo custom_field_excerpt('case_study_text'); ?></div>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endwhile;
		?>
		</div>
</div> <!-- end #our-process -->	
<?php footer_contact(); ?>			

<?php get_footer(); ?>