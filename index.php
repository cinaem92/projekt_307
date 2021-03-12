<!-- Builder einbinden -->
<?php
session_start();
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
		case 'hundneu':
			if (!empty($_SESSION['loggedin'])) {
				build('hundneu.php');
				break;
			} else {
				build('404.php');
				break;
			}
		case 'hundbearbeiten':
			if (!empty($_SESSION['loggedin'])) {
				build('hundbearbeiten.php');
				break;
			} else {
				build('404.php');
				break;
			}
		case 'hundloeschen':
			if (!empty($_SESSION['loggedin'])) {
				build('hundloeschen.php');
				break;
			} else {
				build('404.php');
				break;
			}
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
		case 'loginuebersicht':
			build('loginuebersicht.php');
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
			build('validateregdata.php');
			break;
		case 'validatelogindata':
			build('validatelogindata.php');
			break;
		case 'impressum':
			build('impressum.php');
			break;
		case 'logout':
			build('logout.php');
			break;
		case 'validatedogdata':
			build('validatedogdata.php');
			break;
		default:
			build('404.php');
			break;
	}
} else {
	build('home.php');
}

?>