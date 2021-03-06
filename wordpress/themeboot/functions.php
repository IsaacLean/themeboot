<?php
    // Initialize the ThemeBoot WordPress menus
    function register_themeboot_menus() {
        register_nav_menu('main-nav-menu',__('Main Nav Menu'));
        register_nav_menu('footer-nav-menu',__('Footer Nav Menu'));
    }

    // Setup the JavaScript that will set ThemeBoot banner
    function generate_banner_script($banner_loc) {
        if($banner_loc) {
            echo "<script defer>
                var banner = document.getElementById('banner');
                banner.style['background'] = '#777 url(\'$banner_loc\') no-repeat center center';
            </script>";
        }
    }

    // Setup the JavaScript that will setup custom scripts
    function generate_cscripts($cscript_locs) {
        if($cscript_locs) {
            foreach($cscript_locs as $key => $value) {
                echo "<script src=\"$value\"></script>\n";
            }
        }
    }

    add_action('init', 'register_themeboot_menus');
?>
