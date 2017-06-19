<?php

if(isset($_GET['mail'])){
    $mail=$_GET['mail'];

    $header="MIME-Version: 1.0\r\n";
    $header.='From:"Nouha"<support@gmail.com>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';

    $message='<html>
	<body>
		<div align="center">
			<img src="http://futureexecuted.com/felogo.jpg"/>
			<br />
			Pour changer votre mot de passe , cliquez sur le lien suivant:
			<br />
			<img src="http://www.primfx.com/mailing/separation.png"/>
			<a  href="http://localhost/e-commerce/changepwd.php?mail='.$_GET['mail'].'">cliquez-ici ! </a>
		</div>
	</body>
</html>';
    mail("$mail", "Bonjour cher client !", $message, $header);
	header("location:index.php?message=true&mail=".$mail);
}

else header("location:Homme.php?mail=".$mail);


;?>
