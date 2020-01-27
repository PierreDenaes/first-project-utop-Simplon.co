<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php
//Si le titre est indiqué, on l'affiche entre les balises <title>
echo (!empty($titre))?'<title>'.$titre.'</title>':'<title> Cv Pierre D. </title>';
?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/default.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="./node_modules/locomotive-scroll/dist/locomotive-scroll.css">
</head>

