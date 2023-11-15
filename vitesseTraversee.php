<?php 

echo "Saisir la vitesse : \n ";
$vitesseSaisie = rtrim( fgets (STDIN ));

	if ($vitesseSaisie < 0 ) {
		$vitesseCorrigee = 0 ;
		echo "Vitesse : " , $vitesseCorrigee,  " noeud\n";
	}
	elseif($vitesseSaisie > 1 ){
		echo "Vitesse : " , $vitesseSaisie,  " noeuds\n";
	}
		elseif($vitesseSaisie == 0 ){
		echo "Vitesse : " , $vitesseSaisie , " noeud\n";
	}
	else{
		echo "Vitesse : " , $vitesseSaisie , " noeud\n";
	}
?>
