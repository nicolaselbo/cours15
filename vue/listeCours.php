<h1>Les cours de ISFCE</h1>

<img src="./vues/images/cours.png" class="img-responsive img-rounded" style="max-width: 400px">

<br/>

<?php
if ($les_cours === FALSE) {
    echo("<p class='alert alert-danger'> Erreur : la requête SQL est incorrecte.</p>");
} else {
    foreach ($les_cours as $un_cours) {
        echo("<h3>" . $un_cours['nom'] . "</h3>");
        echo("<p> Description : " . $un_cours['description'] . "</p>");
    }
}
?>