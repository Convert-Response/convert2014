<div class="large-12 columns">
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
	<div class="contain-to-grid">
		<nav class="tab-bar fixed">
			<section class="middle tab-bar-section">
				<h1 class="title"><?php bloginfo('name'); ?></h1>
			</section>
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>
	</div>
</div>
						
<aside class="left-off-canvas-menu">
	<ul class="off-canvas-list">
		<li><label>Navigation</label></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>