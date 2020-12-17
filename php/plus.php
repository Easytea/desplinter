<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Rekensite</title>
    <link rel="stylesheet" href="http://localhost/desplinter/css/sommen.css">
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
    <li><a href="http://localhost/desplinter/index.html">Home</a></li>
    <li><a href="http://localhost/desplinter/informatie.html">Informatie</a></li>
    <li><a href="http://localhost/desplinter/php/groep.php">Oefeningen</a></li>
    <li><a href="http://localhost/desplinter/contact.html">Contact</a></li>
    <li><?php echo "<li><a href=\"http://localhost/desplinter/php/plusmin.php?groep=$groep\"><img src=\"http://localhost/desplinter/image/pijl.png\" alt=\"pijl\" /></a></li>" ;
        ?>
</ul>
<hr/>
<!---->
<?php
    echo"<h1>PLUS</h1>";


if(isset($_GET['groep']))
{
    $groep = $_GET['groep'];
    echo "De geselecteerde groep is : ". $groep . "</br>";

switch ($groep) {
    case"4";
        $getal1 = rand(0,100);
        $getal2 = rand(0,100);
    break;
    case"5";
        $getal1 = rand(50,150);
        $getal2 = rand(0,150);
        break;
    case"6";
        $getal1 = rand(100,200);
        $getal2 = rand(50,200);
        break;
    default;
    }
}
echo $getal1 . "+" . $getal2 ;
?>