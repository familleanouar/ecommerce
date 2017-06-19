<?php include ('connexion.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inscription</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body style="background-image:url(images/arriere.jpg);background-size:100%;background-repeat: no-repeat">

<!-- Navigation -->
<?php include ('navbar.php');?>

<form action="inscription.php" method="post" id="formulaire" name="forma" style="width:400PX;margin-left:auto;margin-right:4cm" onsubmit="return verifier()" >

        <h3>Inscrivez-vous ! </h3></br>
        <div >
            <!-- Account -->
            <p id="pmail" class="form-group has-success">
                <label>Adresse e-mail : </label>
                <input type="text" class="form-control" placeholder='exemple@email.com' name="mail" required onblur="verifier_email()">
            </p>
            <p class="form-group has-success">
                <label>mot de passe : </label>
                <input type="password" class="form-control" name="mdp" required >
            </p>
            <p class="form-group has-success">
                <label>R&eacute;p&eacute;tez votre mot de passe : </label>
                <input type="password" class="form-control" name="mdp1" onblur="verifier()" required>
            </p>
            <p class="form-group has-success">
                <label>Civilit&eacute;</label>&nbsp;&nbsp;&nbsp;
                <input type="radio" name="id_gender" id="id_gender1" value="Monsieur" required>&nbsp;
                <label >M.</label>&nbsp;
                <input type="radio" name="id_gender" id="id_gender2" value="Madame" required>&nbsp;
                <label >Mme</label>&nbsp;
                <input type="radio" name="id_gender" id="id_gender3" value="Mademoiselle" required>&nbsp;
                <label >Mlle</label>
            </p>

            <p class="form-group has-success">
                <label>Nom complet :</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder='Alami' required >

            </p>
            <p class="form-group has-success">
                <label >Date :</label>
                <input type="date" class="form-control" id="date" name="date" required>

            </p>

            <p class="form-group has-success">

                <label >CIN:</label>
                <input type="text" class="form-control" id="cin" name="cin" placeholder='Ex : LG15887'required >

            </p>
            <p class="form-group has-success">
                <label>Adresse :</label>
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder='Ex: 6, derb el hajra, quartier dabachi'required >

            </p>
            <p class="form-group has-success">
                <label>Code postal :</label>
                <input type="text" class="form-control" name="postcode" id="postcode"  placeholder='Ex : 55555' required >

            </p>
            <p class="form-group has-success">
                <label for="city">Ville :</label>
                <input type="text" class="form-control" name="ville" id="ville"  placeholder='Ex : Tetouan' required>

            </p>
            <p class="form-group has-success">
                <label for="phone">T&eacute;l&eacute;phone</label>
                <input type="text" class="form-control" name="phone" id="phone"  placeholder='Ex :0661456790' required >
            </p>
            <input type="submit" name="submit" class="btn btn-info"  style="margin-left:10cm;background-color: #101010;border-color:black" value="S'inscrire" ></div>
</form>
<div id=alertmail class="alert alert-danger" style="position:absolute;top:116px;right:0;display: none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Attention !</strong> email invalid ou exite déja ; !
</div>
<div id=alertmailyes class="alert alert-success" style="position:absolute;top:116px;right:0;display: none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>felicitation !</strong> votre mail est bien vérifié ; !
</div>

<script src="js/jquery.js"></script>

<script src="images/js/bootstrap.min.js"></script>

<script>
    var ok=false;
    function verifier_email(){
        var instance;
        instance = new XMLHttpRequest();

        instance.onreadystatechange = function(){
            if (instance.readyState == 4 && instance.status == 200) {
                if(instance.responseText == "false"){
                    document.getElementById("pmail").className="form-group has-error";
                   document.getElementById("alertmail").style.display="block";
                    document.getElementById("alertmailyes").style.display="none";
                    // Alert.render("email invalid ou exite déja");
                ok= false;}
               else if(instance.responseText == "true"){
                    ok=true;
                    document.getElementById("pmail").className="form-group has-success";
                    document.getElementById("alertmail").style.display="none";
                    document.getElementById("alertmailyes").style.display="block";
                }
                else{
                    document.getElementById("alertmail").style.display="none";
                    document.getElementById("alertmailyes").style.display="none";
                }
            }};
        instance.open("get","traitement3.php?mail="+forma.mail.value,true);
        instance.send();
    }

function verifier(){
     verifier_email();
    var a= forma.mdp.value;
    var b= forma.mdp1.value;
if(a != b) { Alert.render('les mots de passe doivent être identiques');
        return false;
}
    if(!ok)return false;
    return true;
}
</script>
<?php


// lors ou l'on clique sur le bouton submit
if(isset($_POST["submit"])){
    // declaration des variables
    $mdp=htmlspecialchars(trim($_POST['mdp']));
    $mdp1=htmlspecialchars(trim($_POST['mdp1']));
    $email=htmlspecialchars(trim($_POST['mail']));
    $id_gender=htmlspecialchars(trim($_POST['id_gender']));
    $nom=htmlspecialchars(trim($_POST['nom']));
    $date=htmlspecialchars(trim($_POST['date']));
    $cin=htmlspecialchars(trim($_POST['cin']));
    $adresse=htmlspecialchars(trim($_POST['adresse']));
    $code=htmlspecialchars(trim($_POST['postcode']));
    $ville=htmlspecialchars(trim($_POST['ville']));
    $phone=htmlspecialchars(trim($_POST['phone']));


    // si ces donn�es existent
    if($mdp && $mdp1 && $email && $id_gender && $nom && $date && $cin && $adresse && $code && $ville && $phone)
    {

if($mdp==$mdp1) {
    $mdp = md5($mdp);
    $mdp1 = md5($mdp1);
//pour tester si l'adresse mail existe deja  ou non
    $sql2 = 'select * from utilisateur where mail= ?';
    $query2 = $conn->prepare($sql2);
    //executer la requete
    $jointure2 = $query2->execute(array(
        $email
    ));
    $rows = $query2->rowCount();
    if ($rows == 0) {
        $sql = 'insert into utilisateur(nom,cin,mdp,repeatmdp,mail,civilite,datee,adresse,code,ville,tel) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

        $jointure = $conn->prepare($sql);
        $jointure->bindValue(1, $nom);
        $jointure->bindValue(2, $cin);
        $jointure->bindValue(3, $mdp);
        $jointure->bindValue(4, $mdp1);
        $jointure->bindValue(5, $email);
        $jointure->bindValue(6, $id_gender);
        $jointure->bindValue(7, $date);
        $jointure->bindValue(8, $adresse);
        $jointure->bindValue(9, $code);
        $jointure->bindValue(10, $ville);
        $jointure->bindValue(11, $phone);
        $jointure->execute();

        if (!$jointure->rowCount())
            die('<div class="alert alert-danger" style="position:absolute;top:116px;right:0;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Attention !</strong> votre inscription n\'est pas prise en compte contacler l\'administration du site !'.print_r($jointure->errorInfo()).'
</div>');
        else
            die('<div class="alert alert-info" style="position:absolute;top:116px;right:0;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>felicitation !</strong> votre inscription est validé !
</div>');    } else echo "cette adresse mail existe deja ";
}

}else echo " les mots de passes ne sont pas identiques";


}?>
</body>
</html>

