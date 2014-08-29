<div class="show-for-large-up">
	<div class="">
	
		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->
	
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<!-- Title Area -->
				<li class="name">
					<a class="logo" href="/"></a>	
				</li>
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>		
			<section class="top-bar-section">
				<?php joints_mobile_main_nav(); ?>
			</section>
		</nav>
	</div>
</div>

<div class="hide-for-large-up">
	<div class="contain-to-grid top-fixed-menu" >
		<nav class="tab-bar">
			<a class="logo" href="/"></a>	
			<section class="middle tab-bar-section">
				<h1 class="title"><?php bloginfo('name'); ?></h1>
			</section>
			<section class="right-small">
				<a class="right-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>
	</div>
</div>
						
<aside class="right-off-canvas-menu hide-for-large-up">
	<ul class="off-canvas-list">
<!-- 		<li><label>Navigation</label></li> -->
	<div class="nav-logo"></div>
			<?php joints_mobile_main_nav(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>