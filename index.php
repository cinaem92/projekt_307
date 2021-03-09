<!-- Builder einbinden -->
<?php
include_once './res/builder.php';
?>

<?php
$_SERVER['REQUEST_URI'];
$temp = trim($_SERVER['REQUEST_URI'], '/');
$url = explode('/', $temp);
// var_dump($url);

if (!empty($url[1])) {
	$url[1] = strtolower($url[1]);

	switch ($url[1]) {
		case 'home':
			build('home.php');
			break;
		case 'aktuellehunde':
			build('aktuellehunde.php');
			break;
		case 'vermittlung':
			build('vermittlung.php');
			break;
		case 'neuerhund':
			// if(!empty($_SESSION['userdata']['login']) && $_SESSION['userdata']['login']) {
				build('neuerhund.php');
				break;
			// }
		case 'ueberuns':
			build('ueberuns.php');
			break;
		case 'galerie':
			build('galerie.php');
			break;
		case 'impressum':
			build('impressum.php');
			break;
		case 'bewerbung':
			build('bewerbung.php');
			break;
		case 'login':
			build('login.php');
			break;
		case 'registrierung':
			build('registrierung.php');
			break;
		case 'anfrage':
			build('anfrage.php');
			break;
		case 'erfolgreich':
			build('erfolgreich.php');
			break;
		case 'validateregdata':
			build('validateRegData.php');
			break;
		case 'validatelogindata':
			build('validatelogindata.php');
			break;
		default:
			build('404.php');
			break;
	}
} else {
	build('home.php');
}

?>