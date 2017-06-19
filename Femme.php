<?php
include('content-femme.php');
include('connexion.php');
?>

<div class="row" id="vet">

    <!--trait1.php les images de tout les vetements -->
    <?php

    $ajout = $conn->query("select * from vetements where sexe='Femme' ORDER BY rand()");
    foreach($ajout as $r) {

        echo "
<div class='col-sm-4 col-lg-4 col-md-4' >
    <div class='thumbnail' >
        <img src = ".$r['chemin'] . " >
        <div class='caption' >
            <h4 class='pull-right' > ".$r['prix'] . ",00 MAD</h4 >
             <h4 ><a href ='description.php?table=vetements&Type=".$r['Type']."&ID=".$r['ID']."&sexe=Femme' > " .$r['Nom'] ."</a >
            </h4 >
            <p >".$r['description']."</p>
        </div >
          </div >
</div >";

    }
    $ajout->closeCursor();
    ?>

</div>
<!-- /.container -->

<div class="container">

    <hr>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="images/js/bootstrap.min.js"></script>

<script>
    test();
    function test() {
        var instance;
        instance = new XMLHttpRequest();

        instance.onreadystatechange = function(){
            if (instance.readyState == 4 && instance.status == 200) {
                document.getElementById("vet").innerHTML = instance.responseText;
            }};
        instance.open("get","traitement.php?table=<?php echo $_GET['table'];?>&Type=<?php echo $_GET['Type'];?>&sexe=Femme",true);
        instance.send(null);
    }
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
<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p style="text-align: center">Copyright &copy; Ecole Nationale des sciences appliqu&eacute;es 2016</p>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</footer>
</body>

</html>
