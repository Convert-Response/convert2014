<?php
/*
Template Name: Resume
*/
?>

<?php get_header(); ?>
			<div id="top-resume">
	
			</div> <!-- end #content -->			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
					<?php echo do_shortcode('[contact-form-7 id="325" title="Job Application"]'); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
<script>
$(document).ready(function(){
	function getUrlVars() {
	    var vars = {};
	    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
	        vars[key] = unescape(value.replace(/\+/g,' '));
	        encodeURI(value);
	    });
	    return vars;
	}
	var job = getUrlVars()["job"];
	var jobdescription = getUrlVars()["description"];
	
	$('#job').html(getUrlVars()["job"]);
	$('#job-hidden').val(getUrlVars()["job"]);	

	$('#job-description').html(getUrlVars()["description"]);

	
});
</script>
<?php get_footer(); ?>
