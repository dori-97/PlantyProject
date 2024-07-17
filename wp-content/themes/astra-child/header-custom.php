<header class="menu-header-container">
    <div class="site-branding">
            <?php
            if (function_exists('the_custom_logo') && has_custom_logo()) {
                the_custom_logo();
            } 
            ?>
    </div>
    <nav id="menu-icon" class="menu-icon">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
        </nav>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu', 
                    'menu_class'     => 'primary-menu-class', 
                )
            );
            ?>
    </nav>
</header>
