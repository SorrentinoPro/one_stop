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
/*================================*\
|----------------------------------|
 Language  : English
 Translator: Francesco Sorrentino
|----------------------------------|
\*================================*/
$lang = array();

//\\====\ index.php /====//\\

$lang['HEADER_TITLE_INDEX']   = 'Settings';
$lang['INDEX_TITLE']          = 'Custom HTTP Status Codes';
$lang['PRELOADER']            = 'Preloader';
$lang['PREL_IMAGE']            = 'Loader image';
$lang['LANGUAGE']             = 'Language';
$lang['SELECT']               = 'Select';
$lang['YES']                  = 'Yes';
$lang['NO']                   = 'No';
$lang['SELECT_LANGUAGE']      = 'Select your Language';
$lang['CHANGE']               = 'Change';
$lang['BACKGROUND_IMAGE']     = 'Background Image';
$lang['BACKGROUND_COLOR']     = 'Background Color';
$lang['PAGES']                = 'Pages';
$lang['SETTINGS']             = 'Settings';
$lang['SITE_URL']             = 'Site Url';
$lang['CONTACT_METHOD']       = 'Contact Method';
$lang['CONTACT_METHOD_1']     = 'Choose Method';
$lang['CONTACT_METHOD_2']     = 'Contact Form';
$lang['CONTACT_METHOD_3']     = 'Email Address';
$lang['FORM_PATH']            = 'Form path';
$lang['IMAGE_TYPE']           = 'Only png, jpg and gif file type are supported'; 
$lang['IMAGE_SIZE_PREL']      = 'Sorry, (MAX: Width = 300px, Height = 300px)';
$lang['IMAGE_SIZE_ICO']       = 'Sorry, (MAX: Width = 32px, Height = 32px)';
$lang['IMAGE_SIZE_ICO_57']    = 'Sorry, (MAX: Width = 57px, Height = 57px)';
$lang['IMAGE_SIZE_ICO_72']    = 'Sorry, (MAX: Width = 72px, Height = 72px)';
$lang['IMAGE_SIZE_ICO_114']   = 'Sorry, (MAX: Width = 114px, Height = 114px)';
$lang['IMAGE_SIZE_ICO_144']   = 'Sorry, (MAX: Width = 144px, Height = 144px)';
$lang['ICONS_TITLE']           = 'Icons';
$lang['ICON_FAV_TITLE']       = '32x32';
$lang['ICON_57_TITLE']        = '57x57';
$lang['ICON_72_TITLE']        = '72x72';
$lang['ICON_114_TITLE']       = '114x114';
$lang['ICON_144_TITLE']       = '144x144';
$lang['ICON_IMAGE']           = 'Favicon Image';
$lang['ICON_IMAGE_57']        = 'Apple Icon 57x57';
$lang['ICON_IMAGE_72']        = 'Apple Icon 72x72';
$lang['ICON_IMAGE_114']       = 'Apple Icon 114x114';
$lang['ICON_IMAGE_144']       = 'Apple Icon 144x144';
$lang['SUBMIT_BUTTON']        = 'Set';
$lang['ERROR_WRITE_MAIN']     = 'IMPORTANT!! Can not write to "/errors" Folder. Set correct permission, Then try again.';
$lang['ERROR_WRITE_IMG']      = 'IMPORTANT!! Can not write to "/errors/img" Folder. Set correct permission, Then try again.';
$lang['ERROR_WRITE_ICO']      = 'IMPORTANT!! Can not write to "/errors/img/ico" Folder. Set correct permission, Then try again.';
$lang['ERROR_WRITE_CSS']      = 'IMPORTANT!! Can not write to "/errors/css" Folder. Set correct permission, Then try again.';
$lang['COLOR_SUCCESS']        = 'Done!';

//\\==\ GENERAL /==//\\

$lang['CONCERN_1']            = 'Waiting';
$lang['CONCERN_2']            = 'Request Received';
$lang['CONCERN_3']            = 'Redirecting';
$lang['CONCERN']              = 'Something went wrong';
$lang['CONTACT_REQUEST']      = 'Please inform the Developer';

//\\==\ 404.php /==//\\

$lang['PAGE_TITLE_404']       = '404 - Error';
$lang['HEADER_TITLE_404']     = 'Page Not Found';
$lang['MOTIVE_1_404']         = 'Did you spelled correctly the URL on your browser?';
$lang['MOTIVE_2_404']         = 'Did you followed an old link from a website?';
$lang['MOTIVE_3_404']         = 'Did you followed a broken link within this website?';

//\\==\ 100.php /==//\\

