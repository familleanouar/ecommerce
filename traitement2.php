
<?php
session_start();
include('connexion.php');
$iduser=$_SESSION['id-user'];
$operation=$_GET['operation'];

 if($operation=="historique"){
    $ajout = $conn->query("select * from panier where etat !=\"pending\" and iduser=".$iduser." order by ID desc");
     if(!$ajout->rowCount()){
       echo '<div class="container"> <p>Vous n avez pas d historique pour linstant ! <br> Pour voir le statut de votre commande il faut d abord remplir votre panier et puis la confirmer ! </p></div>';
    }else{?>
<div class="container">
    <h4> Les articles que vous avez command&eacute; sont les-suivants :</h4></br>
<table class="table" border="0" width="50%">
    <tr  class="danger">
        <td>Image de l'article</td>
        <td>D&eacute;tails</td>
        <td>Cout </td>
        <td>Date</td>
        <td>Etat</td>
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
                     <td><?php echo $produit['etat']?></td>
                 </tr>
    <?php }}
    $ajout->closeCursor();?>
</table>
</div>
<?php }}

else if($operation=="modifier"){


$sql = 'select * from panier,'.$_GET['table'].' t where panier.idarticle=t.ID and idarticle='.$_GET['ID'];
$ajout = $conn->prepare($sql);
$ajout->execute();

foreach($ajout as $r) {
    header("Location:description.php?table=".$_GET['table']."&Type=".$r['Type']."&sexe=".$r['sexe']."&ID=".$_GET['ID']."");
}
$ajout->closeCursor();}
else if($operation=="supprimer") {
    $table=$_GET['table'];
    $idarticle=$_GET['ID'];

    $sql2='delete from panier where idarticle=? and tablee=? and iduser=? and etat="pending"';
    $supp=$conn->prepare($sql2);
    $supp->bindValue(1, $idarticle);
    $supp->bindValue(2, $table);
    $supp->bindValue(3, $iduser);
    $supp->execute();
    header("location:votre_panier.php");
}
else if($operation=="valider"){

    $sql2='select * from utilisateur where ID=?';
    $supp=$conn->prepare($sql2);
    $supp->bindValue(1, $iduser);
    $supp->execute();
    $info=$supp->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>V&eacute;rification de l'adresse </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="jumbotron">

<h4>Bonjour <?php echo $info['civilite'].' '.$info['nom'];?> votre commande sera envoy&eacute;e dans moins de 15 jours vers l'adresse suivante:  <h4 style="color:darkblue;"> <?php echo $info['adresse'];?></h4>
        </h4> <h4> Vous pouvez la modifier en <a href="#" onclick="changeradresse()"> cliquant ici !</a> </h4>

        <input id="adresse" type="hidden" value="<?php echo $info['adresse'];?>">

    <p>
        </br>
          <input type='button' value='Confirmer'  class="btn btn-primary" onclick="window.close(); confirmerajax();window.open('historique.php');" id="ok" />
    </p>
    </div>

<script>

function changeradresse(){
document.getElementById('adresse').setAttribute("type","textarea");
}

function confirmerajax(){
    instance = new XMLHttpRequest();
    instance.onreadystatechange = function(){
        if (instance.readyState == 4 && instance.status == 200) {
            document.getElementById('desc').innerHTML=instance.responseText;
        }};
    instance.open("get","traitement2.php?operation=confirmer",true);
    instance.send();
}

</script>

<?php }
else if($operation=="confirmer"){
    $sqlselect='select * from panier where iduser=? and etat="pending"';
    $query4=$conn->prepare($sqlselect);
    $query4->bindValue(1, $iduser);
    $query4->execute();
    $ro=0;
    foreach($query4 as $resultat){
        $sqlselect2='select Qte from '.$resultat['tablee']. ' where ID='.$resultat['idarticle'];
        $q=$conn->query($sqlselect2);
        $qtee=$q->fetch();
        $qtestock=$qtee['Qte']-$resultat['qte'];
        $sqlupdate="update ".$resultat['tablee']." set Qte=? where ID=?";
        $query3=$conn->prepare($sqlupdate);
        $query3->bindValue(1, $qtestock);
        $query3->bindValue(2, $resultat['idarticle']);
        $query3->execute();
        $ro=$ro+$query3->rowCount();
    }
if($ro >= 1) {
    $sql3 = 'update panier set etat="En cours de livraison",datee=NOW() where iduser=? and etat="pending"';
    $query3 = $conn->prepare($sql3);
    $query3->bindValue(1, $iduser);
    $query3->execute();
    echo "Votre demande a été bien enregistrée";
}}
else if($operation=="notifier"){
    $ajout5 = $conn->query("select Qte from ".$_GET['table']." where ID=".$_GET['ID']);
    $nbr = $ajout5->fetch();
    echo $nbr[0];
    $ajout5->closeCursor();

}
