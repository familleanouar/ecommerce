
<?php
session_start();
include('connexion.php');
$iduser=$_SESSION['id-user'];
$idarticle=$_POST['id'];
$qte=$_POST['quantite'];
$prix=$_POST['prixunit'];
$prixtotal=$prix*$qte;
$table=$_GET['table'];
$type=$_GET['Type'];
$sexe=$_GET['sexe'];


$sql2='select idarticle from panier where iduser=? and idarticle=? and tablee=? and etat="pending"';
$query2 = $conn->prepare($sql2);
$query2->bindValue(1, $iduser);
$query2->bindValue(2, $idarticle);
$query2->bindValue(3, $table);
//executer la requete
$query2->execute();
$rows = $query2->rowCount();

if ($rows == 1){

   $sql3='update panier set qte=?,prix_total=?,datee=NOW() where iduser=? and idarticle=? and tablee=? and etat="pending"';
   $query3=$conn->prepare($sql3);
   $query3->bindValue(1, $qte);
   $query3->bindValue(2, $prixtotal);
   $query3->bindValue(3, $iduser);
   $query3->bindValue(4, $idarticle);
   $query3->bindValue(5, $table);
   $query3->execute();


}else

$sql='insert into panier(iduser,idarticle,prix_total,datee,etat,qte,tablee) values(?,?,?,NOW(),"pending",?,?)';
$ajout = $conn->prepare($sql);
$ajout->bindValue(1,$iduser);
$ajout->bindValue(2,$idarticle);
$ajout->bindValue(3,$prixtotal);
$ajout->bindValue(4,$qte);
$ajout->bindValue(5,$table);
$ajout->execute();
header("Location: votre_panier.php?table=".$table."&Type=".$type."&sexe=".$sexe."");
?>