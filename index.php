<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
//Controllers
include './controller/cours.php';
//Model
include './model/cours.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $p = (isset($_GET['p'])) ? $_GET['p'] : 'home';
        
        switch ($p) {
            case 'home':
                include './vue/index.php';
                break;
            case 'listC':
                include './vue/listeCours.php';
            default:
                include './vue/404.php';
        }
        ?>
    </body>
</html>
