<?php 
$tb_menu_search_icon 		= 1;
$tb_menu_mini_cart   		= 1;
$tb_header_three_logo     	= '';
$tb_header_three_logo_sticky= '';
$tb_header_three_desc     	= '';
$tb_header_three_social   	= '';

if(function_exists('cs_get_option')) :
	$tb_menu_search_icon 			= cs_get_option('tb_menu_search_icon');
	$tb_menu_mini_cart 	 			= cs_get_option('tb_menu_mini_cart');
	$tb_header_three_logo 			= cs_get_option('tb_header_three_logo');
	$tb_header_three_logo  			= wp_get_attachment_url($tb_header_three_logo );
	$tb_header_three_logo_sticky 	= cs_get_option('tb_header_three_logo_sticky');
	$tb_header_three_logo_sticky  	= wp_get_attachment_url($tb_header_three_logo_sticky );
	$tb_header_three_desc  			= cs_get_option('tb_header_three_desc');
	$tb_header_three_social  		= cs_get_option('tb_header_three_social');

	
endif;

 ?>
	<header id="header-style-three">
		<div class="header-top">
			<div class="container">
				<div class="row">
			        <div class="welcome-text">
			            <p><?php echo esc_html( $tb_header_three_desc ); ?></p>
			        </div>						
					<div class="logo">
						<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( $tb_header_three_logo ); ?>" alt="<?php bloginfo('name') ?>" /></a>
					</div>
					<?php if($tb_header_three_social) : ?>
					<div class="social-icon">
						<ul>
							<?php foreach( $tb_header_three_social as $social_single ) : ?>
								<li><a href="<?php echo esc_url($social_single['social_url'] ); ?>"><i class="<?php echo esc_attr($social_single['social_icon'] ); ?>" aria-hidden="true"></i></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php endif; ?>							
				</div>
			</div>
		</div>			
		<div class="mainmenu-area" id="sohag">
			<div class="container">
				<div class="row">
					<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo ( $tb_header_three_logo_sticky ) ? esc_url( $tb_header_three_logo_sticky ) : esc_url( $tb_header_three_logo );?>" alt="" /></a>
					<div class="nav-menu">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar-one bar-stick"></span>
							<span class="icon-bar-two bar-stick"></span>
							<span class="icon-bar-three bar-stick"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php if(has_nav_menu( 'primary_menu' )) : ?>
								<?php 
									wp_nav_menu(array(
										'theme_location'	=> 'primary_menu',
										'menu_class'		=> 'nav navbar-nav',
										'container'			=> '',
										'walker'			=> new The_Boss_Bootstrap_Navwalker(),
									));
								?>
							<?php endif; ?>
						</div><!-- /.navbar-collapse -->
					</nav>
					</div>
					<div class="mainmenu-right">
						<?php if($tb_menu_search_icon == 1) : ?>
							<div class="search-box">
								<i class="fa fa-search first_click" aria-hidden="true"></i>
								<i class="fa fa-times second_click" aria-hidden="true"></i>
							</div>
						<?php endif; ?>
					<?php if($tb_menu_mini_cart == 1) : ?>
						<div class="chart-icon">
						    <p>$ 240.00</p>
							<i class="fa fa-shopping-cart" aria-hidden="true">
								<span class="chart-number">2</span>
							</i>
							<ul class="cart-list">
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri() ; ?>/images/menu_cart_01.jpg" alt="" /></a>
									<div class="cart-selected-product">
										<h3><a href="#">Product Title</a></h3>
										<span class="cart-select-quantity">Quantity : 1</span>
										<span>$85</span>
									</div>
									<div class="cart-list-delate">
										<i class="fa fa-times"></i>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri() ; ?>/images/menu_cart_02.jpg" alt="" /></a>
									<div class="cart-selected-product">
										<h3><a href="#">Product Title</a></h3>
										<span class="cart-select-quantity">Quantity : 1</span>
										<span>$85</span>
									</div>
									<div class="cart-list-delate">
										<i class="fa fa-times"></i>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri() ; ?>/images/menu_cart_03.jpg" alt="" /></a>
									<div class="cart-selected-product">
										<h3><a href="#">Product Title</a></h3>
										<span class="cart-select-quantity">Quantity : 1</span>
										<span>$85</span>
									</div>
									<div class="cart-list-delate">
										<i class="fa fa-times"></i>
									</div>
								</li>
								<li class="cart-select-total">
									<h3>Subtotal :</h3>
									<span>$40.00</span>
									<a href="shop_cart_page.html">Checkout</a>
								</li>
							</ul>
						</div>
					<?php endif; ?>							
					</div>
					<div class="search-box-text">
						<form action="<?php echo esc_url( home_url() ); ?>">
							<input type="text" name="s" id="all-search" placeholder="Search Here"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>