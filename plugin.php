<?php
/*
Plugin Name: Pritect ExampleLoader with Composer Library
Version: 0.0.1
Author Name: James Golovich
License: GPL2
*/

add_action( 'init', 'pritect_exampleloader_withcomposer_startup' );

function pritect_exampleloader_withcomposer_startup() {
	require 'vendor/autoload.php';

	$PAK = pritect_example_loader( array(), '1.0' );
	$PAKnewest = pritect_example_loader();
	$a = 1;
}
