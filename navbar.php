<!-- ouvrir Session -->

<?php
session_start();
?>
<style>
    #dialogoverlay{
        display: none;
        opacity: .8;
        position: fixed;
        top: 0px;
        left: 0px;
        background: #FFF;
        width: 100%;
        z-index: 10;
    }
    #dialogbox{
        display: none;
        position: fixed;
        background: #000;
        border-radius:7px;
        width:550px;
        z-index: 10;
    }
    #dialogbox > div{ background:#FFF; margin:8px; }
    #dialogbox > div > #dialogboxhead{ background: #666; font-size:19px; padding:10px; color:#CCC; }
    #dialogbox > div > #dialogboxbody{ background:#333; padding:20px; color:#FFF; }
    #dialogbox > div > #dialogboxfoot{ background: #666; padding:10px; text-align:right; }
</style>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="font-size: .9em">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Bienvenue  <!-- affichage nom et prenom utilisateur --><?php
                if(isset($_SESSION['mail'])){
                    echo $_SESSION['mail'];}
                //  fermer Session
                session_write_close();

                ?>! </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="Homme.php">Homme</a>
                </li>
                <li>
                    <a href="Femme.php">Femme</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="about.php">Qui sommes-nous ?</a>
                </li>
                <!--   /////////    CONEXION ///////////////////////////// -->
                <?php
                if(!isset($_SESSION['mail'])){
                    echo '
                 <li>
                         <a href="Inscription.php">Inscription</a>
                       </li>
                      <li>
                            <a href="#" >
                        <input type="text" id="login"  style="border: 1px solid #ccc;
    font-c: #271c66;
    border-radius: 2px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;background-color: rgba(87, 87, 87, 0.62);
}" placeholder="Login"  name="login">        </a>
                    </li>
                    <li>
                        <a href="#">
                        <input type="password" id="mdp"  placeholder="Mot de passe" style="border: 1px solid #ccc;
    border-radius: 2px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;background-color: rgba(87, 87, 87, 0.62);
" ></a></li>
                <li id="remake" onclick="connexion()"><a href="#"> <button id="make" class="btn-primary" type="button" onclick="connexion">Go</button></a></li>
                <!--   /////////    CONEXION ///////////////////////////// -->
                 <li>
                    <a style="text-decoration: underline" href="" onclick="recupmail()" id="modp" >Mot de passe oubli&eacute;?</a>
                </li>
';
                }
else { ?>
                <li>
                    <a href="votre_panier.php">Votre Panier</a>
                </li>
    <li>
        <a href="logout.php">Se d&eacute;connecter</a>
    </li>
                <?php
}?>


            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div id="dialogoverlay"></div>
<div id="dialogbox">
    <div>
        <div id="dialogboxhead"></div>
        <div id="dialogboxbody"></div>
        <div id="dialogboxfoot"></div>
    </div>
</div>
<script>
    var Alert = new CustomAlert();
    var ifok=0;
    function connexion(){
        var login = document.getElementById("login").value;
        var mdpas = document.getElementById("mdp").value;
        var instance;
        instance = new XMLHttpRequest();

        instance.onreadystatechange = function(){
            if (instance.readyState == 4 && instance.status == 200) {

                if(instance.responseText==0){
                    Alert.render("Le login ou le mot de passe est incorrect ! Veuillez les vérifier s'il vous plait.");
                }
                else if(instance.responseText==1){
                    ifok=1;
                    Alert.render("Bienvenue chere client à votre espace");

                }
            }};
        instance.open("POST","login.php",true);
        instance.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        instance.send("mail="+login+"&mdp="+mdpas);
    }
// pour recupere lemail lors de la demande de changer le mdp
    function recupmail(){

        var mail=document.getElementById('login').value;
        document.getElementById('modp').setAttribute('href','mail.php?mail='+mail);
    }
    function CustomAlert(){
        this.render = function(dialog){
            var winW = window.innerWidth;
            var winH = window.innerHeight;
            var dialogoverlay = document.getElementById('dialogoverlay');
            var dialogbox = document.getElementById('dialogbox');
            dialogoverlay.style.display = "block";
            dialogoverlay.style.height = winH+"px";
            dialogbox.style.left = (winW/2) - (550 * .5)+"px";
            dialogbox.style.top = "100px";
            dialogbox.style.display = "block";
            document.getElementById('dialogboxhead').innerHTML = "Notification ";
            document.getElementById('dialogboxbody').innerHTML = dialog;
            document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
        }
        this.ok = function(){
            document.getElementById('dialogbox').style.display = "none";
            document.getElementById('dialogoverlay').style.display = "none";
            if(ifok==1) {
                window.location.reload();
            }
            }
    }
</script>