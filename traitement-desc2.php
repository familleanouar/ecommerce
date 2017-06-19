<?php
session_start();
include('connexion.php');

$table=$_GET['table'];
$type=$_GET['Type'];
$ID=$_GET['ID'];
$sql = 'select ID,prix,chem,description,Nom,couleur,taille,taux_remise from '.$table.' where sexe="Homme" and Type=? and ID='.$ID;
$ajout = $conn->prepare($sql);
$ajout->bindValue(1,$type);
$ajout->execute();

/*require_once 'Panier.php';
$panier = new Panier('produits');
$qte=1;

if($produitPanier = $panier ->get($_GET['ID'])){
$qte = $produitPanier['qte'];

}
*/
foreach($ajout as $r) {
    echo "
    <div class='row'>

       <div class='col-lg-12'>
            <h1 class='page-header'>Description de ". $r['Nom']."
<small>avec d&eacute;tails</small>
</h1>
</div>
</div>

<div class='row'>

    <div class='col-md-8'>
        <img class='img-responsive' src=".$r['chem']." alt=''>
    </div>

    <div class='col-md-4'>
        <h3>Description</h3>
        <p>".$r['description']."</p>
        <h3>D&eacute;tails</h3>
        <ul>
            <li>Prix : ".$r['prix'].".00 MAD</li>
            <li>Couleur :".$r['couleur']."</li>
            <li>Taille :".$r['taille']."</li>
            <li>Taux de Remise :".$r['taux_remise']."%</li>
        </ul>
    </div>
    <form action='ajouter_panier.php?table=".$table."&Type=".$type."' method='post'>
<p>
<label> Quantit&eacute; :</label>
<input type='text' name='qte' value='1'/>
</p>

<p>
<input type='hidden' name='id' value='".$r['ID']."'/>
<input type='submit' value='Acheter' />
</p>
    ";
}
$ajout->closeCursor();

?>