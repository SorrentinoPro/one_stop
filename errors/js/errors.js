/*------------------------------------------------------------------------------\
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
----\--------------------------------------------------------------------------*/
//=========\    Preloader    /======================================\\ 

jQuery(document).ready(function($) {  
$(window).load(function(){
	$('#preloader').fadeOut('slow',function(){$(this).remove();});
});

//===========\ Off-canvas functions /===============================\\
	
	$(".e-top-right").click(function(event){ 
		$(".e-top-right").toggleClass("active");
		$(".menu").toggleClass("active");
		$(".poster").toggleClass("off");
		$(".e-bottom-left").removeClass("active");
		$(".language").removeClass("active");
		
	});
	$(".e-bottom-left").click(function(event){ 
		$(".e-bottom-left").toggleClass("active");
		$(".language").toggleClass("active");
		$(".poster").toggleClass("off");
		$(".e-top-right").removeClass("active");
		$(".menu").removeClass("active");
	});
	// <!-- Remove mentioned funcions -->
	$(".e-top-right.active").click( function(){
		$(".menu").removeClass("active");
		$(".e-top-right").removeClass("active");
		$(".poster").removeClass("off");
	});	
	$(".e-bottom-left.active").click( function(){
		$(".language").removeClass("active");
		$(".e-top-right").removeClass("active");
		$(".poster").removeClass("off");
	});	


//=========\ Select options /======================================\\ 
    $('select.SSL_v').change(function(){
		var OptionSSL = $(this).val();
		if(OptionSSL == '' ){
			$('.http').removeClass("on");
			$('.https').removeClass("on");
		}
		if(OptionSSL == 'http' ){
			$('.http').addClass("on");
			$('.https').removeClass("on");
		}
		if(OptionSSL == 'https' ){
			$('.http').removeClass("on");
			$('.https').addClass("on");
		}
		
	});
     
	$('select.cont').change(function(){
		var OptionMail = $(this).val();
		if(OptionMail == '' ){
			$('.email-f').removeClass("on");
			$('.email-a').removeClass("on");
		}
		if(OptionMail == 'Contact_Form' ){
			$('.email-f').addClass("on");
			$('.email-a').removeClass("on");
		}
		if(OptionMail == 'Email_Address' ){
			$('.email-f').removeClass("on");
			$('.email-a').addClass("on");
		}
	});

});

//=========\ Success Message /======================================\\ 
function loadDoc() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("demo").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "success.php" , true);
	xhttp.send();
}

