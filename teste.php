<?php 

/**
 * Plugin Name:       Meu Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:      	Olha nem eu sei, criei sem querem (〃￣︶￣)人(￣︶￣〃)
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */


 function  teste( $mp_post ){

	return file_get_contents(plugins_url().'/teste/busca.php');

	


}

add_shortcode ("busca", "teste");

 add_filter( 'the_content', 'teste');
 ?>