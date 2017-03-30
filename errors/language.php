<!------------------------------------------------------------------------------\
	|	  @ Title    : One-stop -> Custom HTTP status codes                     |
	|     @ Copyright: (C) 2017 -> Francesco Sorrnetino                         |
	|     @ Contact  :    Email -> francesco@sorrentino.ga                      |
	|                                                                           |
	|      This program is free software: you can redistribute it and/or modify |
	|      it under the terms of the GNU General Public License as published by |
	|      the Free Software Foundation, either version 3 of the License, or    |
	|      (at your option) any later version.                                  |
	|                                                                           |
	|      This program is distributed in the hope that it will be useful,      |
	|      but WITHOUT ANY WARRANTY; without even the implied warranty of       |
	|      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        |
	|      GNU General Public License for more details.                         |
	|                                                                           |
	|      You should have received a copy of the GNU General Public License    |
	|      along with this program.  If not, see <http://www.gnu.org/licenses/>.|
----\--------------------------------------------------------------------------->
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
	$cpr_l  = 'https://sorrentino.ga/';
	$cpr_n  = '#~: with <i class="fa fa-heart"></i> by Francesco Sorrentino';
	?>