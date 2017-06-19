<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<?php include ('navbar.php'); ?>

<!-- Page Content -->
<div class="container" id="desc">



</div>
<!-- /.row -->

<!-- Related Projects Row -->
<div class="row">

    <div class="col-lg-12">
        <h3 class="page-header">Related Projects</h3>
    </div>

    <div class="col-sm-3 col-xs-6">
        <a href="#">
            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
        </a>
    </div>

    <div class="col-sm-3 col-xs-6">
        <a href="#">
            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
        </a>
    </div>

    <div class="col-sm-3 col-xs-6">
        <a href="#">
            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
        </a>
    </div>

    <div class="col-sm-3 col-xs-6">
        <a href="#">
            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
        </a>
    </div>

</div>
<!-- /.row -->

<hr>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </div>
    <!-- /.row -->
</footer>

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
        instance.open("get","traitement-desc2.php?table=<?php echo $_GET['table'];?>&Type=<?php echo $_GET['Type'];?>&ID=<?php echo $_GET['ID'];?>",true);
        instance.send(null);
    }


</script>


</body>

</html>
