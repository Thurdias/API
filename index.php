<?php
ob_start();
include("classCarros.php");
$Carros = new ClassCarros();
$Carros -> exibeCarros();

echo "\n\nSite feito por Arthur Dias Bouças";
?>