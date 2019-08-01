<?php require('./resources/mobile_redirect.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Serralheria Mancini</title>
        <link rel="stylesheet" href="./resources/style.css" type="text/css" charset="UTF-8">
		<link rel="icon" href="./resources/favicon_2.png">
		<script src="./resources/js_script.js"></script>
		<meta name="DC.title" content="Serralheria Mancini" />
		<meta name="geo.region" content="BR-SP" />
		<meta name="geo.placename" content="Sorocaba" />
		<meta name="geo.position" content="-23.502337;-47.458277" />
		<meta name="ICBM" content="-23.502337, -47.458277" />		
    </head>
    <body id="style-4">
        <?php
		require('./resources/header.php');
        require('./resources/menu.php');
        require('./resources/ism/servicos/example.html');
		require('./resources/fast_link.php');
		require('./resources/form_contact.php');
	    require('./resources/footer.php');
        ?>
    </body>
</html>