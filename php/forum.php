<?php



$bouw = 1;

$bouw = 2;

if ($bouw == 1)
	
	{

		$min = 1;
		$max = 10;

	}
	
	else
		
		{
			$min = 10;
			$max = 100;	
		}

 $getal1 = rand ($min , $max );
 
 $getal2 = rand ( $min , $max ) ;
 
 
 $uitkomst = $getal1 + $getal2 ;
 
 
 echo "hoeveel is $getal1 + $getal2?";
 echo "<br/>";
 
 echo "Het goede antwoord is: $uitkomst";
 
 ?>