
<?php

// MODELE COURS

function get_all_cours() {
    // L'instruction global est nécessaire pour pouvoir utiliser la variable $dbh dans une fonction
    global $dbh;
    $sql = "SELECT id, nom, description FROM cours ORDER BY nom ASC";
    $sth = $dbh->query($sql);

    if ($sth === FALSE) {
        return FALSE;
    } else {
        $les_cours = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $les_cours;
    }
}
?>