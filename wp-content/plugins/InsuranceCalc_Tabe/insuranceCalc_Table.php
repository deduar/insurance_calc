<?php

/**
 * Plugin Name:       Insurance Calc
 * Plugin URI:        https://deduar.com/plugins/the-basics/
 * Description:       Calc to show on Insurance home page - is a test.
 * Version:           0.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Eduardo Diez
 * Author URI:        https://deduar.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 **/


/*
 * ShortCode ic_t with Content (fixed) and Argument (id)
*/
add_action("init", "ic_t_init");
if (!function_exists("ic_t_init")) {
    function ic_t_init()
    {
        add_shortcode("ic_t", "ic_t_main");
    }
}
function ic_t_main($args, $content)
{
    return "<div class='ic_t'><strong>Content: </strong>" . $content . "
            </br><strong>Argument: </strong>" . $args['id'] . "</div>";
}
// <!-- End ShortCode ic_t -->return


/*
 * Admin Menu - Menu
*/
add_action("admin_menu", "ic_t_table");

if (!function_exists("ic_t_table")) {
    function ic_t_table()
    {
        add_menu_page('Insurance Calc','IC Table','manage_options','ict','ic_t_menu_class');
        add_submenu_page('ict','Add ICT','Add New','manage_options','add_ict','add_ict');
    }
}

if(!function_exists(ic_t_menu_class)){
    function ic_t_menu_class(){
        ?>
            <div class="admin_menu_ic_t">
                <h1 class="admin_menu_ic_t_title">Insurance Calc - Basic Table</h1>
            </div>
            <form method="post" action="options.php">
            <?php 
            settings_fields("grupo"); 
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Nombre</th>
                    <td><input type="text" name="nombre" id="nombre" value="<?php echo get_option("nombre"); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Direccion</th>
                    <td><input type="text" name="direccion" id="direccion" value="<?php echo get_option("direccion"); ?>"/></td>
                </tr>
            </table>
            <?php @submit_button(); ?>
            </form>
        <?php
    }
}

if(!function_exists('add_ict')){
    function add_ict(){
        ?>
        <h1>Sub Menu Add ICT</h1>
        <?php
    }
}

add_action("admin_init", "opciones_admin_init");
if (!function_exists("opciones_admin_init")) {
    function opciones_admin_init() {
        //Le decimos wordpress que guarde los elementos con el name nombre y direccion dentro del group grupo
        //register_setting($option_group, $option_name);
        register_setting(  "grupo"      , "nombre");
        register_setting(  "grupo"      , "direccion");
    }
}