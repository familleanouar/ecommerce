<?php
session_start();
include('connexion.php');

$table=$_GET['table'];
$type=$_GET['Type'];
$ID=$_GET['ID'];
$sexe=$_GET['sexe'];

$sql = 'select ID,prix,chem,chemin,description,Nom,couleur,taille,taux_remise,qte from '.$table.' where sexe=? and Type=? and ID='.$ID;
$ajout = $conn->prepare($sql);
$ajout->bindValue(1,$sexe);
$ajout->bindValue(2,$type);
$ajout->execute();

foreach($ajout as $r) {
    $prix_remise=$r['prix']-($r['prix']*$r['taux_remise']/100);
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
        <img class='img-responsive' src=".$r['chem']." alt='Article'>
    </div>

    <div class='col-md-4'>
        <h3>Description</h3>
        <p>".$r['description']."</p>
        <h3>D&eacute;tails</h3>
        <ul>
            <li>Prix : ".$r['prix'].".00 MAD</li>
            <li>Couleur :".$r['couleur']."</li>
            <li>Taille :".$r['taille']."</li>
            <li >Taux de Remise :".$r['taux_remise']."%</li>
            <li style='color:red;'>Prix apres Remise :".$prix_remise." MAD</li>
            <li>Quantité en stock :".$r['qte']."</li>
        </ul>
    </div>
    <form action='ajouter_panier.php?table=".$table."&Type=".$type."&sexe=".$sexe."' method='post' onsubmit='return connecter()'>
<p>
<label> Quantit&eacute; :</label>
<input type='number' name='quantite' min='1' max='".$r['qte']."' placeholder='ex: 1' required />
</p>

<p>
<input type='hidden' name='id' value='".$r['ID']."'/>
<input type='hidden' name='prixunit' value='".$prix_remise."'/>
";
if($r['qte']==0){
   echo "<p style='color:#00a4ff'> Cet article n'est pas disponible pour le moment ! </p>";
}
else
    echo
"

 <input type='submit' class='btn btn-default' value='Ajouter au panier' /> <img width=35px height=35px src='images/panier.png' alt='Article'>


</p>
    ";
}
$ajout->closeCursor();

?>