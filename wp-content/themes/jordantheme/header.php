<!DOCTYPE html>
<html lang = "en-GB">
   <head>
      <meta charset = "UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Fifteen Task</title>
      <link rel=icon href=assets/favicon.png>
      <link rel = "stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
   </head>
   <body>
    <div class="nav-overlay"></div>
      <header class="site-header">
         <div class="row">
            <div class="column">
               <div class="header-left">
                  <div class="main-logo">
                    <?php if(get_field('site_logo', 'option')) : ?>
                         <img alt="Main logo" src="<?php echo the_field('site_logo', 'option'); ?>">
                    <?php endif; ?>   
                  </div>
               </div>
               <div class="header-right">
                <i class="fas fa-bars open-mobile-menu"></i>
                <i class="fas fa-times close-mobile-menu"></i>
                  <nav class="main-nav">

                  <?php
                    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ 'main-menu' ] ) ) {
                        $menu = wp_get_nav_menu_object( $locations[ 'main-menu' ] );
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                        echo "<ul>";
                        foreach ( (array) $menu_items as $key => $menu_item ) {
                            $title = $menu_item->title;
                            $url = $menu_item->url;
                            $class = $menu_item->classes[0];
                            echo '<li class="'.$class.'"><a href="' . $url . '">' . $title . '</a></li>';
                        }
                        echo "</ul>";
                    }
                    ?>

                  </nav>
               </div>
            </div>
         </div>
      </header>

