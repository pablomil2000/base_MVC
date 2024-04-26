<!-- Hero Section Begin -->
<?php
include('modules/head.php');
include('modules/header.php');
?>
<!-- Header End -->

<?php
//Controlador de navegacion
$ruta = 'home';

// require_once('views/modules/' . $ruta . '.php');

PlantillaCtr::whiteList('home');
?>

<!-- Footer Section Begin -->
<?php
include('modules/footer.php');
?>
<!-- Footer End -->