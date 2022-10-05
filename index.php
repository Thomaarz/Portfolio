<?php

session_start();

include "modules/module_home/Vue_Home.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Thomaarz - Portfolio</title>
    <meta charset="utf-8">

    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" href="style/animations.css">
    <link rel="stylesheet" type="text/css" href="style/default.css">
    <link rel="stylesheet" type="text/css" href="style/font.css">
    <link rel="stylesheet" type="text/css" href="style/thomaarz-api.css">

    <link rel="stylesheet" type="text/css" href="style/element/menu-nav.css">
    <link rel="stylesheet" type="text/css" href="style/element/left-bar.css">
    <link rel="stylesheet" type="text/css" href="style/element/header.css">
    <link rel="stylesheet" type="text/css" href="style/element/main.css">
    <link rel="stylesheet" type="text/css" href="style/element/exp.css">
    <link rel="stylesheet" type="text/css" href="style/element/projects.css">
    <link rel="stylesheet" type="text/css" href="style/element/footer.css">

    <!-- JS -->
    <script type="text/javascript" src="scripts/default.js"></script>
    <script type="text/javascript" src="scripts/animations.js"></script>

</head>
<body>

<?php

$vue_home = new Vue_Home();
$vue_home->show_header();
$vue_home->show_main();
$vue_home->show_footer();

?>

<script type="text/javascript" src="scripts/element/left-bar.js"></script>
<script type="text/javascript" src="scripts/element/main.js"></script>
</body>
</html>
