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
	
	include 'language.php';
?>
<html>
	<head>
	    <title><?php echo $lang['HEADER_TITLE_INDEX'];?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
		<link href="/errors/css/errors.css"           rel="stylesheet">
		<link href="/errors/css/font-awesome.min.css" rel="stylesheet" media="screen">
		<link href="/errors/css/bootstrap.min.css"    rel="stylesheet">
		<link href="/errors/img/ico/favicon.gif"      rel="shortcut icon" >
        <link href="/errors/img/ico/144.png"          rel="apple-touch-icon-precomposed" sizes="144x144" >
        <link href="/errors/img/ico/114.png"          rel="apple-touch-icon-precomposed" sizes="114x114" >
        <link href="/errors/img/ico/72.png"           rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="/errors/img/ico/57.png"           rel="apple-touch-icon-precomposed" sizes="57x57"  >
	</head>
	<body class="conf-body">
		
		<div id="cross-fixer">
			
			<div class="contain">
				
				<h1 style="background:#333; padding:30px 0;"><?php echo $lang['INDEX_TITLE']; ?></h1>
				
				<hr>
				
				<section>
					<h2 style ="background:#ffc926;padding:10px 0;"><?php echo $lang['SETTINGS']; ?></h2>
					<section class="sec-a">
						
						<h3 style="float:left;">_[ <font style="color:#beff6d;"><i class="fa fa-spin fa-globe"></i></font> ]</h3>
						
						<h2><?php echo $lang['LANGUAGE']; ?></h2>
						<form name="ch_lang" action="<?php echo $mysite; ?>/errors/index.php" method="get">
							<select onchange="ch_lang.submit()" name="lang" id="custom-lang" >
								<option value=""><?php echo $lang['SELECT']; ?></option>
								<?php echo $option_lang; ?>
							</select>
						</form>
						
					</section>
					
					<form id="links_str" class="form" method="post" onsubmit="loadDoc()" name="links_str" target="links_iframe" action="conf.php">
						
						<section class="sec-a">
							
							<h3 style="float:right;">[ <font style="color:#beff6d;">1</font> ]_</h3> <h3>SSL: </h3>
							
							<select name = "SSL_v" class="SSL_v" required>
								<option class="hid1" value="" selected><?php echo $lang['SELECT']; ?></option>
								<option class="no"   value="http"><?php echo $lang['NO']; ?></option>
								<option class="yes"  value="https"><?php echo $lang['YES']; ?></option>
							</select>
							
						</section>
						
						<section class="sec-a">
							
							<h3 style="float: left;">_[ <font style="color:#beff6d;">3</font> ]</h3>
							<h3><?php echo $lang['CONTACT_METHOD'];?>:</h3>
							<select name = "Mail_x" class="cont"  required>
								<option class = "hid2" value = "" selected><?php echo $lang['CONTACT_METHOD_1'];?></option>
								<option class = "Contact_Form" value = "Contact_Form"><?php echo $lang['CONTACT_METHOD_2'];?></option>
								<option class = "Email_Address" value = "Email_Address"><?php echo $lang['CONTACT_METHOD_3'];?></option>
							</select>
							<br>
							<br>
							<label class = "email-f" ><?php echo $lang['FORM_PATH'];?><br>
								<div style="display:ruby;">
									<p class = "http" >http:// </p> 
									<p class = "https" >https:// </p> 
									<input id = "mail_f" name="mail_f" type="text" placeholder="example.com/#contact_us" />
								</div>
							</label>
							<label class="email-a"><?php echo $lang['CONTACT_METHOD_3'];?><br>
								<input id="mail_a" name="mail_a" type="text" placeholder="my@email.com" />
							</label>
							
						</section>
						
						<section class="sec-a">
							
							<h3 style="float:right;">[ <font style="color:#beff6d;">2</font> ]_</h3><h3><?php echo $lang['SITE_URL'];?>: </h3>
							
							<label>
								<div style="display:ruby;">
									<p class = "http" >http:// </p> 
									<p class = "https" >https:// </p>   
									<input id="url" name="url" type="text" placeholder="example.com" required />
								</div>
							</label>
							
						</section>
						
						<div style="width:100%;">
							
							<br><br>	
							<button class="btn-set" type="submit" name="submit_links" ><?php echo $lang['SUBMIT_BUTTON'];?></button> 
							
						</div>
						<p id="demo"></p>
					</form>
					<iframe name="links_iframe" style="display:none"></iframe>
					
				</section>
				
				<hr>
				<h2 style ="background:#ffc926;padding:10px 0;"><?php echo $lang['ICONS_TITLE']; ?></h2>
				
				<section class="sec-a">
				
					<h3 style="float:left; bottom: -20px; position: relative;">_[ <font style="color:#beff6d;"><?php echo $lang['PRELOADER']; ?></font> ]</h3>
					
					<div style="display: inline-block;">
					
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['PREL_IMAGE']; ?></h4>
							
							<form id="upload_prel" enctype="multipart/form-data" name="upload_prel" target="prel_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="prel_iframe" style="display:none"></iframe>
									
									<div id="div_img_prel" style="margin-top:5px">
										
										<input type="file" id="img_prel" name="img_prel" size="30" onchange="document.upload_prel.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerrorprel" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								<!-- div showing error message for exceeded file max pixels -->
								<div id="pixelerrorprel" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_SIZE_PREL']; ?></font>
								</div>
								
								
							</form>
							
						</div>
						
					</div>
					
				</section>
				
				<section class="sec-a">
					
					<h3 style="float:right; bottom: -20px; position: relative;">[ <font style="color:#beff6d;"><?php echo $lang['ICON_FAV_TITLE']; ?></font> ]_</h3>
					
					<div style="display: inline-block;">
					
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['ICON_IMAGE']; ?></h4>
							
							<form id="upload_icon" enctype="multipart/form-data" name="upload_icon" target="icon_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="icon_iframe" style="display:none"></iframe>
									
									<div id="div_img_icon" style="margin-top:5px">
										
										<input type="file" id="img_icon" name="img_icon" size="30" onchange="document.upload_icon.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerroricon" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								<!-- div showing error message for exceeded file max pixels -->
								<div id="pixelerroricon" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_SIZE_ICO']; ?></font>
								</div>
								
								
							</form>
							
						</div>
						
					</div>
					
				</section>
				
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;"><?php echo $lang['ICON_57_TITLE']; ?></font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['ICON_IMAGE_57']; ?></h4>
							
							<form id="upload_icon_57" enctype="multipart/form-data" name="upload_icon_57" target="icon_iframe_57" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="icon_iframe_57" style="display:none"></iframe>
									
									<div id="div_img_icon_57" style="margin-top:5px">
										
										<input type="file" id="img_icon_57" name="img_icon_57" size="30" onchange="document.upload_icon_57.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerroricon_57" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								<!-- div showing error message for exceeded file max pixels -->
								<div id="pixelerroricon_57" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_SIZE_ICO_57']; ?></font>
								</div>
							</form>
							
						</div>
						
					</div>
					
				</section>
				
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;"><?php echo $lang['ICON_72_TITLE']; ?></font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['ICON_IMAGE_72']; ?></h4>
							
							<form id="upload_icon_72" enctype="multipart/form-data" name="upload_icon_72" target="icon_iframe_72" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="icon_iframe_72" style="display:none"></iframe>
									
									<div id="div_img_icon_72" style="margin-top:5px">
										
										<input type="file" id="img_icon_72" name="img_icon_72" size="30" onchange="document.upload_icon_72.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerroricon_72" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								<!-- div showing error message for exceeded file max pixels -->
								<div id="pixelerroricon_72" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_SIZE_ICO_72']; ?></font>
								</div>
							</form>
							
						</div>
						
					</div>
					
				</section>
				
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;"><?php echo $lang['ICON_114_TITLE']; ?></font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['ICON_IMAGE_114']; ?></h4>
							
							<form id="upload_icon_114" enctype="multipart/form-data" name="upload_icon_114" target="icon_iframe_114" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="icon_iframe_114" style="display:none"></iframe>
									
									<div id="div_img_icon_114" style="margin-top:5px">
										
										<input type="file" id="img_icon_114" name="img_icon_114" size="30" onchange="document.upload_icon_114.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerroricon_114" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								<!-- div showing error message for exceeded file max pixels -->
								<div id="pixelerroricon_114" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_SIZE_ICO_114']; ?></font>
								</div>
							</form>
							
						</div>
						
					</div>
					
				</section>
				
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;"><?php echo $lang['ICON_144_TITLE']; ?></font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['ICON_IMAGE_144']; ?></h4>
							
							<form id="upload_icon_144" enctype="multipart/form-data" name="upload_icon_144" target="icon_iframe_144" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="icon_iframe_144" style="display:none"></iframe>
									
									<div id="div_img_icon_144" style="margin-top:5px">
										
										<input type="file" id="img_icon_144" name="img_icon_144" size="30" onchange="document.upload_icon_144.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerroricon_144" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								<!-- div showing error message for exceeded file max pixels -->
								<div id="pixelerroricon_144" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_SIZE_ICO_144']; ?></font>
								</div>
							</form>
							
						</div>
						
					</div>
					
				</section>
				
				<hr>
				
				<h2 style ="background:#ffc926;padding:10px 0;"><?php echo $lang['PAGES']; ?></h2>