$lang['PAGE_TITLE_100']       = '100 - Response';
$lang['HEADER_TITLE_100']     = 'Continue';
$lang['MOTIVE_1_100']         = 'You should continue with the request.';
$lang['MOTIVE_2_100']         = 'If the request has already been completed, ignore this response.';
$lang['MOTIVE_3_100']         = 'The server MUST send a final response after the request has been completed.';
	
//\\==\ 101.php /==//\\

$lang['PAGE_TITLE_101']       = '101 - Response';
$lang['HEADER_TITLE_101']     = 'Switching Protocols';
$lang['MOTIVE_1_101']         = 'The server understands and is willing to comply with your request.';
$lang['MOTIVE_2_101']         = 'The server will switch protocols to those defined by the response.';
$lang['MOTIVE_3_101']         = '';

//\\==\ 200.php /==//\\

$lang['PAGE_TITLE_200']       = '200 - Request';
$lang['HEADER_TITLE_200']     = 'OK';
$lang['MOTIVE_1_200']         = 'The request has succeeded.';
$lang['MOTIVE_2_200']         = 'The information returned is dependent on the method used in the request, such as:';
$lang['MOTIVE_3_200']         = 'GET - HEAD - POST - TRACE';

//\\==\ 201.php /==//\\

$lang['PAGE_TITLE_201']       = '201 - Request';
$lang['HEADER_TITLE_201']     = 'Created';
$lang['MOTIVE_1_201']         = 'The request has been fulfilled and resulted in a new resource being created.';
$lang['MOTIVE_2_201']         = 'The entity format is specified by the media type given in the Content-Type header field.';
$lang['MOTIVE_3_201']         = 'The origin server created the resource before returning the 201 status code.';

//\\==\ 202.php /==//\\

$lang['PAGE_TITLE_202']       = '202 - Request';
$lang['HEADER_TITLE_202']     = 'Accepted';
$lang['MOTIVE_1_202']         = 'The request has been accepted for processing';
$lang['MOTIVE_2_202']         = 'But the processing has not been completed';
$lang['MOTIVE_3_202']         = 'The request might or might not eventually be disallowed';

//\\==\ 203.php /==//\\

$lang['PAGE_TITLE_203']       = '203 - Request';
$lang['HEADER_TITLE_203']     = 'Non-Authoritative Information';
$lang['MOTIVE_1_203']         = 'The returned metainformation in the entity-header is not the definitive from the origin server';
$lang['MOTIVE_2_203']         = 'Metainformation is gathered from a local or a third-party copy';
$lang['MOTIVE_3_203']         = 'The set presented MAY be a subset or superset of the original version.';

//\\==\ 204.php /==//\\

$lang['PAGE_TITLE_204']       = '204 - Request';
$lang['HEADER_TITLE_204']     = 'No Content';
$lang['MOTIVE_1_204']         = 'The server has fulfilled the request.';
$lang['MOTIVE_2_204']         = 'No Content was Found.';
$lang['MOTIVE_3_204']         = '';

//\\==\ 205.php /==//\\

$lang['PAGE_TITLE_205']       = '205 - Request';
$lang['HEADER_TITLE_205']     = 'Reset Content';
$lang['MOTIVE_1_205']         = 'The server has fulfilled the request.';
$lang['MOTIVE_2_205']         = 'The user agent SHOULD reset the document view which caused this request.';
$lang['MOTIVE_3_205']         = 'The response MUST NOT include an entity.';

//\\==\ 206.php /==//\\

$lang['PAGE_TITLE_206']       = '206 - Request';
$lang['HEADER_TITLE_206']     = 'Partial Content';
$lang['MOTIVE_1_206']         = 'The server has fulfilled the partial GET request for the resource.';
$lang['MOTIVE_2_206']         = 'The request MUST have included a Range header field indicating the desired range.';
$lang['MOTIVE_3_206']         = '';

//\\==\ 300.php /==//\\

$lang['PAGE_TITLE_300']       = '300 - Error';
$lang['HEADER_TITLE_300']     = 'Multiple Choices';
$lang['MOTIVE_1_300']         = 'If the server has a preferred choice of representation, it SHOULD include the specific URI';
$lang['MOTIVE_2_300']         = 'User agents MAY use the Location field value for automatic redirection.';
$lang['MOTIVE_3_300']         = 'This response is cacheable unless indicated otherwise. ';

//\\==\ 301.php /==//\\

