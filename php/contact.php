<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Rekensite</title>
    <link rel="stylesheet" href="http://localhost/desplinter/css/contact.css">
</head>
<body>
<div id="menubalk">
    <h1><a id="desplinter" href="http://localhost/desplinter/html/homepage.html">De Splinter</a></h1>
    <a id="menubalktekst" href="http://localhost/desplinter/php/groep.php">Oefeningen</a>
    <a id="menubalktekst" href="http://localhost/desplinter/html/informatie.html">Informatie</a>
    <a id="menubalktekst" href="http://localhost/desplinter/html/contact.html">Contact</a>
</div>
<hr/>
<fieldset style="width:200px">
    <p>
        Bedankt voor het invullen van het formulier! <br/>
        We proberen zo snel mogelijk contact met u op te nemen.
    </p>
</fieldset>
<img src="http://localhost/desplinter/image/foto_2.jpg" alt="lachend kind" hight="800" width="500">
</html>

<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

if (empty($name) || empty($email) || empty($message))
{
    echo "Vul alle velden in.";
}
else
{
    mail("t.gieben@outlook.com", "De Splinter Bericht", $message , "Van: $name <
        $email>");
    echo "<script type='text/javascript'>alert('Je bericht is succesvol verzonden')
     window.history.log(-1);
    </script>";

}
?>


