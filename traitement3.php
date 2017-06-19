<?php
include ('connexion.php');
if(isset($_GET['mail'])) {
    $email = htmlspecialchars(trim($_GET['mail']));
    if ($email) {
//pour tester si l'adresse mail existe deja  ou non
        $sql2 = 'select * from utilisateur where mail= ?';
        $query2 = $conn->prepare($sql2);
//executer la requete
        $jointure2 = $query2->execute(array(
            $email
        ));
        $rows = $query2->rowCount();
        if ($rows == 0) echo "true";
        else echo "false";
    }
}
?>
