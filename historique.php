<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Historique de mes commandes</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/portfolio-item.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<?php
include('navbar.php');
include('connexion.php');
echo "<p id='desc' > </p>";
?>

<script>
    fctpanier();
    setInterval(fctpanier,2000);
function fctpanier(){
    var instance = new XMLHttpRequest();

    instance.onreadystatechange = function(){
        if (instance.readyState == 4 && instance.status == 200) {
            document.getElementById('desc').innerHTML=instance.responseText;
        }};
    instance.open("get","traitement2.php?operation=historique",true);
    instance.send();
}
</script>
