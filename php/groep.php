<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Groep</title>
    <meta charset=utf-8>
    <meta name=description content="beschrijving">
    <meta name=keywords content="trefwoord,trefwoord">
    <link rel="stylesheet" href="http://localhost/desplinter/css/groep.css">
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
</ul>
<hr/>

<!------------------------------------------------------------------------------------>



<div id="formulier">
    <?php
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $groep = $_POST['group'];
        echo "<p class=\"hallotekst\">Hallo, " . $fname ."<br/></p>";

        switch ($groep) {
            case "4";
                echo "<p class=\"groeptekst\">Groep 4</p>";
                echo "<meta http-equiv=\"refresh\" content=\"1; url=plusmin.php?groep=$groep\" />";
                break;
            case "5";
                echo "<p class=\"groeptekst\">Groep 5 </p>";
                echo "<meta http-equiv=\"refresh\" content=\"1; url=plusmin.php?groep=$groep\" />";
                break;
            case "6";
                echo "<p class=\"groeptekst\">Groep 6</p>";
                echo "<meta http-equiv=\"refresh\" content=\"1; url=plusmin.php?groep=$groep\" />";
                break;
            default:
                echo "<p class=\"groeptekst\">U heeft geen groep ingevud!
                <br/>(Keer terug naar de vorige pagina)</p>";
        }
    }
    else{
    ?>
    <h1>Vul hier je gegevens in!</h1>

        <form action="http://localhost/desplinter/php/groep.php" method="post">

            <label>Hoe heet jij: <input type="text" name="fname"></label>
            <br/>
            <label>In welke groep zit jij:
                <select name="group">
                    <option>Selecteer een groep</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </label>
            <br>
            <a href="http://localhost/desplinter/php/groep.php ">
            <input type="submit" name=submit value="volgende">

        </form>
    <?php
    }
    ?>
</div>



</body>
</html>
