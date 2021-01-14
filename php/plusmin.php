<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Rekensite</title>
    <link rel="stylesheet" href="http://localhost/desplinter/css/plusmin.css">
</head>
<body>
<div id="head">
    <div class="header">
        <a href="http://localhost/desplinter/"><img src="http://localhost/desplinter/image/logo.jpg" alt="logo" /></a>
    </div>

    <div id="desplinter">
        <h1>De Splinter</h1>
    </div>
</div>
<ul>
    <li><a href="http://localhost/desplinter/index.html">Home</a></li>
    <li><a href="http://localhost/desplinter/informatie.html">Informatie</a></li>
    <li><a href="http://localhost/desplinter/php/groep.php">Oefeningen</a></li>
    <li><a href="http://localhost/desplinter/contact.html">Contact</a></li>
</ul>
<hr/>

<!------------------------------------------------------------------------------------>
<?php
if(isset($_GET['groep']))
{
    $groep = $_GET['groep'];
    /*echo "De geselecteerde groep is : ".$groep;*/
}
?>
<div class="banaan">
    <?php
        echo"<div class=\'container\'><div onclick=\"location.href= 'plus.php?groep=$groep'\" id=\"plus\" class=\"tekst\">";
        echo"<h2>PLUS</h2>";
        echo"<h1 class=\"var\">+</h1>";
        echo"</div>";

        echo"<div onclick=\"location.href= 'min.php?groep=$groep'\" id=\"min\" class=\"tekst\">";
        echo"<h2>MIN</h2>";
        echo"<h1 class=\"var\">-</h1>";
        echo"</div></div>";

        echo"<div class=\'container\'><div onclick=\"location.href= 'delen.php?groep=$groep'\" id=\"delen\" class=\"tekst\">";
        echo"<h2>DELEN</h2>";
        echo"<h1 class=\"var\">:</h1>";
        echo"</div>";

        echo"<div onclick=\"location.href= 'keer.php?groep=$groep'\" id=\"keer\" class=\"tekst\">";
        echo"<h2>KEER</h2>";
        echo"<h1 class=\"var\">X</h1>";
        echo"</div></div>";
   ?>
</div>


</body>
</html>