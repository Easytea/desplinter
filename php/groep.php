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
    <div id="menubalk">
        <h1><a id="desplinter" href="http://localhost/desplinter/html/homepage.html">De Splinter</a></h1>
        <a id="menubalktekst" href="http://localhost/desplinter/php/groep.php">Oefeningen</a>
        <a id="menubalktekst" href="http://localhost/desplinter/html/informatie.html">Informatie</a>
        <a id="menubalktekst" href="http://localhost/desplinter/html/contact.html">Contact</a>
    </div>
<hr/>

<h1>In welke groep zit jij?</h1>

    <form action="http://localhost/desplinter/php/forum.php" method="post">

        <label>Hoe heet jij: <input type="text" name="fname"></label>
        <br/>
        <label>in welke groep zit jij:
            <select name="group">
                <option value="je hebt geen groep gezokzen">Selecteer een groep</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </label>
        <br>
        <a href="http://localhost/desplinter/php/forum.php">
        <input type="submit" name=volgende value="volgende">

    </form>
</body>
</html>
