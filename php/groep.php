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
    <p id="bovenbalk">
        <h1 id="desplinter"><a href="http://localhost/desplinter/html/homepage.html">De Splinter</a></h1>
        <a href="http://localhost/desplinter/php/groep.php">Oefeningen</a>
        <a href="http://localhost/desplinter/html/informatie.html">Informatie</a>
        <a href="http://localhost/desplinter/html/contact.html">Contact</a>
    </p>
<hr/>

<h1>In welke groep zit jij?</h1>

    <form action="http://localhost/desplinter/php/forum.php" method="post">

        <label>Hoe heet jij: <input type="text" name="fname"></label>
        <br/>
        <label>in welke groep zit jij:
            <select name="group">
                <option value="ns">Selecteer een groep</option>
                <option value="1-4">1-4</option>
                <option value="5-8">5-8</option>
            </select>
        </label>
        <br>
        <a href="http://localhost/desplinter/php/forum.php">
        <input type="submit" name=volgende value="volgende">

    </form>
</body>
</html>
