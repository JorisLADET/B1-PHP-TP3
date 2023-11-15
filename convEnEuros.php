<?php

echo "Saisir la devise : " ;
$devise = strtoupper(rtrim(fgets(STDIN)));

if( $devise == "USD" ){
		$tauxChange = 0.883 ;
	}
	elseif( $devise == "CAD" ) {
		$tauxChange = 0.686 ;
	}
	elseif( $devise == "GBP" ) {
		$tauxChange = 1.154 ;
	}
	elseif( $devise == "RUB" ) {
		$tauxChange = 0.013 ;
	}
	if($tauxChange == 0 ){
		echo "Devise inconnue.\n" ;
	}
else { 
	echo "Saisir le prix en " , $devise , " : " ;
	$prix = rtrim ( fgets ( STDIN ) );
	
	if (is_numeric( $prix )) {
		$prixEuros = $prix * $tauxChange ;
		echo "Prix en euros : " , $prixEuros , " €.\n";
	} 
	else{
		echo"La valeur saisie ne correspond pas à un prix.\n";
   }
}

?>
