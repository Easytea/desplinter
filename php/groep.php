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

    <form action="http://localhost/desplinter/php/forum.php" method="post" name="groep">
        <input type= "radio" name ="groep4"> <label>Groep 4</label>
        <br/>
    	<input type= "radio" name ="groep5"> <label>Groep 5</label>
        <br/>
        <input type= "radio" name ="groep6"> <label>Groep 6</label>

    </form>
    <br/>
    <a href="http://localhost/desplinter/php/forum.php">
    <input type="submit" name="volgende" value="volgende">


</body>
</html>
