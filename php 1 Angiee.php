<?php
//echo "Bienvenido a Academia de Idiomas AK";
	
	$idiomas = array("Ingles", "portugues", "japones, "aleman", "turco", "español");
	$idiomas[]= "frances";
	//	print_r($idiomas);


// $nombres = "Angiee :3";
 //echo $nombres
	
//	unset ($nombres);
//	echo $nombres;
	
	
//nombres = ["Sara", "Paula", "Rebeca", "Valeria", "Claudia"];
	//set($nombres[3]);
//rnt_r ($nombres);
	
	$idiomasEliminar = "turco";
	$boton = array_search($idiomasEliminar,idiomas);
	
	if 	($boton!==false){

	 
	  unset($idiomas[$boton]);
	}
	
	print_r($idiomas);
	
?>
