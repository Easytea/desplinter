
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Groep</title>
    <meta charset=utf-8>
    <meta name=description content="beschrijving">
    <meta name=keywords content="trefwoord,trefwoord">
    <link rel="stylesheet" href="http://localhost/desplinter/css/contactformulier.css">

</head>
<body>
<div id="head">
    <div class="header">
        <img src="http://localhost/desplinter/image/logo.jpg" alt="logo" />
    </div>

    <div id="desplinter">
        <h1>De Splinter</h1>
    </div>
</div>
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="http://localhost/desplinter/informatie.html">Informatie</a></li>
    <li><a href="http://localhost/desplinter/php/groep.php">Oefeningen</a></li>
    <li><a href="http://localhost/desplinter/contact.html">Contact</a></li>
</ul>
<hr/>

<!------------------------------------------------------------------------------------>
<fieldset style="width:200px">
    <p>
        Bedankt voor het invullen van het formulier! <br/>
        We proberen zo snel mogelijk contact met u op te nemen.
    </p>
</fieldset>
<img src="http://localhost/desplinter/image/foto_2.jpg" alt="lachend kind" hight="800" width="500">
</html>

<?php
if(isset($_POST['submit']))
{
    echo "error; Je moet het formulier voltooien";
}
$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["message"];

if(empty($naam)||empty($email))
{
    echo "Vul een naam in en/of een geldig e-mailaddress";
    exit;
}

$email_onderwerp = "Bericht van De Splinter";
$email_body = "Je hebt een bericht ontvangen van $name. \n".
                "E-mail address: $email\n".
                "Hier is het bericht:\n $msg".

    $to = "t.gieben@outlook.com";
    $headers = "Van: $email \r\n";


 mail($to,$email_onderwerp,$email_body,$headers);

?>


