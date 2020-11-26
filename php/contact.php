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
if(isset($_POST['submit'])){
    $to = "t.gieben@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>

