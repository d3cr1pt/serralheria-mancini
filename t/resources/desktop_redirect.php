<?php
require('./resources/mobile/Mobile_Detect.php');
$detect = new Mobile_Detect;

if( !$detect->isMobile() && !$detect->isTablet() ){    // Detectar se é Desktop
header("Location: /"); // Redirecionar para desktop
}

if( $detect->isMobile() && !$detect->isTablet() ){    // Detectar se é Celular
header("Location: /m"); // Redirecionar para celular
}