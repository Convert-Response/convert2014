<div class="large-12 columns show-for-medium-up">
	<div class="fixed">
		
		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->
	
<!--
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<li class="name">
					<h1> <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
				</li>
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>		
			<section class="top-bar-section">
				<?php joints_main_nav(); ?>
			</section>
		</nav>
-->
	</div>
</div>

<div class="large-12 columns">
	<div class="contain-to-grid fixed">
		<nav class="tab-bar fixed" data-topbar>
			<section class="left-logo">
				<a class="menu-icon" href="/"></a>
			</section>
			<section class="left-contact">
				<a class="menu-icon" ><i class="fi-mail large"></i></a>
			</section>
			<section class="left-small">
				<div class="left-off-canvas-toggle menu-icon" ><i class="fi-list large"></i></div>
			</section>								
			<section class="right-small">
				<a class="right-off-canvas-toggle menu-icon" ><span></span></a>
			</section>			
		</nav>
	</div>
</div>
						
<aside class="left-off-canvas-menu">
	<ul class="off-canvas-list">
		<li><label>Convert Marketing</label></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>

<aside class="right-off-canvas-menu">
	<ul class="off-canvas-list">
		<li><label>Sidebar</label></li>
			<?php get_sidebar('offcanvas'); ?>   
	</ul>
</aside>

			
<a class="exit-off-canvas"></a>