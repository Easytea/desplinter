<!---->
<?php
echo"<h1>DELEN</h1>";


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
echo $getal1 . ":" . $getal2 ;
?>