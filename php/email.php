<?php

if(isset($_POST['email']) && !empyty($_POST['email'])){



$nome = addslashes($_POST['name']));
$email = addslashes($_POST['email']));
$mensagem = addslashes($_POST['message']));


$to = "eric.1vinicio@gmail.com";
$subjet = "Sugestão - Site FATV";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:pedrorafaelfaria7@gmail.com"."\r\n".
            "Reply-to:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subjet,$body,$header)){

    echo("Email enviado com sucesso!");

}else{

    echo("Email não enviado");

}

}









?>