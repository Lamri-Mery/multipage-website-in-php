
<?php require 'partials/json.php'; ?>
<?php require 'partials/head.php'; ?>
<?php require 'partials/menu.php'; ?>
<?php include 'partials/annonce.php'; ?>			
<?php include 'partials/search.php'; ?>
<?php require 'partials/presentation.php'; ?>
<?php require 'partials/don.php'; ?>		
<?php require 'partials/pagination.php'; ?>
<?php require 'partials/modal.php'; ?>
<?php require 'partials/footer.php'; ?>

<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$jsonsubmit = isset($_POST['jsubmit']);
	if ($jsonsubmit == true) {
		// récupérer toute les données de mon formulaire et le mettre dans un tableau nommé mygoldbook
		$mygoldbook = array();
		
		$mygoldbook['lastname'] = $_POST['jlastname'];
		$mygoldbook['firstname'] = $_POST['jfirstname'];
		$mygoldbook['message'] = $_POST['jmessage'];
		$mygoldbook['date'] = date('d/m/Y à H:i');
	}
?>