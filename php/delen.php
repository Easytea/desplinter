<?php
if(isset($_GET['groep'])) {
    $groep = $_GET['groep'];
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Rekensite</title>
    <link rel="stylesheet" href="http://localhost/desplinter/css/sommen.css">
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

    <script>
        function myFunction() {
            var txt;
            if (confirm("Je keert terug naar de vorige pagina")) {
                txt = "Je hebt bevestigd";
            } else {
                txt = "Je hebt geweigerd";
            }
            document.getElementById("demo").innerHTML = txt;
        }
    </script>

    <button onclick="myFunction()">
        <?php echo "
                    <a href=\"http://localhost/desplinter/php/plusmin.php?groep=$groep\">
                    <img src=\"http://localhost/desplinter/image/pijl.png\" alt=\"pijl\" />
                    </a>";
        ?>
    </button>
    <button onclick="">
        <?php echo "
                    <a href=\"http://localhost/desplinter/php/calculator.php\" target=\"_blank\">
                    <img src=\"http://localhost/desplinter/image/calculator.png\" alt=\"calculator\" />
                    </a>";
        ?>
    </button>

</ul>
<hr/>

<!--------------------------------------------------------------------------------------------------------->

<div id="container">
    <?php
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
        default;}



    if(isset($_POST['submit'])) {
        $antuser = $_POST['awu'];
        $antwoord = $_POST['getal1'] / $_POST['getal2'];

        if ($antuser==$antwoord){
            echo"<h1>het antwoord is</h1> <p id='goed'>GOED!</p>";
            echo"<div onclick=\"location.href= 'delen.php?groep=$groep'\" id=\"\" class=\"\">";
            echo"<h4 id='verder'>Kilk hier om verder te gaan</h4>";
            echo"</div>";
        }
        else{
            echo"<h2>Het antwoord is</h2> <p id='fout'>FOUT!</p>";
            echo"<p>Jouw antwoord = ".$antuser."</p>";
            echo"<p>het goede antwoord was = ".$antwoord."</p>";
            echo"<div onclick=\"location.href= 'delen.php?groep=$groep'\" id=\"\" class=\"\">";
            echo"<h4 id='opnieuw'>Opnieuw</h4>";
            echo"</div>";
        }
    }

    else{



        echo"<h1>Bereken de uitkomst</h1>";
        echo"<form action=\"delen.php?groep=$groep\" method=\"post\">";
        echo"<label>".$getal1." / ".$getal2."<input type=\"text\" name=\"awu\"></label>";
        echo"<a href=\"http://localhost/desplinter/php/delen.php\">";
        echo "<input type='hidden' name='getal1' value='$getal1'>";
        echo "<input type='hidden' name='getal2' value='$getal2'>";
        echo"<input type=\"submit\" name=submit value=\"Enter\">";
        echo"</form>";

    }

    ?>
</div>

</body>
</html>
