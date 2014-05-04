<?php

/*
Plugin Name: Shortcodes
Description: Création des shortcodes pour la mise en forme des projets dans l'éditeur de texte.
Version: 0.1
*/
	
	/*
	 *	SHORTCODES
	 */
	 
	 function lorem_function() {
		 return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec nulla vitae lacus mattis volutpat eu at sapien. Nunc interdum congue libero, quis laoreet elit sagittis ut. Pellentesque lacus erat, dictum condimentum pharetra vel, malesuada volutpat risus. Nunc sit amet risus dolor. Etiam posuere tellus nisl. Integer lorem ligula, tempor eu laoreet ac, eleifend quis diam. Proin cursus, nibh eu vehicula varius, lacus elit eleifend elit, eget commodo ante felis at neque. Integer sit amet justo sed elit porta convallis a at metus. Suspendisse molestie turpis pulvinar nisl tincidunt quis fringilla enim lobortis. Curabitur placerat quam ac sem venenatis blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam sed ligula nisl. Nam ullamcorper elit id magna hendrerit sit amet dignissim elit sodales. Aenean accumsan consectetur rutrum.';
	 }
	 
	 add_shortcode('lorem', 'lorem_function');
	 
	 
	function white_bloc_function( $atts, $content = null ) {
		 return '<div class="white-bloc">' . $content . '</div>';
	 }
	 
	 add_shortcode('white_bloc', 'white_bloc_function');
	 
?>	