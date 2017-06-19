<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon panier</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/portfolio-item.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<div id="panier">
<?php
include('navbar.php');
$somme=0;
include('connexion.php');
$iduser=$_SESSION['id-user'];
$sql = 'select * from panier where iduser=? and etat="pending"';
$ajout = $conn->prepare($sql);
$ajout->bindValue(1,$iduser);
$ajout->execute();

?>

<?php if(!$ajout->rowCount()){?>
    <h3 class="container" style="color:#00d7ff;">  Votre panier est vide pour l'instant ! </h3>
    <?php }else{
?>

<div class="container">
    <h4> Votre panier est rempli par les articles suivants :</h4></br>
<table class="table" border="0" width="50%">
    <tr class="success" >
        <td>Image de l'article</td>
        <td>D&eacute;tails</td>
        <td>Cout </td>
        <td>Date</td>
        <td>Actions</td>
    </tr>
    <?php foreach($ajout as $produit){

             $sql1 = 'select * from '.$produit['tablee'].' where ID= '.$produit['idarticle'];
        $ajout1 = $conn->prepare($sql1);
        $ajout1->execute();
    foreach($ajout1 as $produit1){
        ?>

        <tr>
            <td> <img class='img-responsive' src='<?php echo $produit1['chemin']?>' alt='Article'></td>
            <td>
                <p> Couleur :  <?php echo $produit1['couleur']?> </p>
                <p> Taille : <?php echo $produit1['taille']?> </p>
                <p> Quantit&eacute; :  <?php echo $produit['qte']?> pi&eacute;ce(s)</p>
                <p> Prix unitaire : <?php echo $produit1['prix']?>  MAD</p>
                 <p> Taux de remise : <?php echo $produit1['taux_remise']?>  %</p>

            </td>

            <td><?php echo $produit['prix_total']?> MAD</td>
            <td><?php echo $produit['datee']?></td>
            <td><a href="traitement2.php?ID=<?php echo $produit['idarticle'];?>&table=<?php echo $produit['tablee'];?>&operation=modifier">Modifier</a> </br> </br>
           <a href="traitement2.php?ID=<?php echo $produit['idarticle'];?>&table=<?php echo $produit['tablee'];?>&operation=supprimer">Supprimer</a></td>
</tr>
    <?php $somme=$somme+$produit['prix_total'];
    ?>
       </tr>
    <?php }}
    ?>

    <br><td></td>
    <td></td>
    <td>Prix Total : </br><?php echo $somme; ?> MAD </td>
    </tr>

</table>

    <p style="display:block";>
    <button style="background-color: #78BDA9;
  border-color: #78BDA9;
  margin-left: 1000px;" class="btn btn-primary" onclick="window.open('traitement2.php?operation=valider','popup','width=570,height=287,left=550,top=300,scrollbars=1')"> Valider commande </button></p>
<?php }?>
    </div>
</div>
</body>

<script>
    actualiserpanier();
    setInterval(actualiserpanier,2000);
    function actualiserpanier(){
        var instance = new XMLHttpRequest();

        instance.onreadystatechange = function(){
            if (instance.readyState == 4 && instance.status == 200) {
                document.getElementById('panier').innerHTML=instance.responseText;
            }};
        instance.open("get","votre_panier.php",true);
        instance.send();
    }
</script>
