<?php include ('connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-image:url(images/arriere.jpg);background-size:100%;background-repeat: no-repeat">

<!-- Navigation -->
<?php
include("navbar.php");
if(isset($_SESSION['mail'])){
    header("Location: index.php");
   exit;
}?>

<form action="changepwd.php" method="post" id="formulaire" name="forma"  onsubmit="return verifiermdp()"  style="width:400PX;margin-left:auto;margin-right:4cm" >

    <h3>Connectez vous! </h3></br>
    <div >
        <p class="form-group has-success">
            <label>tapez un nouveau mot de passe  : </label>
            <input type="password" class="form-control"  id="pwd" name="pwd" >
        </p>

        <p class="form-group has-success">
            <label>repetez votre mot de passe : </label>
            <input type="password" class="form-control" id="mdp" name="mdp" onblur="verifiermdp()">
            <input type="hidden" class="form-control" id="mail" name="mail" value="<?php if (isset($_GET['mail'])) echo $_GET['mail']; ?>" >

        </p>
        <input type="submit" name="submit" class="btn btn-info"  style="margin-left:7cm;background-color: #101010;border-color:black" value="Changer">
</form>
<script src="js/jquery.js"></script>
<script src="images/js/bootstrap.min.js"></script>
<?php

if(isset($_POST["submit"])){
    // declaration des variables


    $mail=htmlspecialchars(trim($_POST['mail']));
    $mdp=htmlspecialchars(trim($_POST['pwd']));
    $mdp1=htmlspecialchars(trim($_POST['mdp']));

    if($mdp1 && $mdp && $mail)
    {
        if($mdp==$mdp1){
        $mdp=md5($mdp);
        $mdp1=md5($mdp1);

        $sql = 'update utilisateur set  mdp= ? , repeatmdp=? where mail=?';
        $query = $conn->prepare($sql);
        //executer la requete
        $jointure = $query->execute(array(
            $mdp,
            $mdp1,
            $mail
        ));
        echo '<div class="alert alert-info" style="position:absolute;top:116px;right:0;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Votre mot de passe s\'est bien changé. </div>';

?>
<script>
setTimeout(baybay,1500);
function baybay(){
    window.location.href("index.php");
}
</script>
            <?php
}

        else echo '<div class="alert alert-danger" style="position:absolute;top:116px;right:0;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Les mots de passes ne sont pas identiques. </div>';
    }

}

?>
<script>
    function verifiermdp(){
        var a= forma.mdp.value;
        var b= forma.mdp1.value;
        if(a != b) { Alert.render('les mots de passe doivent être identiques');
            return false;
        }
        if(!ok)return false;
        return true;
    }

</script>