$lang['PAGE_TITLE_301']       = '301 - Error';
$lang['HEADER_TITLE_301']     = 'Moved Permanently';
$lang['MOTIVE_1_301']         = 'The requested resource has been assigned a new permanent URI';
$lang['MOTIVE_2_301']         = 'The new permanent URI SHOULD be given by the Location field in the response.';
$lang['MOTIVE_3_301']         = 'Note: When automatically redirecting a POST request after
                                 <br>receiving a 301 status code, some existing HTTP/1.0 user agents
                                 <br>will erroneously change it into a GET request.';

//\\==\ 302.php /==//\\

$lang['PAGE_TITLE_302']       = '302 - Error';
$lang['HEADER_TITLE_302']     = 'Found';
$lang['MOTIVE_1_302']         = 'The requested resource resides temporarily under a different URI.';
$lang['MOTIVE_2_302']         = 'The temporary URI SHOULD be given by the Location field in the response.';
$lang['MOTIVE_3_302']         = 'The user agent MUST NOT automatically redirect the request unless it can be confirmed by the user.';

//\\==\ 303.php /==//\\

$lang['PAGE_TITLE_303']       = '303 - Error';
$lang['HEADER_TITLE_303']     = 'See Other';
$lang['MOTIVE_1_303']         = 'The response to the request can be found under a different URI.';
$lang['MOTIVE_2_303']         = 'The new URI is not a substitute reference for the originally requested resource.';
$lang['MOTIVE_3_303']         = 'The different URI SHOULD be given by the Location field in the response.';

//\\==\ 304.php /==//\\

$lang['PAGE_TITLE_304']       = '304 - Error';
$lang['HEADER_TITLE_304']     = 'Not Modified';
$lang['MOTIVE_1_304']         = 'The client has performed a conditional GET request and access is allowed, but the document has not been modified.';
$lang['MOTIVE_2_304']         = 'If an entity is not currently cached, then the cache MUST disregard the response and repeat the request.';
$lang['MOTIVE_3_304']         = 'The cache MUST update the entry to reflect any new field values given in the response.';

//\\==\ 305.php /==//\\

$lang['PAGE_TITLE_305']       = '305 - Error';
$lang['HEADER_TITLE_305']     = 'Use Proxy';
$lang['MOTIVE_1_305']         = 'The requested resource MUST be accessed through the proxy given by the Location field.';
$lang['MOTIVE_2_305']         = 'The recipient is expected to repeat this single request via the proxy.';
$lang['MOTIVE_3_305']         = 'This responses is generated by the origin server.';


//\\==\ 307.php /==//\\

$lang['PAGE_TITLE_307']       = '307 - Error';
$lang['HEADER_TITLE_307']     = 'Temporary Redirect';
$lang['MOTIVE_1_307']         = 'The requested resource resides temporarily under a different URI.';
$lang['MOTIVE_2_307']         = 'The client SHOULD continue to use the Request-URI for future requests.';
$lang['MOTIVE_3_307']         = 'The user agent MUST NOT automatically redirect the request unless it can be confirmed by the user.';

//\\==\ 400.php /==//\\

$lang['PAGE_TITLE_400']       = '400 - Error';
$lang['HEADER_TITLE_400']     = 'Bad Request';
$lang['MOTIVE_1_400']         = 'The request could not be understood by the server due to malformed syntax.';
$lang['MOTIVE_2_400']         = 'The client SHOULD NOT repeat the request without modifications.';
$lang['MOTIVE_3_400']         = '';

//\\==\ 401.php /==//\\

$lang['PAGE_TITLE_401']       = '401 - Error';
$lang['HEADER_TITLE_401']     = 'Authorization Required';
$lang['MOTIVE_1_401']         = 'The request requires user authentication.';
$lang['MOTIVE_2_401']         = 'The response MUST include a WWW-Authenticate header field containing a challenge applicable to the requested resource.';
$lang['MOTIVE_3_401']         = 'If the request already included Authorization credentials, then the authorization has been refused for those credentials.';

//\\==\ 402.php /==//\\

$lang['PAGE_TITLE_402']       = '402 - Error';
$lang['HEADER_TITLE_402']     = 'Payment Required';
$lang['MOTIVE_1_402']         = 'Payment has not been completed';
$lang['MOTIVE_2_402']         = '';
$lang['MOTIVE_3_402']         = '';

//\\==\ 403.php /==//\\

$lang['PAGE_TITLE_403']       = '403 - Error';
$lang['HEADER_TITLE_403']     = 'Forbidden';
$lang['MOTIVE_1_403']         = 'The server understood the request, but is refusing to fulfill it.';
$lang['MOTIVE_2_403']         = 'Authorization will not help and the request SHOULD NOT be repeated.';
$lang['MOTIVE_3_403']         = '';

