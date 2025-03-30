<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vgday-tailwindv4
 */

?>

<header id="masthead" class="bg-slate-50 fixed w-full top-0 left-0">

<i class="ri-arrow-left-up-line"></i>

	<div class="flex items-center justify-between h-16 sm:h-20">

			
		<div>
			<?php
			if ( is_front_page() ) :
				?>
				<h1><?php bloginfo( 'name' ); ?></h1>
				<?php
			else :
				?>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;

			$vgday_tailwindv4_description = get_bloginfo( 'description', 'display' );
			if ( $vgday_tailwindv4_description || is_customize_preview() ) :
				?>
				<p><?php echo $vgday_tailwindv4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>
		

		<nav 
			class="" 
			aria-label="<?php esc_attr_e( 'Main Navigation', 'vgday-tailwindv4' ); ?>">
			
			<button 
				aria-controls="primary-menu" 
				aria-expanded="false"
				id="hamberger" class="cursor-pointer z-50"
				>
					
					<scan class="sr-only"><?php esc_html_e( 'Primary Menu', 'vgday-tailwindv4' ); ?></scan>

					<i class="ri-arrow-left-up-line"></i>
			</button>

			<div id="nav-menu" class="absolute top-0 left-0 min-h-[80vh] left-[-100%] w-full bg-zinc-50/60 backdrop-blur-sm
    flex items-center justify-center duration-300 overflow-hidden">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
			</div>
			

			
			
		</nav><!-- #site-navigation -->

	

	</div>

	

</header><!-- #masthead -->



