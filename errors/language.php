
<?php
    /*===================*\
	|                     |
	|      LANGUAGE       |
	|                     |
	\*===================*/
	
	session_start();
	header('Cache-control: private'); // IE 6 FIX
	
	if(isSet($_GET['lang']))
	{
		$lang = $_GET['lang'];
		
		//\\===\ register the session and set the cookie /===//\\
		$_SESSION['lang'] = $lang;
		
		setcookie("lang", $lang, time() + (3600 * 24 * 30));
	}
	else if(isSet($_SESSION['lang']))
	{
		$lang = $_SESSION['lang'];
	}
	else if(isSet($_COOKIE['lang']))
	{
		$lang = $_COOKIE['lang'];
	}
	else
	{
		$lang = 'en';
	}
	
	switch ($lang) {
		case 'en':
		$lang_file = 'en.php';
		break;
		
		case 'it':
		$lang_file = 'it.php';
		break;
		
		case 'fr':
		$lang_file = 'fr.php';
		break;
		
		case 'es':
		$lang_file = 'es.php';
		break;
		
		case 'jp':
		$lang_file = 'jp.php';
		break;
		
	//	case 'SOME LANGUAGE':
	//	$lang_file = 'jp.php';            <------ add next language here
	//	break;
		
		default:
		$lang_file = 'en.php';
		
	}
	
	include_once 'languages/'.$lang_file;
	
	$option_lang = '
	<option value="en">English</option>
	<option value="it">Italiano</option>
	<!-- <option value="fr">Francais</option> --> <!-- Coming soon -->
	<!-- <option value="es">Espanol</option> -->  <!-- Coming soon -->
	<!-- <option value="jp">日本語</option> -->   <!-- Coming soon -->
	
	<!-- <option value="SOME LANGUAGE">SOME LANGUAGE</option> -->    <!-- add next language here -->
	
	';
	

	
	//\\===\ CPR /===//\\===\Do NOT Remove/===//\\
	$cpr_l  = 'https://github.com/sorrentinof/one_stop';
	$cpr_n  = 'One-Stop';
	?>