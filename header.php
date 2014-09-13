<?php wp_nav_menu( array( 
						'theme_location' => 'primary', 
						'menu_class' => 'nav-list',
						'container'=>'ul',
						'walker'=> new Description_Walker
						) );  ?>
			<div class="nav-mobile"></div>	
			
			
			
			
			or you can add any menu with the menu name
			<?php wp_nav_menu( array( 
						'menu_name' => 'test menu', 
						'menu_class' => 'nav-list',
						'container'=>'ul',
						'walker'=> new Description_Walker
						) );  ?>
			
			
