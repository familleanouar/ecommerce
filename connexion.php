<?php

try{
    $conn = new PDO('mysql:host=localhost;dbname=ensa-fashion','root','');
}
catch(PDOException $e){
    echo $e.getMessage();
}
?>