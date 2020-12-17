
<!---->
<?php
    echo"<h1>PLUS</h1>";


if(isset($_GET['groep']))
{
    $groep = $_GET['groep'];
    echo "De geselecteerde groep is : ". $groep;

switch ($groep) {
    case"4";
        $getal1 = rand(0,100);
        $getal2 = rand(0,100);
    break;
    case"5";
        $getal1 = rand(50,150);
        $getal2 = rand(0,1500);
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