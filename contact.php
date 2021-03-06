<<<<<<< HEAD

<?php
/**
* This example shows settings to use when sending via Google"s Gmail servers.
* This uses traditional id & password authentication - look at the gmail_xoauth.phps
* example to see how to use XOAUTH2.
* The IMAP section shows how to save this message to the "Sent Mail" folder using IMAP commands.
*/
//Import PHPMailer classes into the global namespace

$email = $_POST["email"];
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$message = $_POST["message"];
$objet = $_POST["subject"];
$format = $_POST["format"];
$image = $_POST["image"];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/phpmailer/phpmailer/src/Exception.php";
require "vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "vendor/phpmailer/phpmailer/src/SMTP.php";



//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
// use
// $mail->Host = gethostbyname("smtp.gmail.com");
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = "tls";
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "anthony.pascal.sel@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Likeaboss01";
//Set who the message is to be sent from
$mail->setFrom("anthony.pascal.sel@gmail.com", "Anthony Sel");
//Set an alternative reply-to address
//$mail->addReplyTo("replyto@example.com", "Anthony S");
//Set who the message is to be sent to
$mail->addAddress($email);
//Set the subject line
$mail->Subject = $objet;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Replace the plain text body with one created manually
$mail->Body = $message;
$mail->AltBody = "Coucou petite perruche";
//Attach an image file
$mail->addAttachment($image);
include('vendor/verot/class.upload.php/src/class.upload.php');
$handle = new upload($_FILES['image']);
if ($handle->uploaded) {
  $handle->file_new_name_body   = 'image_resized';
  // $handle->image_resize         = true;
  // $handle->image_x              = 100;
  // $handle->image_ratio_y        = true;
  $handle->process('downloadimg/');
  if ($handle->processed) {
    echo 'image_resized';
    $handle->clean();
  } else {
    echo 'error : ' . $handle->error;
  }
}
//send the message, check for errors
if (!$mail->send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "Message sent!";
   //Section 2: IMAP
   //Uncomment these to save your message in the "Sent Mail" folder.
   #if (save_mail($mail)) {
   #    echo "Message saved!";
   #}
}
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, "/imap/ssl") to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
   //You can change "Sent Mail" to any other folder or tag
   $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
   //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
   $imapStream = imap_open($path, $mail->Username, $mail->Password);
   $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
   imap_close($imapStream);
   return $result;
}
=======
<?php 
	// liste des pays
	// code numérique, code alpha 2, code Alpha 3, nom du pays
	$countryCode = array(
	array('4', 'AFG', 'AF', 'Afghanistan'), 
	array('710', 'ZAF', 'ZA', 'Afrique du Sud'), 
	array('248', 'ALA', 'AX', 'Aland'), 
	array('8', 'ALB', 'AL', 'Albanie'), 
	array('12', 'DZA', 'DZ', 'Algérie'), 
	array('276', 'DEU', 'DE', 'Allemagne'), 
	array('20', 'AND', 'AD', 'Andorre'), 
	array('24', 'AGO', 'AO', 'Angola'), 
	array('660', 'AIA', 'AI', 'Anguilla'), 
	array('10', 'ATA', 'AQ', 'Antarctique'), 
	array('28', 'ATG', 'AG', 'Antigua-et-Barbuda'), 
	array('682', 'SAU', 'SA', 'Arabie saoudite'), 
	array('32', 'ARG', 'AR', 'Argentine'), 
	array('51', 'ARM', 'AM', 'Arménie'), 
	array('533', 'ABW', 'AW', 'Aruba'), 
	array('36', 'AUS', 'AU', 'Australie'), 
	array('40', 'AUT', 'AT', 'Autriche'), 
	array('31', 'AZE', 'AZ', 'Azerbaïdjan'), 
	array('44', 'BHS', 'BS', 'Bahamas'), 
	array('48', 'BHR', 'BH', 'Bahreïn'), 
	array('50', 'BGD', 'BD', 'Bangladesh'), 
	array('52', 'BRB', 'BB', 'Barbade'), 
	array('112', 'BLR', 'BY', 'Biélorussie'), 
	array('56', 'BEL', 'BE', 'Belgique'), 
	array('84', 'BLZ', 'BZ', 'Belize'), 
	array('204', 'BEN', 'BJ', 'Bénin'), 
	array('60', 'BMU', 'BM', 'Bermudes'), 
	array('64', 'BTN', 'BT', 'Bhoutan'), 
	array('68', 'BOL', 'BO', 'Bolivie'), 
	array('535', 'BES', 'BQ', 'Bonaire', ' Saint-Eustache et Saba'), 
	array('70', 'BIH', 'BA', 'Bosnie-Herzégovine'), 
	array('72', 'BWA', 'BW', 'Botswana'), 
	array('74', 'BVT', 'BV', 'Île Bouvet'), 
	array('76', 'BRA', 'BR', 'Brésil'), 
	array('96', 'BRN', 'BN', 'Brunei'), 
	array('100', 'BGR', 'BG', 'Bulgarie'), 
	array('854', 'BFA', 'BF', 'Burkina Faso'), 
	array('108', 'BDI', 'BI', 'Burundi'), 
	array('136', 'CYM', 'KY', 'Îles Caïmans'), 
	array('116', 'KHM', 'KH', 'Cambodge'), 
	array('120', 'CMR', 'CM', 'Cameroun'), 
	array('124', 'CAN', 'CA', 'Canada'), 
	array('132', 'CPV', 'CV', 'Cap-Vert'), 
	array('140', 'CAF', 'CF', 'République centrafricaine'), 
	array('152', 'CHL', 'CL', 'Chili'), 
	array('156', 'CHN', 'CN', 'Chine'), 
	array('162', 'CXR', 'CX', 'Île Christmas'), 
	array('196', 'CYP', 'CY', 'Chypre'), 
	array('166', 'CCK', 'CC', 'Îles Cocos'), 
	array('170', 'COL', 'CO', 'Colombie'), 
	array('174', 'COM', 'KM', 'Comores'), 
	array('178', 'COG', 'CG', 'République du Congo'), 
	array('180', 'COD', 'CD', 'République démocratique du Congo'), 
	array('184', 'COK', 'CK', 'Îles Cook'), 
	array('410', 'KOR', 'KR', 'Corée du Sud'), 
	array('408', 'PRK', 'KP', 'Corée du Nord'), 
	array('188', 'CRI', 'CR', 'Costa Rica'), 
	array('384', 'CIV', 'CI', 'Côte d\'Ivoire'), 
	array('191', 'HRV', 'HR', 'Croatie'), 
	array('192', 'CUB', 'CU', 'Cuba'), 
	array('531', 'CUW', 'CW', 'Curaçao'), 
	array('208', 'DNK', 'DK', 'Danemark'), 
	array('262', 'DJI', 'DJ', 'Djibouti'), 
	array('214', 'DOM', 'DO', 'République dominicaine'), 
	array('212', 'DMA', 'DM', 'Dominique'), 
	array('818', 'EGY', 'EG', 'Égypte'), 
	array('222', 'SLV', 'SV', 'Salvador'), 
	array('784', 'ARE', 'AE', 'Émirats arabes unis'), 
	array('218', 'ECU', 'EC', 'Équateur'), 
	array('232', 'ERI', 'ER', 'Érythrée'), 
	array('724', 'ESP', 'ES', 'Espagne'), 
	array('233', 'EST', 'EE', 'Estonie'), 
	array('840', 'USA', 'US', 'États-Unis'), 
	array('231', 'ETH', 'ET', 'Éthiopie'), 
	array('238', 'FLK', 'FK', 'Îles Malouines'), 
	array('234', 'FRO', 'FO', 'Îles Féroé'), 
	array('242', 'FJI', 'FJ', 'Fidji'), 
	array('246', 'FIN', 'FI', 'Finlande'), 
	array('250', 'FRA', 'FR', 'France'), 
	array('266', 'GAB', 'GA', 'Gabon'), 
	array('270', 'GMB', 'GM', 'Gambie'), 
	array('268', 'GEO', 'GE', 'Géorgie'), 
	array('239', 'SGS', 'GS', 'Géorgie du Sud-et-les Îles Sandwich du Sud'), 
	array('288', 'GHA', 'GH', 'Ghana'), 
	array('292', 'GIB', 'GI', 'Gibraltar'), 
	array('300', 'GRC', 'GR', 'Grèce'), 
	array('308', 'GRD', 'GD', 'Grenade'), 
	array('304', 'GRL', 'GL', 'Groenland'), 
	array('312', 'GLP', 'GP', 'Guadeloupe'), 
	array('316', 'GUM', 'GU', 'Guam'), 
	array('320', 'GTM', 'GT', 'Guatemala'), 
	array('831', 'GGY', 'GG', 'Guernesey'), 
	array('324', 'GIN', 'GN', 'Guinée'), 
	array('624', 'GNB', 'GW', 'Guinée-Bissau'), 
	array('226', 'GNQ', 'GQ', 'Guinée équatoriale'), 
	array('328', 'GUY', 'GY', 'Guyana'), 
	array('254', 'GUF', 'GF', 'Guyane'), 
	array('332', 'HTI', 'HT', 'Haïti'), 
	array('334', 'HMD', 'HM', 'Îles Heard-et-MacDonald'), 
	array('340', 'HND', 'HN', 'Honduras'), 
	array('344', 'HKG', 'HK', 'Hong Kong'), 
	array('348', 'HUN', 'HU', 'Hongrie'), 
	array('833', 'IMN', 'IM', 'Île de Man'), 
	array('581', 'UMI', 'UM', 'Îles mineures éloignées des États-Unis'), 
	array('92', 'VGB', 'VG', 'Îles Vierges britanniques'), 
	array('850', 'VIR', 'VI', 'Îles Vierges des États-Unis'), 
	array('356', 'IND', 'IN', 'Inde'), 
	array('360', 'IDN', 'ID', 'Indonésie'), 
	array('364', 'IRN', 'IR', 'Iran'), 
	array('368', 'IRQ', 'IQ', 'Irak'), 
	array('372', 'IRL', 'IE', 'Irlande'), 
	array('352', 'ISL', 'IS', 'Islande'), 
	array('376', 'ISR', 'IL', 'Israël'), 
	array('380', 'ITA', 'IT', 'Italie'), 
	array('388', 'JAM', 'JM', 'Jamaïque'), 
	array('392', 'JPN', 'JP', 'Japon'), 
	array('832', 'JEY', 'JE', 'Jersey'), 
	array('400', 'JOR', 'JO', 'Jordanie'), 
	array('398', 'KAZ', 'KZ', 'Kazakhstan'), 
	array('404', 'KEN', 'KE', 'Kenya'), 
	array('417', 'KGZ', 'KG', 'Kirghizistan'), 
	array('296', 'KIR', 'KI', 'Kiribati'), 
	array('414', 'KWT', 'KW', 'Koweït'), 
	array('418', 'LAO', 'LA', 'Laos'), 
	array('426', 'LSO', 'LS', 'Lesotho'), 
	array('428', 'LVA', 'LV', 'Lettonie'), 
	array('422', 'LBN', 'LB', 'Liban'), 
	array('430', 'LBR', 'LR', 'Liberia'), 
	array('434', 'LBY', 'LY', 'Libye'), 
	array('438', 'LIE', 'LI', 'Liechtenstein'), 
	array('440', 'LTU', 'LT', 'Lituanie'), 
	array('442', 'LUX', 'LU', 'Luxembourg'), 
	array('446', 'MAC', 'MO', 'Macao'), 
	array('807', 'MKD', 'MK', 'Macédoine'), 
	array('450', 'MDG', 'MG', 'Madagascar'), 
	array('458', 'MYS', 'MY', 'Malaisie'), 
	array('454', 'MWI', 'MW', 'Malawi'), 
	array('462', 'MDV', 'MV', 'Maldives'), 
	array('466', 'MLI', 'ML', 'Mali'), 
	array('470', 'MLT', 'MT', 'Malte'), 
	array('580', 'MNP', 'MP', 'Îles Mariannes du Nord'), 
	array('504', 'MAR', 'MA', 'Maroc'), 
	array('584', 'MHL', 'MH', 'Marshall'), 
	array('474', 'MTQ', 'MQ', 'Martinique'), 
	array('480', 'MUS', 'MU', 'Maurice'), 
	array('478', 'MRT', 'MR', 'Mauritanie'), 
	array('175', 'MYT', 'YT', 'Mayotte'), 
	array('484', 'MEX', 'MX', 'Mexique'), 
	array('583', 'FSM', 'FM', 'Micronésie'), 
	array('498', 'MDA', 'MD', 'Moldavie'), 
	array('492', 'MCO', 'MC', 'Monaco'), 
	array('496', 'MNG', 'MN', 'Mongolie'), 
	array('499', 'MNE', 'ME', 'Monténégro'), 
	array('500', 'MSR', 'MS', 'Montserrat'), 
	array('508', 'MOZ', 'MZ', 'Mozambique'), 
	array('104', 'MMR', 'MM', 'Birmanie'), 
	array('516', 'NAM', 'NA', 'Namibie'), 
	array('520', 'NRU', 'NR', 'Nauru'), 
	array('524', 'NPL', 'NP', 'Népal'), 
	array('558', 'NIC', 'NI', 'Nicaragua'), 
	array('562', 'NER', 'NE', 'Niger'), 
	array('566', 'NGA', 'NG', 'Nigeria'), 
	array('570', 'NIU', 'NU', 'Niue'), 
	array('574', 'NFK', 'NF', 'Île Norfolk'), 
	array('578', 'NOR', 'NO', 'Norvège'), 
	array('540', 'NCL', 'NC', 'Nouvelle-Calédonie'), 
	array('554', 'NZL', 'NZ', 'Nouvelle-Zélande'), 
	array('86', 'IOT', 'IO', 'Territoire britannique de l\'océan Indien'), 
	array('512', 'OMN', 'OM', 'Oman'), 
	array('800', 'UGA', 'UG', 'Ouganda'), 
	array('860', 'UZB', 'UZ', 'Ouzbékistan'), 
	array('586', 'PAK', 'PK', 'Pakistan'), 
	array('585', 'PLW', 'PW', 'Palaos'), 
	array('275', 'PSE', 'PS', 'Autorité Palestinienne'), 
	array('591', 'PAN', 'PA', 'Panama'), 
	array('598', 'PNG', 'PG', 'Papouasie-Nouvelle-Guinée'), 
	array('600', 'PRY', 'PY', 'Paraguay'), 
	array('528', 'NLD', 'NL', 'Pays-Bas'), 
	array('604', 'PER', 'PE', 'Pérou'), 
	array('608', 'PHL', 'PH', 'Philippines'), 
	array('612', 'PCN', 'PN', 'Îles Pitcairn'), 
	array('616', 'POL', 'PL', 'Pologne'), 
	array('258', 'PYF', 'PF', 'Polynésie française'), 
	array('630', 'PRI', 'PR', 'Porto Rico'), 
	array('620', 'PRT', 'PT', 'Portugal'), 
	array('634', 'QAT', 'QA', 'Qatar'), 
	array('638', 'REU', 'RE', 'La Réunion'), 
	array('642', 'ROU', 'RO', 'Roumanie'), 
	array('826', 'GBR', 'GB', 'Royaume-Uni'), 
	array('643', 'RUS', 'RU', 'Russie'), 
	array('646', 'RWA', 'RW', 'Rwanda'), 
	array('732', 'ESH', 'EH', 'Sahara occidental'), 
	array('652', 'BLM', 'BL', 'Saint-Barthélemy'), 
	array('659', 'KNA', 'KN', 'Saint-Christophe-et-Niévès'), 
	array('674', 'SMR', 'SM', 'Saint-Marin'), 
	array('663', 'MAF', 'MF', 'Saint-Martin (Antilles françaises)'), 
	array('534', 'SXM', 'SX', 'Saint-Martin'), 
	array('666', 'SPM', 'PM', 'Saint-Pierre-et-Miquelon'), 
	array('336', 'VAT', 'VA', 'Saint-Siège (État de la Cité du Vatican)'), 
	array('670', 'VCT', 'VC', 'Saint-Vincent-et-les-Grenadines'), 
	array('654', 'SHN', 'SH', 'Sainte-Hélène', ' Ascension et Tristan da Cunha'), 
	array('662', 'LCA', 'LC', 'Sainte-Lucie'), 
	array('90', 'SLB', 'SB', 'Salomon'), 
	array('882', 'WSM', 'WS', 'Samoa'), 
	array('16', 'ASM', 'AS', 'Samoa américaines'), 
	array('678', 'STP', 'ST', 'Sao Tomé-et-Principe'), 
	array('686', 'SEN', 'SN', 'Sénégal'), 
	array('688', 'SRB', 'RS', 'Serbie'), 
	array('690', 'SYC', 'SC', 'Seychelles'), 
	array('694', 'SLE', 'SL', 'Sierra Leone'), 
	array('702', 'SGP', 'SG', 'Singapour'), 
	array('703', 'SVK', 'SK', 'Slovaquie'), 
	array('705', 'SVN', 'SI', 'Slovénie'), 
	array('706', 'SOM', 'SO', 'Somalie'), 
	array('729', 'SDN', 'SD', 'Soudan'), 
	array('728', 'SSD', 'SS', 'Soudan du Sud'), 
	array('144', 'LKA', 'LK', 'Sri Lanka'), 
	array('752', 'SWE', 'SE', 'Suède'), 
	array('756', 'CHE', 'CH', 'Suisse'), 
	array('740', 'SUR', 'SR', 'Suriname'), 
	array('744', 'SJM', 'SJ', 'Svalbard et Île Jan Mayen'), 
	array('748', 'SWZ', 'SZ', 'Swaziland'), 
	array('760', 'SYR', 'SY', 'Syrie'), 
	array('762', 'TJK', 'TJ', 'Tadjikistan'), 
	array('158', 'TWN', 'TW', 'Taïwan / (République de Chine (Taïwan))'), 
	array('834', 'TZA', 'TZ', 'Tanzanie'), 
	array('148', 'TCD', 'TD', 'Tchad'), 
	array('203', 'CZE', 'CZ', 'République tchèque'), 
	array('260', 'ATF', 'TF', 'Terres australes et antarctiques françaises'), 
	array('764', 'THA', 'TH', 'Thaïlande'), 
	array('626', 'TLS', 'TL', 'Timor oriental'), 
	array('768', 'TGO', 'TG', 'Togo'), 
	array('772', 'TKL', 'TK', 'Tokelau'), 
	array('776', 'TON', 'TO', 'Tonga'), 
	array('780', 'TTO', 'TT', 'Trinité-et-Tobago'), 
	array('788', 'TUN', 'TN', 'Tunisie'), 
	array('795', 'TKM', 'TM', 'Turkménistan'), 
	array('796', 'TCA', 'TC', 'Îles Turques-et-Caïques'), 
	array('792', 'TUR', 'TR', 'Turquie'), 
	array('798', 'TUV', 'TV', 'Tuvalu'), 
	array('804', 'UKR', 'UA', 'Ukraine'), 
	array('858', 'URY', 'UY', 'Uruguay'), 
	array('548', 'VUT', 'VU', 'Vanuatu'), 
	array('862', 'VEN', 'VE', 'Venezuela'), 
	array('704', 'VNM', 'VN', 'Viêt Nam'), 
	array('876', 'WLF', 'WF', 'Wallis-et-Futuna'), 
	array('887', 'YEM', 'YE', 'Yémen'), 
	array('894', 'ZMB', 'ZM', 'Zambie'), 
	array('716', 'ZWE', 'ZW', 'Zimbabwe')
	);
	
	/* Selection de pays */
	function country(){
		global $countryCode; // récupère variable du tableau qui est en global
		foreach ($countryCode as $col){
			$monpays = $col[3];
			$mesinitial = $col[1];
			$balisepays = '<option value="' . $mesinitial .'">' .$monpays. '</option>';
			echo $balisepays;
		}
	}
	/* Récupération de séléction de Pays*/
	foreach ($countryCode as $col){
		$monpays = $col[3];
		$mesinitial = $col[1];
		$submit = isset($_POST['submit']);
		if ($submit == true){
		$mycountry = $_POST['mycountry'];
			if ($mycountry == $mesinitial){
			 	$msg = $monpays;
			}
		} else {
			$msg ='';
		}
	}
	// $mylastname = $_POST['mylastname'];
	// 	$myfirstname = $_POST['myfirstname'];
	// 	$myemail = $_POST['myemail'];
	// 	$myphone = $_POST['myphone'];
	// 	$mysubject = $_POST['mysubject'];
	// 	$myimage = $_POST['myimage'];

	?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<form action="" method="POST" role="form">
			<legend>Form title</legend>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="lastname">Lastname *</label>
					<input type="text" name="mylastname" class="form-control" id="lastname" placeholder="Please enter your Lastname *">
				</div>
				<p><?php  ?></p>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="firstname">Firstname *</label>
					<input type="text" name="myfirstname" class="form-control" id="firstname" placeholder="Please enter a valid Firstname *">
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="country">Please select your Country *</label>
					<select name="mycountry" id="country">
						<?php  
							country();
						?>
					</select>
				</div>

				
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="mail">Email</label>
					<input type="email" name="myemail" class="form-control" id="mailss" placeholder="Please enter a valid Email adress *">
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="phone">Phone number *</label>
					<input type="tel" name="myphone" class="form-control" id="phone" placeholder="Please enter a valid Phone number *">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="form-group">
					<label for="subject">Subject *</label>
					<input type="text" name="mysubject" class="form-control" id="firstname" placeholder="Please enter a valid Firstname *">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="form-group">
					<label for="comment">Message *</label>
					<textarea class="form-control" rows="6" id="comment" placeholder="Please write your subject *"></textarea>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="form-group">
					<label for="image">Picture *</label>
					<input type="file" name="myimage" id="image">
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="form-group">
					<div class="">
						<label>Desired response format *</label>
					</div>
					<div class="">
						<input type="radio" id="html" name="contact" value="email">
						<label for="html">HTML</label>

						<input type="radio" id="texte" name="contact" value="texte">
						<label for="texte">Texte</label>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<button type="submit" name="submit" class="btn btn-primary">Send Message</button>
			</div>
		</form>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
>>>>>>> Mery
