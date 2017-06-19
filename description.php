<?php include("connexion.php");?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Description</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>

<body>

<!-- Navigation -->
<?php include ('navbar.php'); ?>

<!-- Page Content -->
<div class="container" id="desc">



</div>
<!-- /.row -->

<!-- Related Projects Row -->
<div class="row" STYLE="margin-top: 10px;">
    <div class="col-lg-12">
        <h3 class="page-header">Articles similaires</h3>
    </div>


    <?php
    include('connexion.php');

    $table=$_GET['table'];
    $type=$_GET['Type'];
    $sexe=$_GET['sexe'];

    $sql = 'select ID,prix,chemin,description,Nom from '.$table.' where sexe=? and Type=? ORDER BY rand() limit 3';
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
</div>
<!-- /.row -->

<hr>



</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script>
    test();
    function test() {
        var instance;
        instance = new XMLHttpRequest();

        instance.onreadystatechange = function(){
            if (instance.readyState == 4 && instance.status == 200) {
                document.getElementById("desc").innerHTML = instance.responseText;
            }};
        instance.open("get","traitement-desc.php?table=<?php echo $_GET['table'];?>&Type=<?php echo $_GET['Type'];?>&ID=<?php echo $_GET['ID'];?>&sexe=<?php echo $_GET['sexe'];?>",true);
        instance.send(null);
    }
    </script>
    <script>
    var nbre_qte = <?php
        $ajout = $conn->query("select Qte from ".$_GET['table']." where ID=".$_GET['ID']);
        $nbr = $ajout->fetch();
        echo $nbr[0];
        $ajout->closeCursor();
    ?>;
    setInterval(notifier,2000);
    function notifier(){
        var instance;
        var res;
        instance = new XMLHttpRequest();
        instance.onreadystatechange = function(){
            if (instance.readyState == 4 && instance.status == 200) {
                res = instance.responseText;
                if(res < nbre_qte){
                    nbre_qte = res;
                    test();
                }
            }};
        instance.open("get","traitement2.php?operation=notifier&table=<?php echo $_GET['table'];?>&ID=<?php echo $_GET['ID']?>",true);
        instance.send(null);
    }

</script>

<script>
    function connecter(){
        <?php if(isset($_SESSION['id-user'])){ ?>
        return true;
        <?php }else{?>
        Alert.render('Veuillez se connecter d\'abord ! ');
        return false;
        <?php }?>
    }
</script>


</body>

</html>
