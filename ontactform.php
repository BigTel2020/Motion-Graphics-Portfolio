<?php

if (isset($_POST['Enviar'])) {
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $mailfrom = $_POST["mail"];
    $message = $_POST["Enviar"];

    $mailto = "bigtel1@yahoo.com";
    $headers = "From: ".$mailfrom;
    $txt = " You have received an e mail from ".$Name .".\n\n" .$message;

    mail($mailto, $Email, $txt, $headers);
    header("Location: index.php?mailsend");
}