//\\==\ 405.php /==//\\

$lang['PAGE_TITLE_405']       = '405 - Error';
$lang['HEADER_TITLE_405']     = 'Method Not Allowed';
$lang['MOTIVE_1_405']         = 'The method specified in the Request-Line is not allowed for the resource identified by the Request-URI.';
$lang['MOTIVE_2_405']         = 'The response MUST include an Allow header containing a list of valid methods for the requested resource. ';
$lang['MOTIVE_3_405']         = '';

//\\==\ 406.php /==//\\

$lang['PAGE_TITLE_406']       = '406 - Error';
$lang['HEADER_TITLE_406']     = 'Not Acceptable';
$lang['MOTIVE_1_406']         = 'Unless it was a HEAD request, the response SHOULD include an entity containing a list of available entity characteristics and location(s) from which the user or user agent can choose the one most appropriate.';
$lang['MOTIVE_2_406']         = 'The entity format is specified by the media type given in the Content-Type header field.';
$lang['MOTIVE_3_406']         = 'Depending upon the format and the capabilities of the user agent, selection of the most appropriate choice MAY be performed automatically.';

//\\==\ 407.php /==//\\

$lang['PAGE_TITLE_407']       = '407 - Error';
$lang['HEADER_TITLE_407']     = 'Proxy Authentication Required';
$lang['MOTIVE_1_407']         = 'The proxy MUST return a Proxy-Authenticate header field containing a challenge applicable to the proxy for the requested resource.';
$lang['MOTIVE_2_407']         = 'The client MAY repeat the request with a suitable Proxy-Authorization header field.';
$lang['MOTIVE_3_407']         = '';

//\\==\ 408.php /==//\\

$lang['PAGE_TITLE_408']       = '408 - Error';
$lang['HEADER_TITLE_408']     = 'Request Time-Out';
$lang['MOTIVE_1_408']         = 'The client did not produce a request within the time that the server was prepared to wait.';
$lang['MOTIVE_2_408']         = 'The client MAY repeat the request without modifications at any later time.';
$lang['MOTIVE_3_408']         = '';

//\\==\ 409.php /==//\\

$lang['PAGE_TITLE_409']       = '409 - Error';
$lang['HEADER_TITLE_409']     = 'Conflict';
$lang['MOTIVE_1_409']         = 'The request could not be completed due to a conflict with the current state of the resource.';
$lang['MOTIVE_2_409']         = 'Conflicts are most likely to occur in response to a PUT request.';
$lang['MOTIVE_3_409']         = '';

//\\==\ 410.php /==//\\

$lang['PAGE_TITLE_410']       = '410 - Error';
$lang['HEADER_TITLE_410']     = 'Gone';
$lang['MOTIVE_1_410']         = 'The requested resource is no longer available at the server and no forwarding address is known.';
$lang['MOTIVE_2_410']         = 'This condition is expected to be considered permanent.';
$lang['MOTIVE_3_410']         = '';

//\\==\ 411.php /==//\\

$lang['PAGE_TITLE_411']       = '411 - Error';
$lang['HEADER_TITLE_411']     = 'Length Required';
$lang['MOTIVE_1_411']         = 'The server refuses to accept the request without a defined Content- Length.';
$lang['MOTIVE_2_411']         = 'The client MAY repeat the request if it adds a valid Content-Length header field containing the length of the message-body in the request message.';
$lang['MOTIVE_3_411']         = '';

//\\==\ 412.php /==//\\

$lang['PAGE_TITLE_412']       = '412 - Error';
$lang['HEADER_TITLE_412']     = 'Precondition Failed';
$lang['MOTIVE_1_412']         = 'The precondition given in one or more of the request-header fields evaluated to false when it was tested on the server. ';
$lang['MOTIVE_2_412']         = 'This response code allows the client to place preconditions on the current resource metainformation.';
$lang['MOTIVE_3_412']         = 'It prevent the requested method from being applied to a resource other than the one intended. ';

//\\==\ 413.php /==//\\

$lang['PAGE_TITLE_413']       = '413 - Error';
$lang['HEADER_TITLE_413']     = 'Request Entity Too Large';
$lang['MOTIVE_1_413']         = 'The server is refusing to process a request because the request entity is larger than the server is willing or able to process';
$lang['MOTIVE_2_413']         = 'The server MAY close the connection to prevent the client from continuing the request.';
$lang['MOTIVE_3_413']         = '';

//\\==\ 414.php /==//\\

