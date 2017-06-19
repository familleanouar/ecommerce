<?php include ('connexion.php'); ?>

<?php
// lors ou l'on clique sur le bouton submit
if(isset($_POST['mail']) and isset($_POST['mdp'])){
    // declaration des variables
    $mail=htmlspecialchars(trim($_POST['mail']));
    $mdp=htmlspecialchars(trim($_POST['mdp']));





    if($mail && $mdp)
    {

        $mdp=md5($mdp);
        //selectionner la ligne ou il a un mail et un mot de passe correspondent
        $sql = 'select * from utilisateur where mail= ? and mdp=?';
        $query = $conn->prepare($sql);
        //executer la requete
        $jointure = $query->execute(array(
            $mail,
            $mdp
        ));

        //caluler le nombre de lignes retourn? retourn?s par la requete
        $rows=$query->rowCount();
        if($rows==1){
            // si existe on crée une session
            session_start();
            $resultat=$query->fetch();
            $_SESSION['mail']=$resultat['nom'];
            $_SESSION['id-user']=$resultat['ID'];
            session_write_close();
            echo'1';
        }
        else{
            echo"0";
        }

    }
}else echo'0';
?>