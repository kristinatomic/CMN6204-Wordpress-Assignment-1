<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
     echo
      get_bloginfo('name').' ~ '.
      get_bloginfo('description');	 
		?>



	</title>
</head>
<body>

<nav id="main manu">
	<?php wp_nav_menu([
		'theme_location' =>'main']);?>


	
</nav>









