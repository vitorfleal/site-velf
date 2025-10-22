<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nome é obrigatório ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email é obrigatório ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Assunto é obrigatório ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Mensagem é obrigatório ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "comercial@velfconsulting.com";
$Subject = "Site Institucional";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "sucesso";
}else{
    if($errorMSG == ""){
        echo "Algo deu errado :(";
    } else {
        echo $errorMSG;
    }
}

?>