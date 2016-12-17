<?php
/*
	Tema fundacion mis años bellos
	Creado mager19
	Menu-Top
*/
?>

<div class="col-md-3">
	<div class="menu-top__logo">
		<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=150&h=80" alt="">
	</div>
</div>
<div class="col-md-7">
	<!-- Menu -->			
	<div class="header__nav">								
		<nav class="navbar navbar-default">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <?php
			        wp_nav_menu( array(
			            'theme_location' => 'menu_principal',
			            'depth' => 2,
			            'container' => false,
			            'menu_class' => 'nav navbar-nav',
			            'fallback_cb' => 'wp_page_menu',
			            //Process nav menu using our custom nav walker
			            'walker' => new wp_bootstrap_navwalker())
			        );
			    ?>
			</div><!-- /.navbar-collapse --> 									    
		</nav> 
	</div><!-- / Menu  -->
</div>