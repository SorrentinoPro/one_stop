# One-stop
Custom HTTP status codes 

# Features:

1) Customize and handle all your HTTP status code pages from one interface. 

2) Fully Responsive.

3) Set your contact method for your visitors to reach you and alert you easily in case something went wrong within your website.

4) Set backround color and image for each status code.

5) Set favicon and standard apple touch precompressed size icons.

6) Set preloader 

7) Option to easily change available languages of errors messages for visitors and administrator.
   Available Languages:
   ~English
   ~Italian
   ~More to come.. 
   
# How to add Languages:

1) Navigate to errors/languages/ and choose the .php file you are fluent in speaking for example (en.php) = english.

2) Make a copy and rename the file to your second language you are fluent in, for example if you want to translate to spanish,
   rename the file as (es.php) and change the variable inside the single ('translation')or double quote("translation") 
   as well as put your name on the translator section at the top of the page and gain your credits.
   
3) Add your (es.php) translated file to the errors/languages/ folder.

4) Then navigate to errors/ folder and modify the language.php file

5) add the two parameter accordigly as per the example i left inside this file (once you will be inside that file you will understand)

6) just copy the example above and paste it under and change the value to the language you added, for example from (en) to (es).

# How to use:

1) Download one-stop.zip

2) Unzip it and place the errors folder and .htaccess file inside the root directory.(es.--> /public_html  or  /htdocs)
   If you have already the .htaccess file on your root directory, just add the content of my .htaccess inside yours, 
   but it is IMPORTANT to paste it before anything else you already have, in short from Line #1.
   
3) Navigate to yoursite.com/errors

4) Set your configurations, at least the main links structure such as SSL, contact address and your domain name, 
   to make the application functional with your site.
   The rest is set by default with pictures and anything ready to work out of the box.

5) Once you finished to setup your Custom errors pages, open the .htaccess again and UNCOMMENT the last line at end of my script,
   to make sure none else can modify your custom pages or mess up your configuration.
   After that, as anyone else, you will not be able access the interface and in case you will need to change anything else, 
   COMMENT again that line and you will be able to access your configuration panel again.
