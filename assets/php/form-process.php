<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Por favor, digite seu nome ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Por favor, digite seu e-mail ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Insira um assunto ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Digite sua mensagem ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "feliperom87@gmail.com";
$Subject = "Nova Mensagem Recebida através do site - fernandestransportes.com.br";

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $name;
$Body .= "\n";
$Body .= "E-mail: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Assunto: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Mensagem: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Algo deu errado :(";
    } else {
        echo $errorMSG;
    }
}

?>