<!--\ 404 /-->
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">404</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor404" enctype="multipart/form-data" name="changecolor404" target="cl_404_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_404" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-404" name="bk_404" class="color-picker"  onchange="javascript:document.getElementById('cl-404').value = document.getElementById('bk-404').value; document.changecolor404.submit();document.getElementById('cl_succes_404').style.display = 'block';" type="color" />
								
								<iframe name="cl_404_iframe" style="display:none"></iframe>
								
								<input id="cl-404" name="cl_404" class="field-picker" onchange="javascript:document.getElementById('bk-404').value = document.getElementById('cl-404').value; document.changecolor404.submit();document.getElementById('cl_succes_404').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_404" enctype="multipart/form-data" name="upload_404" target="img_404_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_404_iframe" style="display:none"></iframe>
									
									<div id="div_img_404" style="margin-top:5px">
										
										<input type="file" id="img_404" name="img_404" size="30" onchange="document.upload_404.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror404" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 100 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">100</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor100" enctype="multipart/form-data" name="changecolor100" target="cl_100_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_100" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-100" name="bk_100" class="color-picker"  onchange="javascript:document.getElementById('cl-100').value = document.getElementById('bk-100').value; document.changecolor100.submit();document.getElementById('cl_succes_100').style.display = 'block';" type="color" />
								
								<iframe name="cl_100_iframe" style="display:none"></iframe>
								
								<input id="cl-100" name="cl_100" class="field-picker" onchange="javascript:document.getElementById('bk-100').value = document.getElementById('cl-100').value; document.changecolor100.submit();document.getElementById('cl_succes_100').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_100" enctype="multipart/form-data" name="upload_100" target="img_100_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_100_iframe" style="display:none"></iframe>
									
									<div id="div_img_100" style="margin-top:5px">
										
										<input type="file" id="img_100" name="img_100" size="30" onchange="document.upload_100.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror100" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 101 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">101</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor101" enctype="multipart/form-data" name="changecolor101" target="cl_101_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_101" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-101" name="bk_101" class="color-picker"  onchange="javascript:document.getElementById('cl-101').value = document.getElementById('bk-101').value; document.changecolor101.submit();document.getElementById('cl_succes_101').style.display = 'block';" type="color" />
								
								<iframe name="cl_101_iframe" style="display:none"></iframe>
								
								<input id="cl-101" name="cl_101" class="field-picker" onchange="javascript:document.getElementById('bk-101').value = document.getElementById('cl-101').value; document.changecolor101.submit();document.getElementById('cl_succes_101').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_101" enctype="multipart/form-data" name="upload_101" target="img_101_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_101_iframe" style="display:none"></iframe>
									
									<div id="div_img_101" style="margin-top:5px">
										
										<input type="file" id="img_101" name="img_101" size="30" onchange="document.upload_101.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror101" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 200 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">200</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor200" enctype="multipart/form-data" name="changecolor200" target="cl_200_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_200" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-200" name="bk_200" class="color-picker"  onchange="javascript:document.getElementById('cl-200').value = document.getElementById('bk-200').value; document.changecolor200.submit();document.getElementById('cl_succes_200').style.display = 'block';" type="color" />
								
								<iframe name="cl_200_iframe" style="display:none"></iframe>
								
								<input id="cl-200" name="cl_200" class="field-picker" onchange="javascript:document.getElementById('bk-200').value = document.getElementById('cl-200').value; document.changecolor200.submit();document.getElementById('cl_succes_200').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_200" enctype="multipart/form-data" name="upload_200" target="img_200_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_200_iframe" style="display:none"></iframe>
									
									<div id="div_img_200" style="margin-top:5px">
										
										<input type="file" id="img_200" name="img_200" size="30" onchange="document.upload_200.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror200" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 201 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">201</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor201" enctype="multipart/form-data" name="changecolor201" target="cl_201_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_201" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-201" name="bk_201" class="color-picker"  onchange="javascript:document.getElementById('cl-201').value = document.getElementById('bk-201').value; document.changecolor201.submit();document.getElementById('cl_succes_201').style.display = 'block';" type="color" />
								
								<iframe name="cl_201_iframe" style="display:none"></iframe>
								
								<input id="cl-201" name="cl_201" class="field-picker" onchange="javascript:document.getElementById('bk-201').value = document.getElementById('cl-201').value; document.changecolor201.submit();document.getElementById('cl_succes_201').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_201" enctype="multipart/form-data" name="upload_201" target="img_201_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_201_iframe" style="display:none"></iframe>
									
									<div id="div_img_201" style="margin-top:5px">
										
										<input type="file" id="img_201" name="img_201" size="30" onchange="document.upload_201.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror201" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 202 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">202</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor202" enctype="multipart/form-data" name="changecolor202" target="cl_202_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_202" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-202" name="bk_202" class="color-picker"  onchange="javascript:document.getElementById('cl-202').value = document.getElementById('bk-202').value; document.changecolor202.submit();document.getElementById('cl_succes_202').style.display = 'block';" type="color" />
								
								<iframe name="cl_202_iframe" style="display:none"></iframe>
								
								<input id="cl-202" name="cl_202" class="field-picker" onchange="javascript:document.getElementById('bk-202').value = document.getElementById('cl-202').value; document.changecolor202.submit();document.getElementById('cl_succes_202').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_202" enctype="multipart/form-data" name="upload_202" target="img_202_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_202_iframe" style="display:none"></iframe>
									
									<div id="div_img_202" style="margin-top:5px">
										
										<input type="file" id="img_202" name="img_202" size="30" onchange="document.upload_202.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror202" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 203 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">203</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor203" enctype="multipart/form-data" name="changecolor203" target="cl_203_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_203" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-203" name="bk_203" class="color-picker"  onchange="javascript:document.getElementById('cl-203').value = document.getElementById('bk-203').value; document.changecolor203.submit();document.getElementById('cl_succes_203').style.display = 'block';" type="color" />
								
								<iframe name="cl_203_iframe" style="display:none"></iframe>
								
								<input id="cl-203" name="cl_203" class="field-picker" onchange="javascript:document.getElementById('bk-203').value = document.getElementById('cl-203').value; document.changecolor203.submit();document.getElementById('cl_succes_203').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_203" enctype="multipart/form-data" name="upload_203" target="img_203_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_203_iframe" style="display:none"></iframe>
									
									<div id="div_img_203" style="margin-top:5px">
										
										<input type="file" id="img_203" name="img_203" size="30" onchange="document.upload_203.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror203" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 204 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">204</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor204" enctype="multipart/form-data" name="changecolor204" target="cl_204_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_204" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-204" name="bk_204" class="color-picker"  onchange="javascript:document.getElementById('cl-204').value = document.getElementById('bk-204').value; document.changecolor204.submit();document.getElementById('cl_succes_204').style.display = 'block';" type="color" />
								
								<iframe name="cl_204_iframe" style="display:none"></iframe>
								
								<input id="cl-204" name="cl_204" class="field-picker" onchange="javascript:document.getElementById('bk-204').value = document.getElementById('cl-204').value; document.changecolor204.submit();document.getElementById('cl_succes_204').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_204" enctype="multipart/form-data" name="upload_204" target="img_204_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_204_iframe" style="display:none"></iframe>
									
									<div id="div_img_204" style="margin-top:5px">
										
										<input type="file" id="img_204" name="img_204" size="30" onchange="document.upload_204.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror204" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 205 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">205</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor205" enctype="multipart/form-data" name="changecolor205" target="cl_205_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_205" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-205" name="bk_205" class="color-picker"  onchange="javascript:document.getElementById('cl-205').value = document.getElementById('bk-205').value; document.changecolor205.submit();document.getElementById('cl_succes_205').style.display = 'block';" type="color" />
								
								<iframe name="cl_205_iframe" style="display:none"></iframe>
								
								<input id="cl-205" name="cl_205" class="field-picker" onchange="javascript:document.getElementById('bk-205').value = document.getElementById('cl-205').value; document.changecolor205.submit();document.getElementById('cl_succes_205').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_205" enctype="multipart/form-data" name="upload_205" target="img_205_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_205_iframe" style="display:none"></iframe>
									
									<div id="div_img_205" style="margin-top:5px">
										
										<input type="file" id="img_205" name="img_205" size="30" onchange="document.upload_205.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror205" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 206 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">206</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor206" enctype="multipart/form-data" name="changecolor206" target="cl_206_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_206" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-206" name="bk_206" class="color-picker"  onchange="javascript:document.getElementById('cl-206').value = document.getElementById('bk-206').value; document.changecolor206.submit();document.getElementById('cl_succes_206').style.display = 'block';" type="color" />
								
								<iframe name="cl_206_iframe" style="display:none"></iframe>
								
								<input id="cl-206" name="cl_206" class="field-picker" onchange="javascript:document.getElementById('bk-206').value = document.getElementById('cl-206').value; document.changecolor206.submit();document.getElementById('cl_succes_206').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_206" enctype="multipart/form-data" name="upload_206" target="img_206_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_206_iframe" style="display:none"></iframe>
									
									<div id="div_img_206" style="margin-top:5px">
										
										<input type="file" id="img_206" name="img_206" size="30" onchange="document.upload_206.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror206" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 300 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">300</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor300" enctype="multipart/form-data" name="changecolor300" target="cl_300_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_300" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-300" name="bk_300" class="color-picker"  onchange="javascript:document.getElementById('cl-300').value = document.getElementById('bk-300').value; document.changecolor300.submit();document.getElementById('cl_succes_300').style.display = 'block';" type="color" />
								
								<iframe name="cl_300_iframe" style="display:none"></iframe>
								
								<input id="cl-300" name="cl_300" class="field-picker" onchange="javascript:document.getElementById('bk-300').value = document.getElementById('cl-300').value; document.changecolor300.submit();document.getElementById('cl_succes_300').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_300" enctype="multipart/form-data" name="upload_300" target="img_300_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_300_iframe" style="display:none"></iframe>
									
									<div id="div_img_300" style="margin-top:5px">
										
										<input type="file" id="img_300" name="img_300" size="30" onchange="document.upload_300.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror300" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 301 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">301</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor301" enctype="multipart/form-data" name="changecolor301" target="cl_301_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_301" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-301" name="bk_301" class="color-picker"  onchange="javascript:document.getElementById('cl-301').value = document.getElementById('bk-301').value; document.changecolor301.submit();document.getElementById('cl_succes_301').style.display = 'block';" type="color" />
								
								<iframe name="cl_301_iframe" style="display:none"></iframe>
								
								<input id="cl-301" name="cl_301" class="field-picker" onchange="javascript:document.getElementById('bk-301').value = document.getElementById('cl-301').value; document.changecolor301.submit();document.getElementById('cl_succes_301').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_301" enctype="multipart/form-data" name="upload_301" target="img_301_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_301_iframe" style="display:none"></iframe>
									
									<div id="div_img_301" style="margin-top:5px">
										
										<input type="file" id="img_301" name="img_301" size="30" onchange="document.upload_301.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror301" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 302 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">302</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor302" enctype="multipart/form-data" name="changecolor302" target="cl_302_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_302" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-302" name="bk_302" class="color-picker"  onchange="javascript:document.getElementById('cl-302').value = document.getElementById('bk-302').value; document.changecolor302.submit();document.getElementById('cl_succes_302').style.display = 'block';" type="color" />
								
								<iframe name="cl_302_iframe" style="display:none"></iframe>
								
								<input id="cl-302" name="cl_302" class="field-picker" onchange="javascript:document.getElementById('bk-302').value = document.getElementById('cl-302').value; document.changecolor302.submit();document.getElementById('cl_succes_302').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_302" enctype="multipart/form-data" name="upload_302" target="img_302_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_302_iframe" style="display:none"></iframe>
									
									<div id="div_img_302" style="margin-top:5px">
										
										<input type="file" id="img_302" name="img_302" size="30" onchange="document.upload_302.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror302" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 303 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">303</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor303" enctype="multipart/form-data" name="changecolor303" target="cl_303_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_303" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-303" name="bk_303" class="color-picker"  onchange="javascript:document.getElementById('cl-303').value = document.getElementById('bk-303').value; document.changecolor303.submit();document.getElementById('cl_succes_303').style.display = 'block';" type="color" />
								
								<iframe name="cl_303_iframe" style="display:none"></iframe>
								
								<input id="cl-303" name="cl_303" class="field-picker" onchange="javascript:document.getElementById('bk-303').value = document.getElementById('cl-303').value; document.changecolor303.submit();document.getElementById('cl_succes_303').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_303" enctype="multipart/form-data" name="upload_303" target="img_303_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_303_iframe" style="display:none"></iframe>
									
									<div id="div_img_303" style="margin-top:5px">
										
										<input type="file" id="img_303" name="img_303" size="30" onchange="document.upload_303.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror303" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 304 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">304</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor304" enctype="multipart/form-data" name="changecolor304" target="cl_304_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_304" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-304" name="bk_304" class="color-picker"  onchange="javascript:document.getElementById('cl-304').value = document.getElementById('bk-304').value; document.changecolor304.submit();document.getElementById('cl_succes_304').style.display = 'block';" type="color" />
								
								<iframe name="cl_304_iframe" style="display:none"></iframe>
								
								<input id="cl-304" name="cl_304" class="field-picker" onchange="javascript:document.getElementById('bk-304').value = document.getElementById('cl-304').value; document.changecolor304.submit();document.getElementById('cl_succes_304').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_304" enctype="multipart/form-data" name="upload_304" target="img_304_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_304_iframe" style="display:none"></iframe>
									
									<div id="div_img_304" style="margin-top:5px">
										
										<input type="file" id="img_304" name="img_304" size="30" onchange="document.upload_304.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror304" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 305 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">305</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor305" enctype="multipart/form-data" name="changecolor305" target="cl_305_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_305" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-305" name="bk_305" class="color-picker"  onchange="javascript:document.getElementById('cl-305').value = document.getElementById('bk-305').value; document.changecolor305.submit();document.getElementById('cl_succes_305').style.display = 'block';" type="color" />
								
								<iframe name="cl_305_iframe" style="display:none"></iframe>
								
								<input id="cl-305" name="cl_305" class="field-picker" onchange="javascript:document.getElementById('bk-305').value = document.getElementById('cl-305').value; document.changecolor305.submit();document.getElementById('cl_succes_305').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_305" enctype="multipart/form-data" name="upload_305" target="img_305_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_305_iframe" style="display:none"></iframe>
									
									<div id="div_img_305" style="margin-top:5px">
										
										<input type="file" id="img_305" name="img_305" size="30" onchange="document.upload_305.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror305" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 307 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">307</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor307" enctype="multipart/form-data" name="changecolor307" target="cl_307_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_307" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-307" name="bk_307" class="color-picker"  onchange="javascript:document.getElementById('cl-307').value = document.getElementById('bk-307').value; document.changecolor307.submit();document.getElementById('cl_succes_307').style.display = 'block';" type="color" />
								
								<iframe name="cl_307_iframe" style="display:none"></iframe>
								
								<input id="cl-307" name="cl_307" class="field-picker" onchange="javascript:document.getElementById('bk-307').value = document.getElementById('cl-307').value; document.changecolor307.submit();document.getElementById('cl_succes_307').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_307" enctype="multipart/form-data" name="upload_307" target="img_307_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_307_iframe" style="display:none"></iframe>
									
									<div id="div_img_307" style="margin-top:5px">
										
										<input type="file" id="img_307" name="img_307" size="30" onchange="document.upload_307.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror307" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 400 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">400</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor400" enctype="multipart/form-data" name="changecolor400" target="cl_400_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_400" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-400" name="bk_400" class="color-picker"  onchange="javascript:document.getElementById('cl-400').value = document.getElementById('bk-400').value; document.changecolor400.submit();document.getElementById('cl_succes_400').style.display = 'block';" type="color" />
								
								<iframe name="cl_400_iframe" style="display:none"></iframe>
								
								<input id="cl-400" name="cl_400" class="field-picker" onchange="javascript:document.getElementById('bk-400').value = document.getElementById('cl-400').value; document.changecolor400.submit();document.getElementById('cl_succes_400').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_400" enctype="multipart/form-data" name="upload_400" target="img_400_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_400_iframe" style="display:none"></iframe>
									
									<div id="div_img_400" style="margin-top:5px">
										
										<input type="file" id="img_400" name="img_400" size="30" onchange="document.upload_400.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror400" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 401 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">401</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor401" enctype="multipart/form-data" name="changecolor401" target="cl_401_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_401" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-401" name="bk_401" class="color-picker"  onchange="javascript:document.getElementById('cl-401').value = document.getElementById('bk-401').value; document.changecolor401.submit();document.getElementById('cl_succes_401').style.display = 'block';" type="color" />
								
								<iframe name="cl_401_iframe" style="display:none"></iframe>
								
								<input id="cl-401" name="cl_401" class="field-picker" onchange="javascript:document.getElementById('bk-401').value = document.getElementById('cl-401').value; document.changecolor401.submit();document.getElementById('cl_succes_401').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_401" enctype="multipart/form-data" name="upload_401" target="img_401_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_401_iframe" style="display:none"></iframe>
									
									<div id="div_img_401" style="margin-top:5px">
										
										<input type="file" id="img_401" name="img_401" size="30" onchange="document.upload_401.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror401" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 402 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">402</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor402" enctype="multipart/form-data" name="changecolor402" target="cl_402_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_402" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-402" name="bk_402" class="color-picker"  onchange="javascript:document.getElementById('cl-402').value = document.getElementById('bk-402').value; document.changecolor402.submit();document.getElementById('cl_succes_402').style.display = 'block';" type="color" />
								
								<iframe name="cl_402_iframe" style="display:none"></iframe>
								
								<input id="cl-402" name="cl_402" class="field-picker" onchange="javascript:document.getElementById('bk-402').value = document.getElementById('cl-402').value; document.changecolor402.submit();document.getElementById('cl_succes_402').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_402" enctype="multipart/form-data" name="upload_402" target="img_402_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_402_iframe" style="display:none"></iframe>
									
									<div id="div_img_402" style="margin-top:5px">
										
										<input type="file" id="img_402" name="img_402" size="30" onchange="document.upload_402.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror402" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 403 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">403</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor403" enctype="multipart/form-data" name="changecolor403" target="cl_403_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_403" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-403" name="bk_403" class="color-picker"  onchange="javascript:document.getElementById('cl-403').value = document.getElementById('bk-403').value; document.changecolor403.submit();document.getElementById('cl_succes_403').style.display = 'block';" type="color" />
								
								<iframe name="cl_403_iframe" style="display:none"></iframe>
								
								<input id="cl-403" name="cl_403" class="field-picker" onchange="javascript:document.getElementById('bk-403').value = document.getElementById('cl-403').value; document.changecolor403.submit();document.getElementById('cl_succes_403').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_403" enctype="multipart/form-data" name="upload_403" target="img_403_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_403_iframe" style="display:none"></iframe>
									
									<div id="div_img_403" style="margin-top:5px">
										
										<input type="file" id="img_403" name="img_403" size="30" onchange="document.upload_403.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror403" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 405 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">405</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor405" enctype="multipart/form-data" name="changecolor405" target="cl_405_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_405" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-405" name="bk_405" class="color-picker"  onchange="javascript:document.getElementById('cl-405').value = document.getElementById('bk-405').value; document.changecolor405.submit();document.getElementById('cl_succes_405').style.display = 'block';" type="color" />
								
								<iframe name="cl_405_iframe" style="display:none"></iframe>
								
								<input id="cl-405" name="cl_405" class="field-picker" onchange="javascript:document.getElementById('bk-405').value = document.getElementById('cl-405').value; document.changecolor405.submit();document.getElementById('cl_succes_405').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_405" enctype="multipart/form-data" name="upload_405" target="img_405_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_405_iframe" style="display:none"></iframe>
									
									<div id="div_img_405" style="margin-top:5px">
										
										<input type="file" id="img_405" name="img_405" size="30" onchange="document.upload_405.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror405" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 406 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">406</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor406" enctype="multipart/form-data" name="changecolor406" target="cl_406_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_406" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-406" name="bk_406" class="color-picker"  onchange="javascript:document.getElementById('cl-406').value = document.getElementById('bk-406').value; document.changecolor406.submit();document.getElementById('cl_succes_406').style.display = 'block';" type="color" />
								
								<iframe name="cl_406_iframe" style="display:none"></iframe>
								
								<input id="cl-406" name="cl_406" class="field-picker" onchange="javascript:document.getElementById('bk-406').value = document.getElementById('cl-406').value; document.changecolor406.submit();document.getElementById('cl_succes_406').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_406" enctype="multipart/form-data" name="upload_406" target="img_406_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_406_iframe" style="display:none"></iframe>
									
									<div id="div_img_406" style="margin-top:5px">
										
										<input type="file" id="img_406" name="img_406" size="30" onchange="document.upload_406.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror406" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 407 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">407</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor407" enctype="multipart/form-data" name="changecolor407" target="cl_407_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_407" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-407" name="bk_407" class="color-picker"  onchange="javascript:document.getElementById('cl-407').value = document.getElementById('bk-407').value; document.changecolor407.submit();document.getElementById('cl_succes_407').style.display = 'block';" type="color" />
								
								<iframe name="cl_407_iframe" style="display:none"></iframe>
								
								<input id="cl-407" name="cl_407" class="field-picker" onchange="javascript:document.getElementById('bk-407').value = document.getElementById('cl-407').value; document.changecolor407.submit();document.getElementById('cl_succes_407').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_407" enctype="multipart/form-data" name="upload_407" target="img_407_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_407_iframe" style="display:none"></iframe>
									
									<div id="div_img_407" style="margin-top:5px">
										
										<input type="file" id="img_407" name="img_407" size="30" onchange="document.upload_407.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror407" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 408 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">408</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor408" enctype="multipart/form-data" name="changecolor408" target="cl_408_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_408" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-408" name="bk_408" class="color-picker"  onchange="javascript:document.getElementById('cl-408').value = document.getElementById('bk-408').value; document.changecolor408.submit();document.getElementById('cl_succes_408').style.display = 'block';" type="color" />
								
								<iframe name="cl_408_iframe" style="display:none"></iframe>
								
								<input id="cl-408" name="cl_408" class="field-picker" onchange="javascript:document.getElementById('bk-408').value = document.getElementById('cl-408').value; document.changecolor408.submit();document.getElementById('cl_succes_408').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_408" enctype="multipart/form-data" name="upload_408" target="img_408_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_408_iframe" style="display:none"></iframe>
									
									<div id="div_img_408" style="margin-top:5px">
										
										<input type="file" id="img_408" name="img_408" size="30" onchange="document.upload_408.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror408" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 409 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">409</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor409" enctype="multipart/form-data" name="changecolor409" target="cl_409_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_409" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-409" name="bk_409" class="color-picker"  onchange="javascript:document.getElementById('cl-409').value = document.getElementById('bk-409').value; document.changecolor409.submit();document.getElementById('cl_succes_409').style.display = 'block';" type="color" />
								
								<iframe name="cl_409_iframe" style="display:none"></iframe>
								
								<input id="cl-409" name="cl_409" class="field-picker" onchange="javascript:document.getElementById('bk-409').value = document.getElementById('cl-409').value; document.changecolor409.submit();document.getElementById('cl_succes_409').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_409" enctype="multipart/form-data" name="upload_409" target="img_409_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_409_iframe" style="display:none"></iframe>
									
									<div id="div_img_409" style="margin-top:5px">
										
										<input type="file" id="img_409" name="img_409" size="30" onchange="document.upload_409.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror409" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 410 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">410</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor410" enctype="multipart/form-data" name="changecolor410" target="cl_410_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_410" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-410" name="bk_410" class="color-picker"  onchange="javascript:document.getElementById('cl-410').value = document.getElementById('bk-410').value; document.changecolor410.submit();document.getElementById('cl_succes_410').style.display = 'block';" type="color" />
								
								<iframe name="cl_410_iframe" style="display:none"></iframe>
								
								<input id="cl-410" name="cl_410" class="field-picker" onchange="javascript:document.getElementById('bk-410').value = document.getElementById('cl-410').value; document.changecolor410.submit();document.getElementById('cl_succes_410').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_410" enctype="multipart/form-data" name="upload_410" target="img_410_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_410_iframe" style="display:none"></iframe>
									
									<div id="div_img_410" style="margin-top:5px">
										
										<input type="file" id="img_410" name="img_410" size="30" onchange="document.upload_410.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror410" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 411 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">411</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor411" enctype="multipart/form-data" name="changecolor411" target="cl_411_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_411" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-411" name="bk_411" class="color-picker"  onchange="javascript:document.getElementById('cl-411').value = document.getElementById('bk-411').value; document.changecolor411.submit();document.getElementById('cl_succes_411').style.display = 'block';" type="color" />
								
								<iframe name="cl_411_iframe" style="display:none"></iframe>
								
								<input id="cl-411" name="cl_411" class="field-picker" onchange="javascript:document.getElementById('bk-411').value = document.getElementById('cl-411').value; document.changecolor411.submit();document.getElementById('cl_succes_411').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_411" enctype="multipart/form-data" name="upload_411" target="img_411_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_411_iframe" style="display:none"></iframe>
									
									<div id="div_img_411" style="margin-top:5px">
										
										<input type="file" id="img_411" name="img_411" size="30" onchange="document.upload_411.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror411" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 412 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">412</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor412" enctype="multipart/form-data" name="changecolor412" target="cl_412_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_412" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-412" name="bk_412" class="color-picker"  onchange="javascript:document.getElementById('cl-412').value = document.getElementById('bk-412').value; document.changecolor412.submit();document.getElementById('cl_succes_412').style.display = 'block';" type="color" />
								
								<iframe name="cl_412_iframe" style="display:none"></iframe>
								
								<input id="cl-412" name="cl_412" class="field-picker" onchange="javascript:document.getElementById('bk-412').value = document.getElementById('cl-412').value; document.changecolor412.submit();document.getElementById('cl_succes_412').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_412" enctype="multipart/form-data" name="upload_412" target="img_412_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_412_iframe" style="display:none"></iframe>
									
									<div id="div_img_412" style="margin-top:5px">
										
										<input type="file" id="img_412" name="img_412" size="30" onchange="document.upload_412.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror412" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 413 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">413</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor413" enctype="multipart/form-data" name="changecolor413" target="cl_413_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_413" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-413" name="bk_413" class="color-picker"  onchange="javascript:document.getElementById('cl-413').value = document.getElementById('bk-413').value; document.changecolor413.submit();document.getElementById('cl_succes_413').style.display = 'block';" type="color" />
								
								<iframe name="cl_413_iframe" style="display:none"></iframe>
								
								<input id="cl-413" name="cl_413" class="field-picker" onchange="javascript:document.getElementById('bk-413').value = document.getElementById('cl-413').value; document.changecolor413.submit();document.getElementById('cl_succes_413').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_413" enctype="multipart/form-data" name="upload_413" target="img_413_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_413_iframe" style="display:none"></iframe>
									
									<div id="div_img_413" style="margin-top:5px">
										
										<input type="file" id="img_413" name="img_413" size="30" onchange="document.upload_413.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror413" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 414 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">414</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor414" enctype="multipart/form-data" name="changecolor414" target="cl_414_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_414" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-414" name="bk_414" class="color-picker"  onchange="javascript:document.getElementById('cl-414').value = document.getElementById('bk-414').value; document.changecolor414.submit();document.getElementById('cl_succes_414').style.display = 'block';" type="color" />
								
								<iframe name="cl_414_iframe" style="display:none"></iframe>
								
								<input id="cl-414" name="cl_414" class="field-picker" onchange="javascript:document.getElementById('bk-414').value = document.getElementById('cl-414').value; document.changecolor414.submit();document.getElementById('cl_succes_414').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_414" enctype="multipart/form-data" name="upload_414" target="img_414_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_414_iframe" style="display:none"></iframe>
									
									<div id="div_img_414" style="margin-top:5px">
										
										<input type="file" id="img_414" name="img_414" size="30" onchange="document.upload_414.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror414" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 415 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">415</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor415" enctype="multipart/form-data" name="changecolor415" target="cl_415_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_415" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-415" name="bk_415" class="color-picker"  onchange="javascript:document.getElementById('cl-415').value = document.getElementById('bk-415').value; document.changecolor415.submit();document.getElementById('cl_succes_415').style.display = 'block';" type="color" />
								
								<iframe name="cl_415_iframe" style="display:none"></iframe>
								
								<input id="cl-415" name="cl_415" class="field-picker" onchange="javascript:document.getElementById('bk-415').value = document.getElementById('cl-415').value; document.changecolor415.submit();document.getElementById('cl_succes_415').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_415" enctype="multipart/form-data" name="upload_415" target="img_415_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_415_iframe" style="display:none"></iframe>
									
									<div id="div_img_415" style="margin-top:5px">
										
										<input type="file" id="img_415" name="img_415" size="30" onchange="document.upload_415.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror415" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 416 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">416</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor416" enctype="multipart/form-data" name="changecolor416" target="cl_416_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_416" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-416" name="bk_416" class="color-picker"  onchange="javascript:document.getElementById('cl-416').value = document.getElementById('bk-416').value; document.changecolor416.submit();document.getElementById('cl_succes_416').style.display = 'block';" type="color" />
								
								<iframe name="cl_416_iframe" style="display:none"></iframe>
								
								<input id="cl-416" name="cl_416" class="field-picker" onchange="javascript:document.getElementById('bk-416').value = document.getElementById('cl-416').value; document.changecolor416.submit();document.getElementById('cl_succes_416').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_416" enctype="multipart/form-data" name="upload_416" target="img_416_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_416_iframe" style="display:none"></iframe>
									
									<div id="div_img_416" style="margin-top:5px">
										
										<input type="file" id="img_416" name="img_416" size="30" onchange="document.upload_416.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror416" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 417 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">417</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor417" enctype="multipart/form-data" name="changecolor417" target="cl_417_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_417" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-417" name="bk_417" class="color-picker"  onchange="javascript:document.getElementById('cl-417').value = document.getElementById('bk-417').value; document.changecolor417.submit();document.getElementById('cl_succes_417').style.display = 'block';" type="color" />
								
								<iframe name="cl_417_iframe" style="display:none"></iframe>
								
								<input id="cl-417" name="cl_417" class="field-picker" onchange="javascript:document.getElementById('bk-417').value = document.getElementById('cl-417').value; document.changecolor417.submit();document.getElementById('cl_succes_417').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_417" enctype="multipart/form-data" name="upload_417" target="img_417_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_417_iframe" style="display:none"></iframe>
									
									<div id="div_img_417" style="margin-top:5px">
										
										<input type="file" id="img_417" name="img_417" size="30" onchange="document.upload_417.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror417" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 500 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">500</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor500" enctype="multipart/form-data" name="changecolor500" target="cl_500_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_500" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-500" name="bk_500" class="color-picker"  onchange="javascript:document.getElementById('cl-500').value = document.getElementById('bk-500').value; document.changecolor500.submit();document.getElementById('cl_succes_500').style.display = 'block';" type="color" />
								
								<iframe name="cl_500_iframe" style="display:none"></iframe>
								
								<input id="cl-500" name="cl_500" class="field-picker" onchange="javascript:document.getElementById('bk-500').value = document.getElementById('cl-500').value; document.changecolor500.submit();document.getElementById('cl_succes_500').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_500" enctype="multipart/form-data" name="upload_500" target="img_500_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_500_iframe" style="display:none"></iframe>
									
									<div id="div_img_500" style="margin-top:5px">
										
										<input type="file" id="img_500" name="img_500" size="30" onchange="document.upload_500.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror500" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 501 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">501</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor501" enctype="multipart/form-data" name="changecolor501" target="cl_501_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_501" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-501" name="bk_501" class="color-picker"  onchange="javascript:document.getElementById('cl-501').value = document.getElementById('bk-501').value; document.changecolor501.submit();document.getElementById('cl_succes_501').style.display = 'block';" type="color" />
								
								<iframe name="cl_501_iframe" style="display:none"></iframe>
								
								<input id="cl-501" name="cl_501" class="field-picker" onchange="javascript:document.getElementById('bk-501').value = document.getElementById('cl-501').value; document.changecolor501.submit();document.getElementById('cl_succes_501').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_501" enctype="multipart/form-data" name="upload_501" target="img_501_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_501_iframe" style="display:none"></iframe>
									
									<div id="div_img_501" style="margin-top:5px">
										
										<input type="file" id="img_501" name="img_501" size="30" onchange="document.upload_501.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror501" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 502 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">502</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor502" enctype="multipart/form-data" name="changecolor502" target="cl_502_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_502" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-502" name="bk_502" class="color-picker"  onchange="javascript:document.getElementById('cl-502').value = document.getElementById('bk-502').value; document.changecolor502.submit();document.getElementById('cl_succes_502').style.display = 'block';" type="color" />
								
								<iframe name="cl_502_iframe" style="display:none"></iframe>
								
								<input id="cl-502" name="cl_502" class="field-picker" onchange="javascript:document.getElementById('bk-502').value = document.getElementById('cl-502').value; document.changecolor502.submit();document.getElementById('cl_succes_502').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_502" enctype="multipart/form-data" name="upload_502" target="img_502_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_502_iframe" style="display:none"></iframe>
									
									<div id="div_img_502" style="margin-top:5px">
										
										<input type="file" id="img_502" name="img_502" size="30" onchange="document.upload_502.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror502" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 503 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">503</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor503" enctype="multipart/form-data" name="changecolor503" target="cl_503_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_503" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-503" name="bk_503" class="color-picker"  onchange="javascript:document.getElementById('cl-503').value = document.getElementById('bk-503').value; document.changecolor503.submit();document.getElementById('cl_succes_503').style.display = 'block';" type="color" />
								
								<iframe name="cl_503_iframe" style="display:none"></iframe>
								
								<input id="cl-503" name="cl_503" class="field-picker" onchange="javascript:document.getElementById('bk-503').value = document.getElementById('cl-503').value; document.changecolor503.submit();document.getElementById('cl_succes_503').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_503" enctype="multipart/form-data" name="upload_503" target="img_503_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_503_iframe" style="display:none"></iframe>
									
									<div id="div_img_503" style="margin-top:5px">
										
										<input type="file" id="img_503" name="img_503" size="30" onchange="document.upload_503.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror503" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 504 /-->			
				<section class="sec-a">
					
					<h3 style="float:left;">_[ <font style="color:#beff6d;">504</font> ]</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor504" enctype="multipart/form-data" name="changecolor504" target="cl_504_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_504" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-504" name="bk_504" class="color-picker"  onchange="javascript:document.getElementById('cl-504').value = document.getElementById('bk-504').value; document.changecolor504.submit();document.getElementById('cl_succes_504').style.display = 'block';" type="color" />
								
								<iframe name="cl_504_iframe" style="display:none"></iframe>
								
								<input id="cl-504" name="cl_504" class="field-picker" onchange="javascript:document.getElementById('bk-504').value = document.getElementById('cl-504').value; document.changecolor504.submit();document.getElementById('cl_succes_504').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_504" enctype="multipart/form-data" name="upload_504" target="img_504_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_504_iframe" style="display:none"></iframe>
									
									<div id="div_img_504" style="margin-top:5px">
										
										<input type="file" id="img_504" name="img_504" size="30" onchange="document.upload_504.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror504" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
