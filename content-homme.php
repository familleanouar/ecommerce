<!DOCTYPE html>
<html lang="fr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<?php include('navbar.php');
?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
            <p class="lead">Homme </p>
            <div class="list-group">

                <a href="Homme.php" class="list-group-item"> Tous les articles </a>
                <!-- onmouseover="javascript:visibilite('vetement');" -->
                <a href="javascript:visibilite('vetement');" class="list-group-item"> Vetements </a>

                <ul id="vetement" style="display:none;background-color: #f7f7f7;" >
                    <a href="Homme.php?table=vetements&Type=Pantalons&sexe=Homme">Pantalons</a></br>
                    <a href="Homme.php?table=vetements&Type=Chemises&sexe=Homme">Chemises</a></br>
                    <a href="Homme.php?table=vetements&Type=Vestes&sexe=Homme">Vestes</a></br>
                    <a href="Homme.php?table=vetements&Type=Tricots&sexe=Homme">Tricots</a>
                </ul>
                <a href="javascript:visibilite('chaussure');" class="list-group-item"> Chaussures </a>
                <ul id="chaussure" style="display:none;background-color: #f7f7f7;">
                    <a href="Homme.php?table=chaussures&Type=Baskets&sexe=Homme">Baskets</a></br>
                    <a href="Homme.php?table=chaussures&Type=Chaussures&sexe=Homme">Chaussures</a></br>
                    <a href="Homme.php?table=chaussures&Type=Bottes&sexe=Homme">Bottes Et Bottines</a>
                </ul>
                <a href="javascript:visibilite('accessoires');" class="list-group-item"> Accessoires </a>
                <ul id="accessoires" style="display:none;background-color: #f7f7f7;">
                    <a href="Homme.php?table=accessoires&Type=Montres&sexe=Homme">Montres</a></br>
                </ul>

            </div>
            <div id="cart_block" class="">

                    </div>
        </div>

        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="images/hom.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="images/hom2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="images/rhh.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <script>

                function visibilite(thingId)
                {
                    var targetElement;
                    targetElement = document.getElementById(thingId) ;
                    if (targetElement.style.display == "none")
                    {
                        targetElement.style.display = "block" ;
                    }
                    else {
                        targetElement.style.display = "none" ;
                    }
                }

            </script>
            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Script to Activate the Carousel -->
            <script>
                $('.carousel').carousel({
                    interval: 2000 //changes the speed
                })
            </script>
            <script>
                panierfinal();
                setInterval(panierfinal,2000);
                function panierfinal() {
                    var instance;
                    instance = new XMLHttpRequest();

                    instance.onreadystatechange = function(){
                        if (instance.readyState == 4 && instance.status == 200) {
                            document.getElementById("cart_block").innerHTML = instance.responseText;
                        }};
                    instance.open("get","suivipanier.php",true);
                    instance.send(null);
                }
            </script>