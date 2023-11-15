<?php
echo"Saisir le nom du port : ";
$port = rtrim( fgets (STDIN ));

	switch(strtolower($port)){
		case "quiberon":
			$dept = "mobihan";
			break;
		
			
		case "sauzon":
			$dept = "mobihan";
			break;
		
		case "le palais":
			$dept = "morbihan";
			break;
				
		case "piriac-sur-mer":
			$dept = "Loire-Atlantique";
			break;	
			
		case "pornic":
			$dept = "Loire-Atlantique";
			break;		
			
		case "concarneau":
			$dept = "finistere";
			break;	
			
		case "douarnenez":
			$dept = "finistere";
			break;	
			
		case "ile-d'yeu":
			$dept = "vendee";
			break;	
				
		default:
			$dept = "Port non recensé";		
}

	if($dept == "Port non recensé"){
		echo "Port non recensé\n";
	}
	else{ echo "Département : " , $dept, "\n";
}
 ?>
