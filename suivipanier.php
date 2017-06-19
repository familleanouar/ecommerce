<?php
session_start();
if(isset($_SESSION['id-user'])){
$somme=0;
include('connexion.php');
$iduser=$_SESSION['id-user'];

$sql = 'select sum(prix_total) from panier where iduser=? and etat="pending"';
$ajout = $conn->prepare($sql);
$ajout->bindValue(1,$iduser);
$ajout->execute();
$prixtotal=$ajout->fetch();
    $i=0;
?>   <h4 style="    color: white;
    font-size: 29px;
    padding-top: 0px;
    padding-left: 27px;
    background: #525353;
    padding-bottom: 2px; ">
        <a style="color:white;text-decoration:none;font-family:myFirstFont;" href="votre_panier.php">Panier</a>
    </h4>
    <div class="block_content">
    <div id="cart_block_summary" class="collapsed">
    </div>
    <div id="cart_block_list" style="padding-left: 20px;" class="expanded">
    <dl class="products">
        <dt id="cart_block_product_32" class="first_item last_item">

        </dt>
    </dl>
    <p id="cart-prices">
        <span>Exp&eacute;dition : </span>
        <strong style="font-size:12px !important;color:#008390 !important;font-family:arial;" id="cart_block_shipping_cost" class="price ajax_cart_shipping_cost"> 50,00 MAD </strong>
        <br>
    </p>
    <p id="ro">
              <span>Total : </span>
                <strong style="font-size:12px !important;color:#008390 !important;font-family:arial;" id="cart_block_total" class="price ajax_block_cart_total">    <?php echo $prixtotal[0]+$i;?> MAD</strong>
            </p>

        </p>
    </div>
        <p style="    font-size: 11px;
    color: #573E14;
    margin-top: 32px;
    text-align: center;
    width: 178px;
    margin-left: 20px;">
            Transport gratuit à partir de 350 DHs.
        </p>
        <p style="    font-size: 14px;
            color: #573E14;
            text-align: center;
            width: 200px;
            margin-left: 20px;">
            <a href="historique.php">Historique de mes commandes</a>
        </p>
    </div>


    <?php
}
?>