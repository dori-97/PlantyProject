<header class="menu-header-container">
    <div class="site-branding">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo-desktop">
            <?php
            if (function_exists('the_custom_logo') && has_custom_logo()) {
                the_custom_logo();
            } 
            ?>


            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo-mobile">
                
            <?php
            // Affiche le logo mobile configuré dans le personnalisateur
            $mobile_logo = get_theme_mod('mytheme_mobile_logo');
            if ($mobile_logo) {
                echo '<img src="' . esc_url($mobile_logo) . '" alt="Logo Mobile">';
            }
            ?>
        </a>
            </a>
    </div>
   

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu', 
                    'menu_class'     => 'primary-menu-class', 
                )
            );
            ?>
</header>
