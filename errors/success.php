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
	//ini_set('display_errors', 1);
    //error_reporting(E_ALL|E_STRICT); 
	include 'data.php';  
?>

<div id="conf_success" style="display:block;">
	<i class=" fa fa-close" style="float: right; font-size: 30px;cursor: pointer;"onmouseup="document.getElementById('conf_success').style.display = 'none';"></i>
	<h1 style="color: #59b300;">Configurated!</h1><br>
	<h3>Current configuration:</h3>
	<p><i class="check fa fa-check"></i> Site Home directory: <?php echo $mysite; ?></p><br>
	<p><i class="check fa fa-check"></i> Form path: <?php echo $email_f; ?> </p><br>
	<p><i class="check fa fa-check"></i> Email address: <?php echo $email_a; ?></p><br>
	<button style="background:transparent; border:0px; font-size:25px;" class="fa fa-refresh" type="submit" name="submit_links" onclick="loadDoc()"></button>
</div>