<?php
	if ( has_nav_menu( 'social' ) ) {
		wp_nav_menu(
			array(
				'theme_location'	=> 'social',
				'menu_id' 				=> 'social-menu',
				'container'				=> 'div',
				'container_class' => 'social-menu',
				'menu_class'			=> 'list-social list',
				)
			);
	}
?>
