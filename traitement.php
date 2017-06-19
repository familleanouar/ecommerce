<?php
include('connexion.php');

$table=$_GET['table'];
$type=$_GET['Type'];
$sexe=$_GET['sexe'];

$sql = 'select ID,prix,chemin,description,Nom from '.$table.' where sexe=? and Type=? ';
$ajout = $conn->prepare($sql);
$ajout->bindValue(1,$sexe);
$ajout->bindValue(2,$type);


$ajout->execute();
foreach($ajout as $r) {

    echo "
<div class='col-sm-4 col-lg-4 col-md-4' >
    <div class='thumbnail' >
        <img src = ".$r['chemin'] . " >
        <div class='caption' >
            <h4 class='pull-right' > ".$r['prix'] . ",00 MAD</h4 >
             <h4 ><a href ='description.php?table=".$table."&Type=".$type."&ID=".$r['ID']."&sexe=".$sexe."' > " .$r['Nom'] ."</a >
            </h4 >
            <p >".$r['description']."</p>
        </div >
          </div >
</div >";
}
$ajout->closeCursor();
?>