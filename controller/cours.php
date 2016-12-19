
<?php

// CONTROLEUR CINEMAS

switch ($navigation) {
    case 'cours_liste' :
        gerer_cours_liste();
        break;
}

function gerer_cours_liste() {
    $les_cours = get_all_cours();
    include("vues/vue_cours_liste.php");
}
?>