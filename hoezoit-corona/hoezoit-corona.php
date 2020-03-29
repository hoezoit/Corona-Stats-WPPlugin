<?php
/*
 Plugin Name: Corona Data Shortcodes
 Plugin URI: https://www.hoezo-it.be/coronaplugin
 Description: Use shortcodes that display various corona live data and statistics per country 
 Version: 1.0.1
 Author: Hoe? Zo! IT
 Author URI: https://www.hoezo-it.be
 Text Domain: hoezoit-corona
 License: GPL2
 */

$plugin_url = WP_PLUGIN_URL . '/hoezoit-corona';
$corona_data = 'No data available';
	
	
function hoezoit_corona_styles() {
	
	wp_enqueue_style( 'hoezoit_corona_styles', plugins_url( 'hoezoit-corona/hoezoit-corona-style.css' ) );
	
}

add_action( 'wp_enqueue_scripts', 'hoezoit_corona_styles' );

function hoezoit_corona_scripts() {
	
	wp_enqueue_script('hoezoit_corona_scripts', plugins_url( 'hoezoit-corona/hoezoit-corona-scripts.js' ) );
	
}

add_action( 'wp_enqueue_scripts', 'hoezoit_corona_scripts' );
	
function hoezoit_corona_menu() {
	
	add_options_page( 	'Corona Shortcodes', 
						'Corona Shortcodes', 
						'manage_options', 
						'corona-shortcode', 
						'hoezoit_corona_options_page' );
	
}

add_action( 'admin_menu', 'hoezoit_corona_menu');

function hoezoit_corona_options_page() {
	
	if(!current_user_can('manage_options'))
	{
		wp_die( "You do not have enough permissions to view this page", "Not enough permissions");
	}
	
	global $plugin_url;
	global $corona_data;
	
	//$corona_data = hoezoit_corona_get_data();
	
	require('include/hoezoit-corona-settingspage.php');
	
}

function hoezoit_corona_get_country_data() {
	
	$json_feed_url = 'https://corona.lmao.ninja/countries';
	
	$json_feed = wp_remote_get( $json_feed_url );
	$current_data = json_decode($json_feed['body']);

	return $current_data;
	
}

function hoezoit_corona_get_globaldata() {
	
	$json_feed_url = 'https://corona.lmao.ninja/all';
	
	$json_feed = wp_remote_get( $json_feed_url );
	$current_data = json_decode($json_feed['body']);

	return $current_data;
	
}

function hoezoit_corona_shortcode($atts, $content = null){

	extract(shortcode_atts( array('country' => '','type' => '', 'style' =>'', 'animated' => ''), $atts));
	
	ob_start();
	
	
	
	if(empty($type)) $type = "cases";
	if(empty($style)) $style = "";
	if(empty($animated)) $animated = false;
	
	if(strtolower($animated) == 'no') $animated = false;
	if(strtolower($animated) == 'yes') $animated = true;

	if(empty($country))
	{
		//Get the global data
		$result = hoezoit_corona_get_globaldata();
		
		echo $result->$type;
		
	}else{
		//Get the country data
		$corona_data = hoezoit_corona_get_country_data();
		
		foreach ($corona_data as $item) {
	    	if (strtolower($item->countryInfo->iso2) == strtolower($country)) {
		    	
		    	if($animated)
		    	{
			    	echo '<div class="counter" style="'.$style.'" data-count="'.$item->$type.'">0</div>';
		    	}else{
					echo '<span style="'.$style.'">'.$item->$type.'</span>';
				}
	    	}
		}	
	}

	$content = ob_get_clean();
	
	return $content;
	
}

add_shortcode( 'coronastats', 'hoezoit_corona_shortcode' );

	
	
	
	
	
?>