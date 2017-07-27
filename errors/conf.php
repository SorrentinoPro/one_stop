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
	
	
	/*///*===================*\\\*\==================================================================================================================>  
	    |                     |
        | Configuration Links |
	    |                     |
    \*\\\*===================*///*/==================================================================================================================>
	
	if (isset($_POST['submit_links'])) {
		
		$myfile = fopen("data.php", "w") 
		or die('');
		
		$txt = '<?php ';
		fwrite($myfile, $txt);
		
		if(isset($_POST['SSL_v'])){
			$SSL_v = $_POST['SSL_v'];
			switch ($SSL_v) {
				case 'http':
				$txt = '$mysite = "http://'.$_POST['url'].'";';
				fwrite($myfile, $txt);	
				break;
				case 'https':
				$txt = '$mysite = "https://'.$_POST['url'].'";';
				fwrite($myfile, $txt);	
				break;
				default:
				
				
			}
		}
		if(isset($_POST['Mail_x']) && isset($_POST['SSL_v']) ){
			$SSL_v = $_POST['SSL_v']; // "", "http", "https"
			$Mail_x = $_POST['Mail_x']; // "YES" , "NO"
			
			
			if( ($SSL_v == "http") && ($Mail_x == "Contact_Form" ) )
			{
				$txt = '$email_f = "http://'.$_POST['mail_f'].'";';
				fwrite($myfile, $txt);
				$txt = '$email_a = "";';
				fwrite($myfile, $txt); 
			}
			
			if( ($SSL_v == "https") && ($Mail_x == "Contact_Form" ) )
			{
				$txt = '$email_f = "https://'.$_POST['mail_f'].'";';
				fwrite($myfile, $txt);
				$txt = '$email_a = "";';
				fwrite($myfile, $txt); 
			}
			
			if( ($SSL_v == "http") && ($Mail_x == "Email_Address" ) )
			{
				$txt = '$email_a = "mailto:'.$_POST['mail_a'].'?Subject=Broken%20link";';
				fwrite($myfile, $txt);
				$txt = '$email_f = "";';
				fwrite($myfile, $txt); 
			}
			
			if( ($SSL_v == "https") && ($Mail_x == "Email_Address" ) )
			{
				$txt = '$email_a = "mailto:'.$_POST['mail_a'].'?Subject=Broken%20link";';
				fwrite($myfile, $txt);
				$txt = '$email_f = "";';
				fwrite($myfile, $txt); 
			}
			
		}
		
		$txt ='?> ';
		fwrite($myfile, $txt);	
		
		fclose($myfile);
		
	}
	
	/*///*===================*\\\*\==================================================================================================================>  
	    |                     |
        |       Upload        |
	    |                     |
    \*\\\*===================*///*/==================================================================================================================>
	
	//\\=====\ Set the upload target directory /=====//\\
	$target_img_path   = "img/";
	$target_icon_path  = "img/ico/";
	$target_prel_path  = "img/ico/";
	
	//\\=====\ Preloader Related variables /=====//\\
    $img_prel          = 'img_prel';
    $div_img_prel      = 'div_img_prel';
    $Current_prel      = $_FILES[$img_prel]['name'];
	$new_prel          = 'preloader.gif';
	
	//\\=====\ FavIcon Related variables /=====//\\
    $img_icon          = 'img_icon';
    $div_img_icon      = 'div_img_icon';
    $Current_icon      = $_FILES[$img_icon]['name'];
	$new_icon          = 'favicon.gif';
	
	//\\=====\ Apple-touch-icon-precomposed size 144x Related variables /=====//\\
    $img_icon_144      = 'img_icon_144';
    $div_img_icon_144  = 'div_img_icon_144';
    $Current_icon_144  = $_FILES[$img_icon_144]['name'];
	$new_icon_144      = '144.gif';
	
	//\\=====\ Apple-touch-icon-precomposed size 114x Related variables /=====//\\
    $img_icon_114      = 'img_icon_114';
    $div_img_icon_114  = 'div_img_icon_114';
    $Current_icon_114  = $_FILES[$img_icon_114]['name'];
	$new_icon_114      = '114.gif';
	
	//\\=====\ Apple-touch-icon-precomposed size 72x Related variables /=====//\\
    $img_icon_72       = 'img_icon_72';
    $div_img_icon_72   = 'div_img_icon_72';
    $Current_icon_72   = $_FILES[$img_icon_72]['name'];
	$new_icon_72       = '72.gif';
	
	//\\=====\ Apple-touch-icon-precomposed size 57x Related variables /=====//\\
    $img_icon_57       = 'img_icon_57';
    $div_img_icon_57   = 'div_img_icon_57';
    $Current_icon_57   = $_FILES[$img_icon_57]['name'];
	$new_icon_57       = '57.gif';
	
	
	//\\=====\ 100 Related variables /=====//\\
    $img_100           = 'img_100';
    $div_img_100       = 'div_img_100';
    $Current_100       = $_FILES[$img_100]['name'];
	$new_100           = '100.gif';
	
	//\\=====\ 101 Related variables /=====//\\
    $img_101           = 'img_101';
    $div_img_101       = 'div_img_101';
    $Current_101       = $_FILES[$img_101]['name'];
	$new_101           = '101.gif';

	//\\=====\ 200 Related variables /=====//\\
    $img_200           = 'img_200';
    $div_img_200       = 'div_img_200';
    $Current_200       = $_FILES[$img_200]['name'];
	$new_200           = '200.gif';

	//\\=====\ 201 Related variables /=====//\\
    $img_201           = 'img_201';
    $div_img_201       = 'div_img_201';
    $Current_201       = $_FILES[$img_201]['name'];
	$new_201           = '201.gif';

	//\\=====\ 202 Related variables /=====//\\
    $img_202           = 'img_202';
    $div_img_202       = 'div_img_202';
    $Current_202       = $_FILES[$img_202]['name'];
	$new_202           = '202.gif';

	//\\=====\ 203 Related variables /=====//\\
    $img_203           = 'img_203';
    $div_img_203       = 'div_img_203';
    $Current_203       = $_FILES[$img_203]['name'];
	$new_203           = '203.gif';

	//\\=====\ 204 Related variables /=====//\\
    $img_204           = 'img_204';
    $div_img_204       = 'div_img_204';
    $Current_204       = $_FILES[$img_204]['name'];
	$new_204           = '204.gif';
	
	//\\=====\ 205 Related variables /=====//\\
    $img_205           = 'img_205';
    $div_img_205       = 'div_img_205';
    $Current_205       = $_FILES[$img_205]['name'];
	$new_205           = '205.gif';
	
	//\\=====\ 206 Related variables /=====//\\
    $img_206           = 'img_206';
    $div_img_206       = 'div_img_206';
    $Current_206       = $_FILES[$img_206]['name'];
	$new_206           = '206.gif';
	
	//\\=====\ 300 Related variables /=====//\\
    $img_300           = 'img_300';
    $div_img_300       = 'div_img_300';
    $Current_300       = $_FILES[$img_300]['name'];
	$new_300           = '300.gif';
	
	//\\=====\ 301 Related variables /=====//\\
    $img_301           = 'img_301';
    $div_img_301       = 'div_img_301';
    $Current_301       = $_FILES[$img_301]['name'];
	$new_301           = '301.gif';
	
	//\\=====\ 302 Related variables /=====//\\
    $img_302           = 'img_302';
    $div_img_302       = 'div_img_302';
    $Current_302       = $_FILES[$img_302]['name'];
	$new_302           = '302.gif';
	
	//\\=====\ 303 Related variables /=====//\\
    $img_303           = 'img_303';
    $div_img_303       = 'div_img_303';
    $Current_303       = $_FILES[$img_303]['name'];
	$new_303           = '303.gif';

	//\\=====\ 304 Related variables /=====//\\
    $img_304           = 'img_304';
    $div_img_304       = 'div_img_304';
    $Current_304       = $_FILES[$img_304]['name'];
	$new_304           = '304.gif';

	//\\=====\ 305 Related variables /=====//\\
    $img_305           = 'img_305';
    $div_img_305       = 'div_img_305';
    $Current_305       = $_FILES[$img_305]['name'];
	$new_305           = '305.gif';

	//\\=====\ 307 Related variables /=====//\\
    $img_307           = 'img_307';
    $div_img_307       = 'div_img_307';
    $Current_307       = $_FILES[$img_307]['name'];
	$new_307           = '307.gif';

	//\\=====\ 400 Related variables /=====//\\
    $img_400           = 'img_400';
    $div_img_400       = 'div_img_400';
    $Current_400       = $_FILES[$img_400]['name'];
	$new_400           = '400.gif';
	
	//\\=====\ 401 Related variables /=====//\\
    $img_401           = 'img_401';
    $div_img_401       = 'div_img_401';
    $Current_401       = $_FILES[$img_401]['name'];
	$new_401           = '401.gif';
	
	//\\=====\ 402 Related variables /=====//\\
    $img_402           = 'img_402';
    $div_img_402       = 'div_img_402';
    $Current_402       = $_FILES[$img_402]['name'];
	$new_402           = '402.gif';
	
	//\\=====\ 403 Related variables /=====//\\
    $img_403           = 'img_403';
    $div_img_403       = 'div_img_403';
    $Current_403       = $_FILES[$img_403]['name'];
	$new_403           = '403.gif';
	
	//\\=====\ 404 Related variables /=====//\\
    $img_404           = 'img_404';
    $div_img_404       = 'div_img_404';
    $Current_404       = $_FILES[$img_404]['name'];
	$new_404           = '404.gif';
	
	//\\=====\ 405 Related variables /=====//\\
    $img_405           = 'img_405';
    $div_img_405       = 'div_img_405';
    $Current_405       = $_FILES[$img_405]['name'];
	$new_405           = '405.gif';

	//\\=====\ 406 Related variables /=====//\\
    $img_406           = 'img_406';
    $div_img_406       = 'div_img_406';
    $Current_406       = $_FILES[$img_406]['name'];
	$new_406           = '406.gif';

	//\\=====\ 407 Related variables /=====//\\
    $img_407           = 'img_407';
    $div_img_407       = 'div_img_407';
    $Current_407       = $_FILES[$img_407]['name'];
	$new_407           = '407.gif';
	
	//\\=====\ 408 Related variables /=====//\\
    $img_408           = 'img_408';
    $div_img_408       = 'div_img_408';
    $Current_408       = $_FILES[$img_408]['name'];
	$new_408           = '408.gif';
	
	//\\=====\ 409 Related variables /=====//\\
    $img_409           = 'img_409';
    $div_img_409       = 'div_img_409';
    $Current_409       = $_FILES[$img_409]['name'];
	$new_409           = '409.gif';

	//\\=====\ 410 Related variables /=====//\\
    $img_410           = 'img_410';
    $div_img_410       = 'div_img_410';
    $Current_410       = $_FILES[$img_410]['name'];
	$new_410           = '410.gif';
	
	//\\=====\ 411 Related variables /=====//\\
    $img_411           = 'img_411';
    $div_img_411       = 'div_img_411';
    $Current_411       = $_FILES[$img_411]['name'];
	$new_411           = '411.gif';

	//\\=====\ 412 Related variables /=====//\\
    $img_412           = 'img_412';
    $div_img_412       = 'div_img_412';
    $Current_412       = $_FILES[$img_412]['name'];
	$new_412           = '412.gif';

	//\\=====\ 413 Related variables /=====//\\
    $img_413           = 'img_413';
    $div_img_413       = 'div_img_413';
    $Current_413       = $_FILES[$img_413]['name'];
	$new_413           = '413.gif';

	//\\=====\ 414 Related variables /=====//\\
    $img_414           = 'img_414';
    $div_img_414       = 'div_img_414';
    $Current_414       = $_FILES[$img_414]['name'];
	$new_414           = '414.gif';

	//\\=====\ 415 Related variables /=====//\\
    $img_415           = 'img_415';
    $div_img_415       = 'div_img_415';
    $Current_415       = $_FILES[$img_415]['name'];
	$new_415           = '415.gif';

	//\\=====\ 416 Related variables /=====//\\
    $img_416           = 'img_416';
    $div_img_416       = 'div_img_416';
    $Current_416       = $_FILES[$img_416]['name'];
	$new_416           = '416.gif';

	//\\=====\ 417 Related variables /=====//\\
    $img_417           = 'img_417';
    $div_img_417       = 'div_img_417';
    $Current_417       = $_FILES[$img_417]['name'];
	$new_417           = '417.gif';
	
	//\\=====\ 500 Related variables /=====//\\
    $img_500           = 'img_500';
    $div_img_500       = 'div_img_500';
    $Current_500       = $_FILES[$img_500]['name'];
	$new_500           = '500.gif';
	
	//\\=====\ 501 Related variables /=====//\\
    $img_501           = 'img_501';
    $div_img_501       = 'div_img_501';
    $Current_501       = $_FILES[$img_501]['name'];
	$new_501           = '501.gif';

	//\\=====\ 502 Related variables /=====//\\
    $img_502           = 'img_502';
    $div_img_502       = 'div_img_502';
    $Current_502       = $_FILES[$img_502]['name'];
	$new_502           = '502.gif';

	//\\=====\ 503 Related variables /=====//\\
    $img_503           = 'img_503';
    $div_img_503       = 'div_img_503';
    $Current_503       = $_FILES[$img_503]['name'];
	$new_503           = '503.gif';

	//\\=====\ 504 Related variables /=====//\\
    $img_504           = 'img_504';
    $div_img_504       = 'div_img_504';
    $Current_504       = $_FILES[$img_504]['name'];
	$new_504           = '504.gif';

	//\\=====\ 505 Related variables /=====//\\
    $img_505           = 'img_505';
    $div_img_505       = 'div_img_505';
    $Current_505       = $_FILES[$img_505]['name'];
	$new_505           = '505.gif';

	/*///*===================*\\\*\==================================================================================================================>  
	    |                     |
        |       ICONS         |
	    |                     |
    \*\\\*===================*///*/==================================================================================================================>
	
	//\\==\ Check if $Current_prel  is empty /==//\\
    if($Current_prel  != "") {
		$FileType = $_FILES[$img_prel]['type'];
		$FileExtension = strtolower(substr($Current_prel ,strrpos($Current_prel ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerrorprel').style.display = 'table';</script>";
		} 
		else {
			// Check file proportions
			$image_info = getimagesize($_FILES[$img_prel]["tmp_name"]);
			$image_width = $image_info[0];
			$image_height = $image_info[1];
			
			if ($image_width >= 300 && $image_height >= 300) {
				echo "<script type='text/javascript'>parent.document.getElementById('pixelerrorprel').style.display = 'table';</script>";
			}
			//\\==\ If is ok Rename $Current_prel with $new_prel on Upload /==//\\
			else {
				$FileTemp = $_FILES[$img_prel]['tmp_name'];
				$FileLocation = $target_prel_path.basename($new_prel);
				// Finally Upload
				if(move_uploaded_file($FileTemp,$FileLocation)) {
					// On successful upload send a message to corresponding div_img_prel from which the file came from
					echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_prel."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_prel."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_prel." from </b> <i>(".$FileType.")</i></font>';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('typeerrorprel').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('pixelerrorprel').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'none';</script>";
				} 
				else {
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'block';</script>";
				}
			}
		}
	}
	
	
	//\\==\ Check if $Current_icon  is empty /==//\\
    if($Current_icon  != "") {
		$FileType = $_FILES[$img_icon]['type'];
		$FileExtension = strtolower(substr($Current_icon ,strrpos($Current_icon ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon').style.display = 'table';</script>";
		} 
		else {
			// Check file proportions
			$image_info = getimagesize($_FILES[$img_icon]["tmp_name"]);
			$image_width = $image_info[0];
			$image_height = $image_info[1];
			
			if ($image_width != 32 && $image_height != 32) {
				echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon').style.display = 'table';</script>";
			}
			//\\==\ If is ok Rename $Current_206 with $new_icon on Upload /==//\\
			else {
				$FileTemp = $_FILES[$img_icon]['tmp_name'];
				$FileLocation = $target_icon_path.basename($new_icon);
				// Finally Upload
				if(move_uploaded_file($FileTemp,$FileLocation)) {
					// On successful upload send a message to corresponding div_img_icon from which the file came from
					echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_icon."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_icon."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_icon." from </b> <i>(".$FileType.")</i></font>';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'none';</script>";
				} 
				else {
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'block';</script>";
				}
			}
		}
	}
	
	//\\==\ Check if $Current_icon_57  is empty /==//\\
    if($Current_icon_57  != "") {
		$FileType = $_FILES[$img_icon_57]['type'];
		$FileExtension = strtolower(substr($Current_icon_57 ,strrpos($Current_icon_57 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon').style.display = 'table';</script>";
		} 
		else {
			// Check file proportions
			$image_info = getimagesize($_FILES[$img_icon_57]["tmp_name"]);
			$image_width = $image_info[0];
			$image_height = $image_info[1];
			
			if ($image_width != 57 && $image_height != 57) {
				echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon_57').style.display = 'table';</script>";
			}
			//\\==\ If is ok Rename $Current_icon_57 with $new_icon_57 on Upload /==//\\
			else {
				$FileTemp = $_FILES[$img_icon_57]['tmp_name'];
				$FileLocation = $target_icon_path.basename($new_icon_57);
				// Finally Upload
				if(move_uploaded_file($FileTemp,$FileLocation)) {
					// On successful upload send a message to corresponding div_img_icon_57 from which the file came from
					echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_icon_57."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_icon_57."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_icon_57." from </b> <i>(".$FileType.")</i></font>';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon_57').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon_57').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'none';</script>";
				} 
				else {
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'block';</script>";
				}
			}
		}
	}
	
	//\\==\ Check if $Current_icon_72  is empty /==//\\
    if($Current_icon_72  != "") {
		$FileType = $_FILES[$img_icon_72]['type'];
		$FileExtension = strtolower(substr($Current_icon_72 ,strrpos($Current_icon_72 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon').style.display = 'table';</script>";
		} 
		else {
			// Check file proportions
			$image_info = getimagesize($_FILES[$img_icon_72]["tmp_name"]);
			$image_width = $image_info[0];
			$image_height = $image_info[1];
			
			if ($image_width != 72 && $image_height != 72) {
				echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon_72').style.display = 'table';</script>";
			}
			//\\==\ If is ok Rename $Current_icon_72 with $new_icon_72 on Upload /==//\\
			else {
				$FileTemp = $_FILES[$img_icon_72]['tmp_name'];
				$FileLocation = $target_icon_path.basename($new_icon_72);
				// Finally Upload
				if(move_uploaded_file($FileTemp,$FileLocation)) {
					// On successful upload send a message to corresponding div_img_icon_72 from which the file came from
					echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_icon_72."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_icon_72."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_icon_72." from </b> <i>(".$FileType.")</i></font>';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon_72').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon_72').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'none';</script>";
				} 
				else {
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'block';</script>";
				}
			}
		}
	}
	
	//\\==\ Check if $Current_icon_114  is empty /==//\\
    if($Current_icon_114  != "") {
		$FileType = $_FILES[$img_icon_114]['type'];
		$FileExtension = strtolower(substr($Current_icon_114 ,strrpos($Current_icon_114 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon').style.display = 'table';</script>";
		} 
		else {
			// Check file proportions
			$image_info = getimagesize($_FILES[$img_icon_114]["tmp_name"]);
			$image_width = $image_info[0];
			$image_height = $image_info[1];
			
			if ($image_width != 114 && $image_height != 114) {
				echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon_114').style.display = 'table';</script>";
			}
			//\\==\ If is ok Rename $Current_icon_114 with $new_icon_114 on Upload /==//\\
			else {
				$FileTemp = $_FILES[$img_icon_114]['tmp_name'];
				$FileLocation = $target_icon_path.basename($new_icon_114);
				// Finally Upload
				if(move_uploaded_file($FileTemp,$FileLocation)) {
					// On successful upload send a message to corresponding div_img_icon_114 from which the file came from
					echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_icon_114."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_icon_114."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_icon_114." from </b> <i>(".$FileType.")</i></font>';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon_114').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon_114').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'none';</script>";
				} 
				else {
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'block';</script>";
				}
			}
		}
	}
	
	//\\==\ Check if $Current_icon_144  is empty /==//\\
    if($Current_icon_144  != "") {
		$FileType = $_FILES[$img_icon_144]['type'];
		$FileExtension = strtolower(substr($Current_icon_144 ,strrpos($Current_icon_144 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon').style.display = 'table';</script>";
		} 
		else {
			// Check file proportions
			$image_info = getimagesize($_FILES[$img_icon_144]["tmp_name"]);
			$image_width = $image_info[0];
			$image_height = $image_info[1];
			
			if ($image_width != 144 && $image_height != 144) {
				echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon_144').style.display = 'table';</script>";
			}
			//\\==\ If is ok Rename $Current_icon_144 with $new_icon_144 on Upload /==//\\
			else {
				$FileTemp = $_FILES[$img_icon_144]['tmp_name'];
				$FileLocation = $target_icon_path.basename($new_icon_144);
				// Finally Upload
				if(move_uploaded_file($FileTemp,$FileLocation)) {
					// On successful upload send a message to corresponding div_img_icon_144 from which the file came from
					echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_icon_144."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_icon_144."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_icon_144." from </b> <i>(".$FileType.")</i></font>';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('typeerroricon_144').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('pixelerroricon_144').style.display = 'none';</script>";
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'none';</script>";
				} 
				else {
					echo "<script type='text/javascript'>parent.document.getElementById('write_error_ico').style.display = 'block';</script>";
				}
			}
		}
	}
	
	
	
	/*///*===================*\\\*\==================================================================================================================>  
	    |                     |
        |       Pages         |
	    |                     |
    \*\\\*===================*///*/==================================================================================================================>	
	
	
	//\\==\ Check if $Current_100  is empty /==//\\
    if($Current_100  != "") {
		$FileType = $_FILES[$img_100]['type'];
		$FileExtension = strtolower(substr($Current_100 ,strrpos($Current_100 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror100').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_100 with $new_100 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_100]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_100);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_100 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_100."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_100."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_100." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror100').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_101  is empty /==//\\
    if($Current_101  != "") {
		$FileType = $_FILES[$img_101]['type'];
		$FileExtension = strtolower(substr($Current_101 ,strrpos($Current_101 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror101').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_101 with $new_101 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_101]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_101);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_101 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_101."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_101."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_101." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror101').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_200  is empty /==//\\
    if($Current_200  != "") {
		$FileType = $_FILES[$img_200]['type'];
		$FileExtension = strtolower(substr($Current_200 ,strrpos($Current_200 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror200').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_200 with $new_200 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_200]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_200);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_200 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_200."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_200."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_200." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror200').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_201  is empty /==//\\
    if($Current_201  != "") {
		$FileType = $_FILES[$img_201]['type'];
		$FileExtension = strtolower(substr($Current_201 ,strrpos($Current_201 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror201').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_201 with $new_201 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_201]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_201);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_201 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_201."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_201."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_201." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror201').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_202  is empty /==//\\
    if($Current_202  != "") {
		$FileType = $_FILES[$img_202]['type'];
		$FileExtension = strtolower(substr($Current_202 ,strrpos($Current_202 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror202').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_202 with $new_202 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_202]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_202);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_202 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_202."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_202."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_202." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror202').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_203  is empty /==//\\
    if($Current_203  != "") {
		$FileType = $_FILES[$img_203]['type'];
		$FileExtension = strtolower(substr($Current_203 ,strrpos($Current_203 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror203').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_203 with $new_203 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_203]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_203);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_203 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_203."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_203."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_203." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror203').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_204  is empty /==//\\
    if($Current_204  != "") {
		$FileType = $_FILES[$img_204]['type'];
		$FileExtension = strtolower(substr($Current_204 ,strrpos($Current_204 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror204').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_204 with $new_204 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_204]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_204);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_204 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_204."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_204."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_204." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror204').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_205  is empty /==//\\
    if($Current_205  != "") {
		$FileType = $_FILES[$img_205]['type'];
		$FileExtension = strtolower(substr($Current_205 ,strrpos($Current_205 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror205').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_205 with $new_205 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_205]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_205);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_205 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_205."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_205."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_205." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror205').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_206  is empty /==//\\
    if($Current_206  != "") {
		$FileType = $_FILES[$img_206]['type'];
		$FileExtension = strtolower(substr($Current_206 ,strrpos($Current_206 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror206').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_206 with $new_206 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_206]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_206);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_206 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_206."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_206."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_206." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror206').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_300  is empty /==//\\
    if($Current_300  != "") {
		$FileType = $_FILES[$img_300]['type'];
		$FileExtension = strtolower(substr($Current_300 ,strrpos($Current_300 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror300').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_300 with $new_300 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_300]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_300);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_300 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_300."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_300."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_300." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror300').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_301  is empty /==//\\
    if($Current_301  != "") {
		$FileType = $_FILES[$img_301]['type'];
		$FileExtension = strtolower(substr($Current_301 ,strrpos($Current_301 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror301').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_301 with $new_301 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_301]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_301);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_301 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_301."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_301."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_301." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror301').style.display = 'none';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_302  is empty /==//\\
    if($Current_302  != "") {
		$FileType = $_FILES[$img_302]['type'];
		$FileExtension = strtolower(substr($Current_302 ,strrpos($Current_302 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror302').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_302 with $new_302 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_302]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_302);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_302 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_302."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_302."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_302." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror302').style.display = 'none';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_303  is empty /==//\\
    if($Current_303  != "") {
		$FileType = $_FILES[$img_303]['type'];
		$FileExtension = strtolower(substr($Current_303 ,strrpos($Current_303 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror303').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_303 with $new_303 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_303]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_303);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_303 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_303."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_303."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_303." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror303').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_304  is empty /==//\\
    if($Current_304  != "") {
		$FileType = $_FILES[$img_304]['type'];
		$FileExtension = strtolower(substr($Current_304 ,strrpos($Current_304 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror304').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_304 with $new_304 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_304]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_304);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_304 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_304."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_304."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_304." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror304').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_305  is empty /==//\\
    if($Current_305  != "") {
		$FileType = $_FILES[$img_305]['type'];
		$FileExtension = strtolower(substr($Current_305 ,strrpos($Current_305 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror305').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_305 with $new_305 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_305]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_305);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_305 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_305."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_305."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_305." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror305').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_307  is empty /==//\\
    if($Current_307  != "") {
		$FileType = $_FILES[$img_307]['type'];
		$FileExtension = strtolower(substr($Current_307 ,strrpos($Current_307 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror307').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_307 with $new_307 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_307]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_307);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_307 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_307."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_307."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_307." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror307').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_400  is empty /==//\\
    if($Current_400  != "") {
		$FileType = $_FILES[$img_400]['type'];
		$FileExtension = strtolower(substr($Current_400 ,strrpos($Current_400 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror400').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_400 with $new_400 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_400]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_400);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_400 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_400."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_400."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_400." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror400').style.display = 'none';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_401  is empty /==//\\
    if($Current_401  != "") {
		$FileType = $_FILES[$img_401]['type'];
		$FileExtension = strtolower(substr($Current_401 ,strrpos($Current_401 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror401').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_401 with $new_401 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_401]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_401);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_401 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_401."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_401."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_401." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror401').style.display = 'none';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_402  is empty /==//\\
    if($Current_402  != "") {
		$FileType = $_FILES[$img_402]['type'];
		$FileExtension = strtolower(substr($Current_402 ,strrpos($Current_402 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror402').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_402 with $new_402 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_402]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_402);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_402 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_402."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_402."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_402." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror402').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_403  is empty /==//\\
    if($Current_403  != "") {
		$FileType = $_FILES[$img_403]['type'];
		$FileExtension = strtolower(substr($Current_403 ,strrpos($Current_403 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror403').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_403 with $new_403 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_403]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_403);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_404 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_403."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_403."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_403." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror403').style.display = 'none';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_404  is empty /==//\\
    if($Current_404  != "") {
		$FileType = $_FILES[$img_404]['type'];
		$FileExtension = strtolower(substr($Current_404 ,strrpos($Current_404 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror404').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_404 with $new_404 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_404]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_404);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_404 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_404."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_404."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_404." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror404').style.display = 'none';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_405  is empty /==//\\
    if($Current_405  != "") {
		$FileType = $_FILES[$img_405]['type'];
		$FileExtension = strtolower(substr($Current_405 ,strrpos($Current_405 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror405').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_405 with $new_405 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_405]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_405);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_405 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_405."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_405."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_405." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror405').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_406  is empty /==//\\
    if($Current_406  != "") {
		$FileType = $_FILES[$img_406]['type'];
		$FileExtension = strtolower(substr($Current_406 ,strrpos($Current_406 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror406').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_406 with $new_406 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_406]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_406);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_406 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_406."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_406."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_406." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror406').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_407  is empty /==//\\
    if($Current_407  != "") {
		$FileType = $_FILES[$img_407]['type'];
		$FileExtension = strtolower(substr($Current_407 ,strrpos($Current_407 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror407').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_407 with $new_407 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_407]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_407);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_407 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_407."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_407."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_407." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror407').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_408  is empty /==//\\
    if($Current_408  != "") {
		$FileType = $_FILES[$img_408]['type'];
		$FileExtension = strtolower(substr($Current_408 ,strrpos($Current_408 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror408').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_408 with $new_408 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_408]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_408);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_408 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_408."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_408."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_408." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror408').style.display = 'none';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_409  is empty /==//\\
    if($Current_409  != "") {
		$FileType = $_FILES[$img_409]['type'];
		$FileExtension = strtolower(substr($Current_409 ,strrpos($Current_409 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror409').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_409 with $new_409 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_409]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_409);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_409 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_409."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_409."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_409." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror409').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_410  is empty /==//\\
    if($Current_410  != "") {
		$FileType = $_FILES[$img_410]['type'];
		$FileExtension = strtolower(substr($Current_410 ,strrpos($Current_410 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror410').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_410 with $new_410 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_410]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_410);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_410 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_410."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_410."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_410." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror410').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_411  is empty /==//\\
    if($Current_411  != "") {
		$FileType = $_FILES[$img_411]['type'];
		$FileExtension = strtolower(substr($Current_411 ,strrpos($Current_411 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror411').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_411 with $new_411 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_411]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_411);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_411 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_411."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_411."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_411." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror411').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_412  is empty /==//\\
    if($Current_412  != "") {
		$FileType = $_FILES[$img_412]['type'];
		$FileExtension = strtolower(substr($Current_412 ,strrpos($Current_412 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror412').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_412 with $new_412 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_412]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_412);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_412 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_412."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_412."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_412." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror412').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_413  is empty /==//\\
    if($Current_413  != "") {
		$FileType = $_FILES[$img_413]['type'];
		$FileExtension = strtolower(substr($Current_413 ,strrpos($Current_413 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror413').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_413 with $new_413 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_413]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_413);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_413 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_413."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_413."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_413." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror413').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_414  is empty /==//\\
    if($Current_414  != "") {
		$FileType = $_FILES[$img_414]['type'];
		$FileExtension = strtolower(substr($Current_414 ,strrpos($Current_414 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror414').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_414 with $new_414 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_414]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_414);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_414 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_414."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_414."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_414." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror414').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_415  is empty /==//\\
    if($Current_415  != "") {
		$FileType = $_FILES[$img_415]['type'];
		$FileExtension = strtolower(substr($Current_415 ,strrpos($Current_415 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror415').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_415 with $new_415 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_415]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_415);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_415 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_415."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_415."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_415." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror415').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_416  is empty /==//\\
    if($Current_416  != "") {
		$FileType = $_FILES[$img_416]['type'];
		$FileExtension = strtolower(substr($Current_416 ,strrpos($Current_416 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror416').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_416 with $new_416 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_416]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_416);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_416 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_416."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_416."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_416." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror416').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_417  is empty /==//\\
    if($Current_417  != "") {
		$FileType = $_FILES[$img_417]['type'];
		$FileExtension = strtolower(substr($Current_417 ,strrpos($Current_417 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror417').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_417 with $new_417 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_417]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_417);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_417 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_417."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_417."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_417." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror417').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_500  is empty /==//\\
    if($Current_500  != "") {
		$FileType = $_FILES[$img_500]['type'];
		$FileExtension = strtolower(substr($Current_500 ,strrpos($Current_500 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror500').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_500 with $new_500 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_500]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_500);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_500 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_500."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_500."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_500." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror500').style.display = 'none';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_501  is empty /==//\\
    if($Current_501  != "") {
		$FileType = $_FILES[$img_501]['type'];
		$FileExtension = strtolower(substr($Current_501 ,strrpos($Current_501 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror501').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_501 with $new_501 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_501]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_501);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_501 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_501."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_501."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_501." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror501').style.display = 'none';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_502  is empty /==//\\
    if($Current_502  != "") {
		$FileType = $_FILES[$img_502]['type'];
		$FileExtension = strtolower(substr($Current_502 ,strrpos($Current_502 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror502').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_502 with $new_502 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_502]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_502);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_502 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_502."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_502."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_502." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror502').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_503  is empty /==//\\
    if($Current_503  != "") {
		$FileType = $_FILES[$img_503]['type'];
		$FileExtension = strtolower(substr($Current_503 ,strrpos($Current_503 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror503').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_503 with $new_503 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_503]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_503);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_503 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_503."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_503."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_503." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror503').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_504  is empty /==//\\
    if($Current_504  != "") {
		$FileType = $_FILES[$img_504]['type'];
		$FileExtension = strtolower(substr($Current_504 ,strrpos($Current_504 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror504').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_504 with $new_504 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_504]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_504);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_504 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_504."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_504."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_504." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror504').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	//\\==\ Check if $Current_505  is empty /==//\\
    if($Current_505  != "") {
		$FileType = $_FILES[$img_505]['type'];
		$FileExtension = strtolower(substr($Current_505 ,strrpos($Current_505 ,'.')+1));
		// Check for supported file formats
		if($FileExtension != "gif" && $FileExtension != "jpg" && $FileExtension != "png") {
			echo "<script type='text/javascript'>parent.document.getElementById('typeerror505').style.display = 'table';</script>";
		}
		//\\==\ If is ok Rename $Current_505 with $new_505 on Upload /==//\\
		else {
			
			$FileTemp = $_FILES[$img_505]['tmp_name'];
			$FileLocation = $target_img_path.basename($new_505);
			// Finally Upload
			if(move_uploaded_file($FileTemp,$FileLocation)) {
				// On successful upload send a message to corresponding div_img_505 from which the file came from
				echo "<script type='text/javascript'>parent.document.getElementById('".$div_img_505."').innerHTML = '<i class=\"fa fa-check\"></i><a href=\"/errors/img/".$new_505."\" target=\"_blank\"><font size=2><b> Renamed to ".$new_505." from </b> <i>(".$FileType.")</i></font>';</script>";
				echo "<script type='text/javascript'>parent.document.getElementById('typeerror505').style.display = 'none';</script>";
			    echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'none';</script>";
			} 
			else {
				echo "<script type='text/javascript'>parent.document.getElementById('write_error_img').style.display = 'block';</script>";
			}
		}
	}
	
	/*///*===================*\\\*\==================================================================================================================>  
	    |                     |
        |Set background colors|
	    |                     |
    \*\\\*===================*///*/==================================================================================================================>
	
	
	//\\==\ 404 Background Color /===//\\
	if (!empty($_POST['cl_404'])) {
	$css_404 = fopen("css/404.css", "w")
	or die('');
	$txt = '.bk-404{background-color: ';
	fwrite($css_404, $txt);
	if(isset($_POST['cl_404'])){
		$cl_404 = $_POST['cl_404'];  
		$bk_404 = $_POST['bk_404']; 
		fwrite($css_404, $cl_404);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/404.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_404, $txt);
	fclose($css_404);
	}
	
	//\\==\ 100 Background Color /===//\\
	if (!empty($_POST['cl_100'])) {
	$css_100 = fopen("css/100.css", "w")
	or die('');
	$txt = '.bk-100{background-color: ';
	fwrite($css_100, $txt);
	if(isset($_POST['cl_100'])){
		$cl_100 = $_POST['cl_100'];  
		$bk_100 = $_POST['bk_100']; 
		fwrite($css_100, $cl_100);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/100.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_100, $txt);
	fclose($css_100);
	}
	
	//\\==\ 101 Background Color /===//\\
	if (!empty($_POST['cl_101'])) {
	$css_101 = fopen("css/101.css", "w")
	or die('');
	$txt = '.bk-101{background-color: ';
	fwrite($css_101, $txt);
	if(isset($_POST['cl_101'])){
		$cl_101 = $_POST['cl_101'];  
		$bk_101 = $_POST['bk_101']; 
		fwrite($css_101, $cl_101);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/101.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_101, $txt);
	fclose($css_101);
	}
	
	//\\==\ 200 Background Color /===//\\
	if (!empty($_POST['cl_200'])) {
	$css_200 = fopen("css/200.css", "w")
	or die('');
	$txt = '.bk-200{background-color: ';
	fwrite($css_200, $txt);
	if(isset($_POST['cl_200'])){
		$cl_200 = $_POST['cl_200'];  
		$bk_200 = $_POST['bk_200']; 
		fwrite($css_200, $cl_200);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/200.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_200, $txt);
	fclose($css_200);
	}
	
	//\\==\ 201 Background Color /===//\\
	if (!empty($_POST['cl_201'])) {
	$css_201 = fopen("css/201.css", "w")
	or die('');
	$txt = '.bk-201{background-color: ';
	fwrite($css_201, $txt);
	if(isset($_POST['cl_201'])){
		$cl_201 = $_POST['cl_201'];  
		$bk_201 = $_POST['bk_201']; 
		fwrite($css_201, $cl_201);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/201.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_201, $txt);
	fclose($css_201);
	}
	
	//\\==\ 202 Background Color /===//\\
	if (!empty($_POST['cl_202'])) {
	$css_202 = fopen("css/202.css", "w")
	or die('');
	$txt = '.bk-202{background-color: ';
	fwrite($css_202, $txt);
	if(isset($_POST['cl_202'])){
		$cl_202 = $_POST['cl_202'];  
		$bk_202 = $_POST['bk_202']; 
		fwrite($css_202, $cl_202);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/202.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_202, $txt);
	fclose($css_202);
	}
	
	//\\==\ 203 Background Color /===//\\
	if (!empty($_POST['cl_203'])) {
	$css_203 = fopen("css/203.css", "w")
	or die('');
	$txt = '.bk-203{background-color: ';
	fwrite($css_203, $txt);
	if(isset($_POST['cl_203'])){
		$cl_203 = $_POST['cl_203'];  
		$bk_203 = $_POST['bk_203']; 
		fwrite($css_203, $cl_203);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/203.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_203, $txt);
	fclose($css_203);
	}
	
	//\\==\ 204 Background Color /===//\\
	if (!empty($_POST['cl_204'])) {
	$css_204 = fopen("css/204.css", "w")
	or die('');
	$txt = '.bk-204{background-color: ';
	fwrite($css_204, $txt);
	if(isset($_POST['cl_204'])){
		$cl_204 = $_POST['cl_204'];  
		$bk_204 = $_POST['bk_204']; 
		fwrite($css_204, $cl_204);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/204.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_204, $txt);
	fclose($css_204);
	}
	
	//\\==\ 205 Background Color /===//\\
	if (!empty($_POST['cl_205'])) {
	$css_205 = fopen("css/205.css", "w")
	or die('');
	$txt = '.bk-205{background-color: ';
	fwrite($css_205, $txt);
	if(isset($_POST['cl_205'])){
		$cl_205 = $_POST['cl_205'];  
		$bk_205 = $_POST['bk_205']; 
		fwrite($css_205, $cl_205);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/205.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_205, $txt);
	fclose($css_205);
	}
	
	//\\==\ 206 Background Color /===//\\
	if (!empty($_POST['cl_206'])) {
	$css_206 = fopen("css/206.css", "w")
	or die('');
	$txt = '.bk-206{background-color: ';
	fwrite($css_206, $txt);
	if(isset($_POST['cl_206'])){
		$cl_206 = $_POST['cl_206'];  
		$bk_206 = $_POST['bk_206']; 
		fwrite($css_206, $cl_206);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/206.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_206, $txt);
	fclose($css_206);
	}
	
	//\\==\ 300 Background Color /===//\\
	if (!empty($_POST['cl_300'])) {
	$css_300 = fopen("css/300.css", "w")
	or die('');
	$txt = '.bk-300{background-color: ';
	fwrite($css_300, $txt);
	if(isset($_POST['cl_300'])){
		$cl_300 = $_POST['cl_300'];  
		$bk_300 = $_POST['bk_300']; 
		fwrite($css_300, $cl_300);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/300.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_300, $txt);
	fclose($css_300);
	}
	
	//\\==\ 301 Background Color /===//\\
	if (!empty($_POST['cl_301'])) {
	$css_301 = fopen("css/301.css", "w")
	or die('');
	$txt = '.bk-301{background-color: ';
	fwrite($css_301, $txt);
	if(isset($_POST['cl_301'])){
		$cl_301 = $_POST['cl_301'];  
		$bk_301 = $_POST['bk_301']; 
		fwrite($css_301, $cl_301);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/301.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_301, $txt);
	fclose($css_301);
	}
	
	//\\==\ 302 Background Color /===//\\
	if (!empty($_POST['cl_302'])) {
	$css_302 = fopen("css/302.css", "w")
	or die('');
	$txt = '.bk-302{background-color: ';
	fwrite($css_302, $txt);
	if(isset($_POST['cl_302'])){
		$cl_302 = $_POST['cl_302'];  
		$bk_302 = $_POST['bk_302']; 
		fwrite($css_302, $cl_302);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/302.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_302, $txt);
	fclose($css_302);
	}
	
	//\\==\ 303 Background Color /===//\\
	if (!empty($_POST['cl_303'])) {
	$css_303 = fopen("css/303.css", "w")
	or die('');
	$txt = '.bk-303{background-color: ';
	fwrite($css_303, $txt);
	if(isset($_POST['cl_303'])){
		$cl_303 = $_POST['cl_303'];  
		$bk_303 = $_POST['bk_303']; 
		fwrite($css_303, $cl_303);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/303.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_303, $txt);
	fclose($css_303);
	}
	
	//\\==\ 304 Background Color /===//\\
	if (!empty($_POST['cl_304'])) {
	$css_304 = fopen("css/304.css", "w")
	or die('');
	$txt = '.bk-304{background-color: ';
	fwrite($css_304, $txt);
	if(isset($_POST['cl_304'])){
		$cl_304 = $_POST['cl_304'];  
		$bk_304 = $_POST['bk_304']; 
		fwrite($css_304, $cl_304);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/304.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_304, $txt);
	fclose($css_304);
	}
	
	//\\==\ 305 Background Color /===//\\
	if (!empty($_POST['cl_305'])) {
	$css_305 = fopen("css/305.css", "w")
	or die('');
	$txt = '.bk-305{background-color: ';
	fwrite($css_305, $txt);
	if(isset($_POST['cl_305'])){
		$cl_305 = $_POST['cl_305'];  
		$bk_305 = $_POST['bk_305']; 
		fwrite($css_305, $cl_305);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/305.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_305, $txt);
	fclose($css_305);
	}
	
//\\==\ 307 Background Color /===//\\
	if (!empty($_POST['cl_307'])) {
	$css_307 = fopen("css/307.css", "w")
	or die('');
	$txt = '.bk-307{background-color: ';
	fwrite($css_307, $txt);
	if(isset($_POST['cl_307'])){
		$cl_307 = $_POST['cl_307'];  
		$bk_307 = $_POST['bk_307']; 
		fwrite($css_307, $cl_307);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/307.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_307, $txt);
	fclose($css_307);
	}
	
	//\\==\ 400 Background Color /===//\\
	if (!empty($_POST['cl_400'])) {
	$css_400 = fopen("css/400.css", "w")
	or die('');
	$txt = '.bk-400{background-color: ';
	fwrite($css_400, $txt);
	if(isset($_POST['cl_400'])){
		$cl_400 = $_POST['cl_400'];  
		$bk_400 = $_POST['bk_400']; 
		fwrite($css_400, $cl_400);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/400.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_400, $txt);
	fclose($css_400);
	}
	
	//\\==\ 401 Background Color /===//\\
	if (!empty($_POST['cl_401'])) {
	$css_401 = fopen("css/401.css", "w")
	or die('');
	$txt = '.bk-401{background-color: ';
	fwrite($css_401, $txt);
	if(isset($_POST['cl_401'])){
		$cl_401 = $_POST['cl_401'];  
		$bk_401 = $_POST['bk_401']; 
		fwrite($css_401, $cl_401);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/401.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_401, $txt);
	fclose($css_401);
	}
	
	//\\==\ 402 Background Color /===//\\
	if (!empty($_POST['cl_402'])) {
	$css_402 = fopen("css/402.css", "w")
	or die('');
	$txt = '.bk-402{background-color: ';
	fwrite($css_402, $txt);
	if(isset($_POST['cl_402'])){
		$cl_402 = $_POST['cl_402'];  
		$bk_402 = $_POST['bk_402']; 
		fwrite($css_402, $cl_402);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/402.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_402, $txt);
	fclose($css_402);
	}
	
	//\\==\ 403 Background Color /===//\\
	if (!empty($_POST['cl_403'])) {
	$css_403 = fopen("css/403.css", "w")
	or die('');
	$txt = '.bk-403{background-color: ';
	fwrite($css_403, $txt);
	if(isset($_POST['cl_403'])){
		$cl_403 = $_POST['cl_403'];  
		$bk_403 = $_POST['bk_403']; 
		fwrite($css_403, $cl_403);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/403.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_403, $txt);
	fclose($css_403);
	}
	
	//\\==\ 404 Background Color /===//\\
	if (!empty($_POST['cl_404'])) {
	$css_404 = fopen("css/404.css", "w")
	or die('');
	$txt = '.bk-404{background-color: ';
	fwrite($css_404, $txt);
	if(isset($_POST['cl_404'])){
		$cl_404 = $_POST['cl_404'];  
		$bk_404 = $_POST['bk_404']; 
		fwrite($css_404, $cl_404);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/404.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_404, $txt);
	fclose($css_404);
	}
	
	//\\==\ 405 Background Color /===//\\
	if (!empty($_POST['cl_405'])) {
	$css_405 = fopen("css/405.css", "w")
	or die('');
	$txt = '.bk-405{background-color: ';
	fwrite($css_405, $txt);
	if(isset($_POST['cl_405'])){
		$cl_405 = $_POST['cl_405'];  
		$bk_405 = $_POST['bk_405']; 
		fwrite($css_405, $cl_405);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/405.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_405, $txt);
	fclose($css_405);
	}
	
	//\\==\ 406 Background Color /===//\\
	if (!empty($_POST['cl_406'])) {
	$css_406 = fopen("css/406.css", "w")
	or die('');
	$txt = '.bk-406{background-color: ';
	fwrite($css_406, $txt);
	if(isset($_POST['cl_406'])){
		$cl_406 = $_POST['cl_406'];  
		$bk_406 = $_POST['bk_406']; 
		fwrite($css_406, $cl_406);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/406.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_406, $txt);
	fclose($css_406);
	}
	
	//\\==\ 407 Background Color /===//\\
	if (!empty($_POST['cl_407'])) {
	$css_407 = fopen("css/407.css", "w")
	or die('');
	$txt = '.bk-407{background-color: ';
	fwrite($css_407, $txt);
	if(isset($_POST['cl_407'])){
		$cl_407 = $_POST['cl_407'];  
		$bk_407 = $_POST['bk_407']; 
		fwrite($css_407, $cl_407);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/407.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_407, $txt);
	fclose($css_407);
	}
	
	//\\==\ 408 Background Color /===//\\
	if (!empty($_POST['cl_408'])) {
	$css_408 = fopen("css/408.css", "w")
	or die('');
	$txt = '.bk-408{background-color: ';
	fwrite($css_408, $txt);
	if(isset($_POST['cl_408'])){
		$cl_408 = $_POST['cl_408'];  
		$bk_408 = $_POST['bk_408']; 
		fwrite($css_408, $cl_408);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/408.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_408, $txt);
	fclose($css_408);
	}
	
	//\\==\ 409 Background Color /===//\\
	if (!empty($_POST['cl_409'])) {
	$css_409 = fopen("css/409.css", "w")
	or die('');
	$txt = '.bk-409{background-color: ';
	fwrite($css_409, $txt);
	if(isset($_POST['cl_409'])){
		$cl_409 = $_POST['cl_409'];  
		$bk_409 = $_POST['bk_409']; 
		fwrite($css_409, $cl_409);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/409.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_409, $txt);
	fclose($css_409);
	}
	
	//\\==\ 410 Background Color /===//\\
	if (!empty($_POST['cl_410'])) {
	$css_410 = fopen("css/410.css", "w")
	or die('');
	$txt = '.bk-410{background-color: ';
	fwrite($css_410, $txt);
	if(isset($_POST['cl_410'])){
		$cl_410 = $_POST['cl_410'];  
		$bk_410 = $_POST['bk_410']; 
		fwrite($css_410, $cl_410);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/410.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_410, $txt);
	fclose($css_410);
	}
	
	//\\==\ 411 Background Color /===//\\
	if (!empty($_POST['cl_411'])) {
	$css_411 = fopen("css/411.css", "w")
	or die('');
	$txt = '.bk-411{background-color: ';
	fwrite($css_411, $txt);
	if(isset($_POST['cl_411'])){
		$cl_411 = $_POST['cl_411'];  
		$bk_411 = $_POST['bk_411']; 
		fwrite($css_411, $cl_411);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/411.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_411, $txt);
	fclose($css_411);
	}
	
	//\\==\ 412 Background Color /===//\\
	if (!empty($_POST['cl_412'])) {
	$css_412 = fopen("css/412.css", "w")
	or die('');
	$txt = '.bk-412{background-color: ';
	fwrite($css_412, $txt);
	if(isset($_POST['cl_412'])){
		$cl_412 = $_POST['cl_412'];  
		$bk_412 = $_POST['bk_412']; 
		fwrite($css_412, $cl_412);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/412.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_412, $txt);
	fclose($css_412);
	}
	
	//\\==\ 413 Background Color /===//\\
	if (!empty($_POST['cl_413'])) {
	$css_413 = fopen("css/413.css", "w")
	or die('');
	$txt = '.bk-413{background-color: ';
	fwrite($css_413, $txt);
	if(isset($_POST['cl_413'])){
		$cl_413 = $_POST['cl_413'];  
		$bk_413 = $_POST['bk_413']; 
		fwrite($css_413, $cl_413);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/413.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_413, $txt);
	fclose($css_413);
	}
	
	//\\==\ 414 Background Color /===//\\
	if (!empty($_POST['cl_414'])) {
	$css_414 = fopen("css/414.css", "w")
	or die('');
	$txt = '.bk-414{background-color: ';
	fwrite($css_414, $txt);
	if(isset($_POST['cl_414'])){
		$cl_414 = $_POST['cl_414'];  
		$bk_414 = $_POST['bk_414']; 
		fwrite($css_414, $cl_414);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/414.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_414, $txt);
	fclose($css_414);
	}
	
	//\\==\ 415 Background Color /===//\\
	if (!empty($_POST['cl_415'])) {
	$css_415 = fopen("css/415.css", "w")
	or die('');
	$txt = '.bk-415{background-color: ';
	fwrite($css_415, $txt);
	if(isset($_POST['cl_415'])){
		$cl_415 = $_POST['cl_415'];  
		$bk_415 = $_POST['bk_415']; 
		fwrite($css_415, $cl_415);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/415.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_415, $txt);
	fclose($css_415);
	}
	
	//\\==\ 416 Background Color /===//\\
	if (!empty($_POST['cl_416'])) {
	$css_416 = fopen("css/416.css", "w")
	or die('');
	$txt = '.bk-416{background-color: ';
	fwrite($css_416, $txt);
	if(isset($_POST['cl_416'])){
		$cl_416 = $_POST['cl_416'];  
		$bk_416 = $_POST['bk_416']; 
		fwrite($css_416, $cl_416);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/416.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_416, $txt);
	fclose($css_416);
	}
	
	//\\==\ 417 Background Color /===//\\
	if (!empty($_POST['cl_417'])) {
	$css_417 = fopen("css/417.css", "w")
	or die('');
	$txt = '.bk-417{background-color: ';
	fwrite($css_417, $txt);
	if(isset($_POST['cl_417'])){
		$cl_417 = $_POST['cl_417'];  
		$bk_417 = $_POST['bk_417']; 
		fwrite($css_417, $cl_417);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/417.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_417, $txt);
	fclose($css_417);
	}
	
	//\\==\ 500 Background Color /===//\\
	if (!empty($_POST['cl_500'])) {
	$css_500 = fopen("css/500.css", "w")
	or die('');
	$txt = '.bk-500{background-color: ';
	fwrite($css_500, $txt);
	if(isset($_POST['cl_500'])){
		$cl_500 = $_POST['cl_500'];  
		$bk_500 = $_POST['bk_500']; 
		fwrite($css_500, $cl_500);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/500.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_500, $txt);
	fclose($css_500);
	}
	
	//\\==\ 501 Background Color /===//\\
	if (!empty($_POST['cl_501'])) {
	$css_501 = fopen("css/501.css", "w")
	or die('');
	$txt = '.bk-501{background-color: ';
	fwrite($css_501, $txt);
	if(isset($_POST['cl_501'])){
		$cl_501 = $_POST['cl_501'];  
		$bk_501 = $_POST['bk_501']; 
		fwrite($css_501, $cl_501);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/501.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_501, $txt);
	fclose($css_501);
	}
	
	//\\==\ 502 Background Color /===//\\
	if (!empty($_POST['cl_502'])) {
	$css_502 = fopen("css/502.css", "w")
	or die('');
	$txt = '.bk-502{background-color: ';
	fwrite($css_502, $txt);
	if(isset($_POST['cl_502'])){
		$cl_502 = $_POST['cl_502'];  
		$bk_502 = $_POST['bk_502']; 
		fwrite($css_502, $cl_502);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/502.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_502, $txt);
	fclose($css_502);
	}
	
	//\\==\ 503 Background Color /===//\\
	if (!empty($_POST['cl_503'])) {
	$css_503 = fopen("css/503.css", "w")
	or die('');
	$txt = '.bk-503{background-color: ';
	fwrite($css_503, $txt);
	if(isset($_POST['cl_503'])){
		$cl_503 = $_POST['cl_503'];  
		$bk_503 = $_POST['bk_503']; 
		fwrite($css_503, $cl_503);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/503.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_503, $txt);
	fclose($css_503);
	}
	
	//\\==\ 504 Background Color /===//\\
	if (!empty($_POST['cl_504'])) {
	$css_504 = fopen("css/504.css", "w")
	or die('');
	$txt = '.bk-504{background-color: ';
	fwrite($css_504, $txt);
	if(isset($_POST['cl_504'])){
		$cl_504 = $_POST['cl_504'];  
		$bk_504 = $_POST['bk_504']; 
		fwrite($css_504, $cl_504);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/504.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_504, $txt);
	fclose($css_504);
	}
	
	//\\==\ 505 Background Color /===//\\
	if (!empty($_POST['cl_505'])) {
	$css_505 = fopen("css/505.css", "w")
	or die('');
	$txt = '.bk-505{background-color: ';
	fwrite($css_505, $txt);
	if(isset($_POST['cl_505'])){
		$cl_505 = $_POST['cl_505'];  
		$bk_505 = $_POST['bk_505']; 
		fwrite($css_505, $cl_505);
	}
	$txt = ';
	background-attachment: fixed;
    background-image: url("/errors/img/bk/505.gif");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    }';
	fwrite($css_505, $txt);
	fclose($css_505);
	}
	
?>

