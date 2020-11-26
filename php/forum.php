<?php
if (isset($_POST['volgende']))
{
    $name = $_POST["fname"];
    echo "Hallo " . $name;
    $group = $_POST['group'];
    echo  "<br>" . "Jij zit in groep: " . $group . "<br>";


}


if ($group == "je hebt geen groep gezokzen")
    {
        echo "Ga trug naar de volgende pagina en selecteer een groep" ;
    }

elseif ($group == '4')
    {
        echo "<br>";
        include("groep4.php");

    }

elseif ($group == '5')
    {
        echo "<br>";
        include("groep5.php");
    }

elseif ($group == '6')
    {
        echo "<br>";
        include("groep4.php");
    }
?>