<!--\ 505 /-->			
				<section class="sec-a">
					
					<h3 style="float:right;">[ <font style="color:#beff6d;">505</font> ]_</h3>
					
					<div style="display: inline-block;">
						
						<div style="display: inline-block;">
							
							<h4><?php echo $lang['BACKGROUND_COLOR']; ?></h4>
							
							<form id="changecolor505" enctype="multipart/form-data" name="changecolor505" target="cl_505_iframe" action="conf.php" method="post">
								<div style="position:relative">
									<i id="cl_succes_505" class="color-succes fa fa-check"style="display: none"> <?php echo $lang['COLOR_SUCCESS']; ?></i>
								</div>
								<input id="bk-505" name="bk_505" class="color-picker"  onchange="javascript:document.getElementById('cl-505').value = document.getElementById('bk-505').value; document.changecolor505.submit();document.getElementById('cl_succes_505').style.display = 'block';" type="color" />
								
								<iframe name="cl_505_iframe" style="display:none"></iframe>
								
								<input id="cl-505" name="cl_505" class="field-picker" onchange="javascript:document.getElementById('bk-505').value = document.getElementById('cl-505').value; document.changecolor505.submit();document.getElementById('cl_succes_505').style.display = 'block';" type="text" />
								
							</form>
							
						</div>
						
						<div style="display: inline-block;">
							
							<h4 style="margin: 25px;"><?php echo $lang['BACKGROUND_IMAGE']; ?></h4>
							
							<form id="upload_505" enctype="multipart/form-data" name="upload_505" target="img_505_iframe" action="conf.php" method="post">
								
								<div id="attachmentdiv" style="margin-left:30px">
									
									<iframe name="img_505_iframe" style="display:none"></iframe>
									
									<div id="div_img_505" style="margin-top:5px">
										
										<input type="file" id="img_505" name="img_505" size="30" onchange="document.upload_505.submit();"/>
										
									</div>
									
								</div>
								
								<!-- div showing error message for invalid file type -->
								<div id="typeerror505" style="display:none;margin-left:30px">
									<font color=#990000 size=1><?php echo $lang['IMAGE_TYPE']; ?></font>
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</section>
	
				<br>
				<hr>
				<br>
				
			</div>
			
		</div>
		
		<footer class="footer">
			
			<p class="p-cpr"><a href="<?php echo $cpr_l; ?>"><?php echo $cpr_n; ?></a></p>
			
		</footer>
		<!-- div showing error message for /errors folder -->
		<div id="write_error_main" style="display:none;">
			<?php echo $lang['ERROR_WRITE_MAIN']; ?>
		</div>
		<!-- div showing error message for /errors/img/ folder -->
		<div id="write_error_img"  style="display:none;">
			<?php echo $lang['ERROR_WRITE_IMG']; ?>
		</div>
		<!-- div showing error message for /errors/img/ico folder -->
		<div id="write_error_ico"  style="display:none;">
			<?php echo $lang['ERROR_WRITE_ICO']; ?>
		</div>
		<!-- div showing error message for /errors/css folder -->
		<div id="write_error_css"  style="display:none;">
			<?php echo $lang['ERROR_WRITE_CSS']; ?>
		</div>
		
		<script type="text/javascript" src="/errors/js/jquery.js"></script>	
		<script type="text/javascript" src="/errors/js/bootstrap.min.js"></script>	
		<script type="text/javascript"  src="/errors/js/errors.js"></script>	
	</body>
</html>																			