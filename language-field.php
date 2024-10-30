<?php
/*
Plugin Name: Language Field
Plugin URI: http://wordpress.org/extend/plugins/language-field
Description: This is a Plug-in to manually change languages for specific Articles, to solve issues on multilingual blogs
Author: emojized
Version: 0.9
Author URI: https://emojized.com
Text Domain:   language-field
Domain Path:   /lang/

This Plugin is licensed under GPL

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/



include ('lf_core_functions.php');
include ('lf_admin_page.php');

function create_lf_option()
{
	add_option( "language_fields", array(), "yes");
    lf_init();
}

register_activation_hook( __FILE__, "create_lf_option" );

?>