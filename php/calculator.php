<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="http://localhost/desplinter/css/calculator.css">
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

<!--------------------------------------------------------------------------------------------------------->
<?php
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
                return $this->a + $this->b;
                break;

            case '-':
                return $this->a - $this->b;
                break;

            case 'x':
                return $this->a * $this->b;
                break;

            case ':':
                return $this->a / $this->b;
                break;

            default:
                return "Voer een commando in...";
        }
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<div id="calculator">
<form method="post">
    <table align="center">
        <tr id="antwoord">
            <td><strong><?php echo $result; ?><strong></td>
        </tr>
        <tr>
            <td>Vul het 1e getal in</td>
            <td><input type="text" name="n1"></td>
        </tr>

        <tr>
            <td>Vul het 2e getal in</td>
            <td><input type="text" name="n2"></td>
        </tr>

        <tr>
            <td>Slecteer operator</td>
            <td><select name="op">
                    <option value="">operator</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="x">x</option>
                    <option value=":">:</option>
                </select></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="                =                "></td>
        </tr>

    </table>
</form>
</div>





</body>
</html>