$lang['PAGE_TITLE_414']       = '414 - Error';
$lang['HEADER_TITLE_414']     = 'Request-URI Too Long';
$lang['MOTIVE_1_414']         = 'The server is refusing to service the request because the Request-URI is longer than the server is willing to interpret.';
$lang['MOTIVE_2_414']         = 'Is the redirected URI prefix pointing to a suffix of itself?';
$lang['MOTIVE_3_414']         = 'The server may be under attack by a client attempting to exploit security holes.';

//\\==\ 415.php /==//\\

$lang['PAGE_TITLE_415']       = '415 - Error';
$lang['HEADER_TITLE_415']     = 'Unsupported Media Type';
$lang['MOTIVE_1_415']         = 'The server is refusing to service the request.';
$lang['MOTIVE_2_415']         = 'The entity of the request is in a format not supported by the requested resource.';
$lang['MOTIVE_3_415']         = '';

//\\==\ 416.php /==//\\

$lang['PAGE_TITLE_416']       = '416 - Error';
$lang['HEADER_TITLE_416']     = 'Requested Range Not Satisfiable';
$lang['MOTIVE_1_416']         = 'The request included a Range request-header field.';
$lang['MOTIVE_2_416']         = 'None of the range-specifier values in this field overlap the current extent of the selected resource.';
$lang['MOTIVE_3_416']         = 'The request did not include an If-Range request-header field.';

//\\==\ 417.php /==//\\

$lang['PAGE_TITLE_417']       = '417 - Error';
$lang['HEADER_TITLE_417']     = 'Expectation Failed';
$lang['MOTIVE_1_417']         = 'The expectation given in an Expect request-header field could not be met by this server.';
$lang['MOTIVE_2_417']         = 'If the server is a proxy, the server has unambiguous evidence that the request could not be met by the next-hop server.';
$lang['MOTIVE_3_417']         = '';

//\\==\ 500.php /==//\\

$lang['PAGE_TITLE_500']       = '500 - Error';
$lang['HEADER_TITLE_500']     = 'Internal Server Error';
$lang['MOTIVE_1_500']         = 'The server encountered an unexpected condition which prevented it from fulfilling the request.';
$lang['MOTIVE_2_500']         = '';
$lang['MOTIVE_3_500']         = '';

//\\==\ 501.php /==//\\

$lang['PAGE_TITLE_501']       = '501 - Error';
$lang['HEADER_TITLE_501']     = 'Not Implemented';
$lang['MOTIVE_1_501']         = 'The server does not support the functionality required to fulfill the request.';
$lang['MOTIVE_2_501']         = 'The server does not recognize the request method and is not capable of supporting it for any resource.';
$lang['MOTIVE_3_501']         = '';

//\\==\ 502.php /==//\\

$lang['PAGE_TITLE_502']       = '502 - Error';
$lang['HEADER_TITLE_502']     = 'Bad Gateway';
$lang['MOTIVE_1_502']         = 'The server, while acting as a gateway or proxy, received an invalid response from the upstream server is accessed in attempting to fulfill the request';
$lang['MOTIVE_2_502']         = '';
$lang['MOTIVE_3_502']         = '';

//\\==\ 503.php /==//\\

$lang['PAGE_TITLE_503']       = '503 - Error';
$lang['HEADER_TITLE_503']     = 'Service Unavailable';
$lang['MOTIVE_1_503']         = 'The server is currently unable to handle the request due to a temporary overloading or maintenance of the server.';
$lang['MOTIVE_2_503']         = 'The implication is that this is a temporary condition which will be alleviated after some delay';
$lang['MOTIVE_3_503']         = '';

//\\==\ 504.php /==//\\

$lang['PAGE_TITLE_504']       = '504 - Error';
$lang['HEADER_TITLE_504']     = 'Gateway Time-Out';
$lang['MOTIVE_1_504']         = 'The server, while acting as a gateway or proxy, did not receive a timely response from the upstream server specified by the URI';
$lang['MOTIVE_2_504']         = 'or some other auxiliary server (e.g. DNS) it needed to access in attempting to complete the request.';
$lang['MOTIVE_3_504']         = '';

//\\==\ 505.php /==//\\

$lang['PAGE_TITLE_505']       = '505 - Error';
$lang['HEADER_TITLE_505']     = 'HTTP Version Not Supported';
$lang['MOTIVE_1_505']         = 'The server does not support, or refuses to support, the HTTP protocol version that was used in the request message.';
$lang['MOTIVE_2_505']         = '';
$lang['MOTIVE_3_505']         = '';

?>