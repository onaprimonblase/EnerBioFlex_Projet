<?php

	
	require 'php/functions.inc.php';
	
	
	// Affichage détail article si redirection via annonce
	if(isset($_GET['id_article'])){
		
		$today = date("m.d.y");
	

		// Entete
		head_html( 'Détail article n°'.$_GET['id_article'], "img/logo.png", array( "css/details.css",
		"media/FR_regnew_js/cmap/style.css",
		"vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css",
		"vendor/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"
		),'');

		//Barre
		bar('OFFRES');

		// Chargement détails article (photo(s), prix etc.)
		include('php/detailArticle.php');		
			
	}



	else{

	//Affichage Error si page appelé sans parametre	
	echo "Error.";

	}



	
?>
</html>