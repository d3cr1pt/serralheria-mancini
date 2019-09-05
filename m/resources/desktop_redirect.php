<?php 
error_reporting(0);
require('./resources/mobile/Mobile_Detect.php');
$detect = new Mobile_Detect;

if( !$detect->isMobile() && !$detect->isTablet() ){    // Detectar se é Desktop
header("Location: /"); // Redirecionar para desktop
}

if( $detect->isTablet() ) {    //Detectar se é Tablet 
	header("Location: /t"); // Redirecionar para Tablet 
}