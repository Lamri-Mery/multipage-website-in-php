<?php 
	$jsonsubmit = isset($_POST['jsubmit']);
	if ($jsonsubmit == true) {
		// récupérer toute les données de mon formulaire et le mettre dans un tableau nommé mygoldbook
		$mygoldbook = array();
		
		$mygoldbook['lastname'] = $_POST['jlastname'];
		$mygoldbook['firstname'] = $_POST['jfirstname'];
		$mygoldbook['message'] = $_POST['jmessage'];
		$mygoldbook['date'] = date('d/m/Y à H:i');

		//*Ouvrir le fichier json*/
		$myjs = file_get_contents('goldbook.json');

		/*Converir le fichier json en tableau php*/
		$myjs = json_decode($myjs, true); //true convertit en tableau, sans cela les éléments selectionnés seraient convertit en objet
		/*Ajouter des éléments dans le tableau qui a été créé*/
		$myjs[] = $mygoldbook;
		/*Convertir les éléments obtenu dans le tableau en json pour le remettre dans le fichier*/
		$myjs = json_encode($myjs);
		/*Remettre dans le fichier json*/
		file_put_contents('goldbook.json', $myjs);
		/*Ajouter une direction après l'envois du formulaire*/
		header('location: ./');

	}

?>