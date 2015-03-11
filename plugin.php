<?php
/**
 * Plugin Name: Pritect ExampleLoader with Composer Library
 * Version: 0.0.1
 */

add_action( 'init', 'plugin_do_stuff' );

function plugin_do_stuff() {
	require 'vendor/autoload.php';

	$PAK = pritect_example_loader( array(), '1.0' );
	$PAKnewest = pritect_example_loader();
	$a = 1;
}
