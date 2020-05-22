<?php


if (isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$programme = $_POST['programme'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];



$mailTo = "halaszlilla@lillahalasz.com";
$headers = "From:".$mailFrom;
$txt= "You have received an e-mail from ".$firstname " ".$lastname.".\n\n".$message;

mail($mailTo, $programme, $txt, $headers);
header("Location: index.php?mailsend");
}



?>