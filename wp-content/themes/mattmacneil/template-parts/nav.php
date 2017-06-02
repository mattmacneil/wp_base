<?php
wp_nav_menu( array( 
				'theme_location' 	=> 'custom-nav',
				'items_wrap' 			=> '<div class="menu-aligner">%3$s</div>',
				'menu_class' 			=> '',
				'menu_id'         => FALSE,
				'item_spacing' 		=> discard,
				'depth'           => 1,
				'container_class' => 'custom-menu' ) ); 
?>