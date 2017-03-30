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
<!DOCTYPE html>
<?php
	//ini_set('display_errors', 1);
    //error_reporting(E_ALL|E_STRICT);
	include ('data.php'); 
	include ('language.php'); 
?>

<html lang="<?php echo $lang; ?>">
    <head>
		<title><?php echo $lang['PAGE_TITLE_302']; ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
		<link href="<?php echo $mysite; ?>/errors/css/302.css"              rel="stylesheet">
		<link href="<?php echo $mysite; ?>/errors/css/errors.css"           rel="stylesheet">
		<link href="<?php echo $mysite; ?>/errors/css/font-awesome.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo $mysite; ?>/errors/css/bootstrap.min.css"    rel="stylesheet">
		<link href="<?php echo $mysite; ?>/errors/img/ico/favicon.gif"      rel="shortcut icon" >
        <link href="<?php echo $mysite; ?>/errors/img/ico/144.gif"          rel="apple-touch-icon-precomposed" sizes="144x144" >
        <link href="<?php echo $mysite; ?>/errors/img/ico/114.gif"          rel="apple-touch-icon-precomposed" sizes="114x114" >
        <link href="<?php echo $mysite; ?>/errors/img/ico/72.gif"           rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="<?php echo $mysite; ?>/errors/img/ico/57.gif"           rel="apple-touch-icon-precomposed" sizes="57x57"  >
	</head>
    <body class="bk-302">
	    
		<?php require "buttons.php" ?>
		
		<div class="container">	
			<img class="poster" src="<?php echo $mysite; ?>/errors/img/302.gif">
		</div>
		
		<div class="menu">
		    <div class="resolve">
				<br><br><br><hr>
				<h2><?php echo $lang['HEADER_TITLE_302']; ?></h2>
				<hr><br>
				<h3><?php echo $lang['CONCERN_3']; ?>:</h3>
				<br>
				<p><?php echo $lang['MOTIVE_1_302']; ?></p>
				<br>
				<p><?php echo $lang['MOTIVE_2_302']; ?></p>
				<br>
				<p><?php echo $lang['MOTIVE_3_302']; ?></p>
				<br>
				<p><a href="<?php echo $email_f . $email_a; ?>"><?php echo $lang['CONTACT_REQUEST']; ?></a></p>
			</div>
		</div>
		
		<div class="language">
		    <div class="resolve">
				<br><br><br><hr>
				<h2><?php echo $lang['SELECT_LANGUAGE']; ?></h2>
				<hr><br>
				<div>
					<form name="ch_lang" action="<?php echo $mysite; ?>/errors/302.php" method="get">
						<select onchange="ch_lang.submit()" name="lang" id="custom-lang" >
							<option value=""><?php echo $lang['SELECT']; ?></option>
							<?php echo $option_lang; ?>
						</select>
					</form>
				</div>
			</div>
		</div>
		
		<div class="cont-foot">
			<footer class="front-foot footer">
				<p class="p-cpr"><a href="<?php echo $cpr_l; ?>"><?php echo $cpr_n; ?></a></p>
			</footer>
		</div>
		
	    <script type="text/javascript" src="<?php echo $mysite; ?>/errors/js/jquery.js"></script>	
		<script type="text/javascript" src="<?php echo $mysite; ?>/errors/js/bootstrap.min.js"></script>	
		<script type="text/javascript" src="<?php echo $mysite; ?>/errors/js/errors.js"></script>		
	</body>
</html>