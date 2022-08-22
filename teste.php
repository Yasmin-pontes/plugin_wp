<?php 

/**
 * Plugin Name:       NENERO
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:      money money money 
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rayllander S.
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