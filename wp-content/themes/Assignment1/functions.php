<?php
//*Another solution , and echo it in index.php file after
//function custom_title(){
//	$name = get_bloginfo('name');
//	$description = get_bloginfo('description');
//	$title = $name 

add_action('init' , 'register_menus'); 

function register_menus(){
	register_nav_menus([ 
		'main' => 'Main Menu for the page ',
		'social'=> 'Social menu in footer'
		]);
}

?>