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
 Language  : Italiano
 Translator: Francesco Sorrentino
|----------------------------------|
\*================================*/
$lang = array();

//\\====\ index.php /====//\\

$lang['HEADER_TITLE_INDEX']   = 'Settaggi';
$lang['PRELOADER']            = 'Preloader';
$lang['PREL_IMAGE']           = 'Immagine Loader';
$lang['INDEX_TITLE']          = 'Codici di stato HTTP personalizzato';
$lang['LANGUAGE']             = 'Linguaggio';
$lang['SELECT']               = 'Seleziona';
$lang['YES']                  = 'Si';
$lang['NO']                   = 'No';
$lang['SELECT_LANGUAGE']      = 'Seleziona Linguaggio';
$lang['CHANGE']               = 'Cambia';
$lang['BACKGROUND_IMAGE']     = 'Immagine di sfondo';
$lang['BACKGROUND_COLOR']     = 'Colore di sfondo';
$lang['PAGES']                = 'Pagine';
$lang['SETTINGS']             = 'Settaggi';
$lang['SITE_URL']             = 'Sito Url';
$lang['CONTACT_METHOD']       = 'Metodo di Contatto';
$lang['CONTACT_METHOD_1']     = 'Scegli Metodo';
$lang['CONTACT_METHOD_2']     = 'Form di contatto';
$lang['CONTACT_METHOD_3']     = 'Indirizzo Email';
$lang['FORM_PATH']            = 'Percorso Form';
$lang['IMAGE_TYPE']           = 'Solo png, jpg e gif file sono supportati.'; 
$lang['IMAGE_SIZE_PREL']      = 'Spiacente, (MAX: Width = 300px, Height = 300px)';
$lang['IMAGE_SIZE_ICO']       = 'Spiacente, (MAX: Width = 32px, Height = 32px)';
$lang['IMAGE_SIZE_ICO_57']    = 'Spiacente, (MAX: Width = 57px, Height = 57px)';
$lang['IMAGE_SIZE_ICO_72']    = 'Spiacente, (MAX: Width = 72px, Height = 72px)';
$lang['IMAGE_SIZE_ICO_114']   = 'Spiacente, (MAX: Width = 114px, Height = 114px)';
$lang['IMAGE_SIZE_ICO_144']   = 'Spiacente, (MAX: Width = 144px, Height = 144px)';
$lang['ICONS_TITLE']          = 'Icone';
$lang['ICON_FAV_TITLE']       = '32x32';
$lang['ICON_57_TITLE']        = '57x57';
$lang['ICON_72_TITLE']        = '72x72';
$lang['ICON_114_TITLE']       = '114x114';
$lang['ICON_144_TITLE']       = '144x144';
$lang['ICON_IMAGE']           = 'Immagine Favicon';
$lang['ICON_IMAGE_57']        = 'Apple Icona 57x57';
$lang['ICON_IMAGE_72']        = 'Apple Icona 72x72';
$lang['ICON_IMAGE_114']       = 'Apple Icona 114x114';
$lang['ICON_IMAGE_144']       = 'Apple Icona 144x144';
$lang['SUBMIT_BUTTON']        = 'Imposta';
$lang['ERROR_WRITE_MAIN']     = 'IMPORTANTE!! La cartella "/errors" è inscrivibile. Imposta il permesso corretto, prima di riprovare.';
$lang['ERROR_WRITE_IMG']      = 'IMPORTANTE!! La cartella "/errors/img" è inscrivibile. Imposta il permesso corretto, prima di riprovare.';
$lang['ERROR_WRITE_ICO']      = 'IMPORTANTE!! La cartella "/errors/img/ico" è inscrivibile. Imposta il permesso corretto, prima di riprovare.';
$lang['ERROR_WRITE_CSS']      = 'IMPORTANTE!! La cartella"/errors/css" è inscrivibile. Imposta il permesso corretto, prima di riprovare.';
$lang['COLOR_SUCCESS']        = 'Fatto!';

//\\==\ GENERAL /==//\\

$lang['CONCERN_1']            = 'In attesa';
$lang['CONCERN_2']            = 'Richiesta Receivuta';
$lang['CONCERN_3']            = 'Reindirizzare';
$lang['CONCERN']              = 'Qualcosa è andato storto';
$lang['CONTACT_REQUEST']      = 'Si prega di informare gli sviluppatori';

//\\==\ 404.php /==//\\

$lang['PAGE_TITLE_404']       = '404 - Errore';
$lang['HEADER_TITLE_404']     = 'Pagina non Trovata';
$lang['MOTIVE_1_404']         = "Hai digitato correttamente l'URL nel browser?";
$lang['MOTIVE_2_404']         = "Hai seguito un vecchio link da un sito web?";
$lang['MOTIVE_3_404']         = "Hai seguito un link non funzionante all'interno di questo sito?";

//\\==\ 100.php /==//\\

$lang['PAGE_TITLE_100']       = '100 - Risposta';
$lang['HEADER_TITLE_100']     = 'Continua';
$lang['MOTIVE_1_100']         = 'Si dovrebbe continuare con la richiesta';
$lang['MOTIVE_2_100']         = 'Se la richiesta è già stata completata, ignora questa risposta.';
$lang['MOTIVE_3_100']         = 'Il server deve inviare una risposta definitiva dopo che la richiesta è stata completata.';
	
//\\==\ 101.php /==//\\

$lang['PAGE_TITLE_101']       = '101 - Risposta';
$lang['HEADER_TITLE_101']     = 'Commutazione protocolli';
$lang['MOTIVE_1_101']         = 'Il server capisce ed è disposto a soddisfare la sua richiesta.';
$lang['MOTIVE_2_101']         = 'Il server passa protocolli a quelli definiti dalla risposta.';
$lang['MOTIVE_3_101']         = '';

//\\==\ 200.php /==//\\

$lang['PAGE_TITLE_200']       = '200 - Richiesta';
$lang['HEADER_TITLE_200']     = 'OK';
$lang['MOTIVE_1_200']         = 'La richiesta è riuscita con successo.';
$lang['MOTIVE_2_200']         = 'Le informazioni restituite dipendono dal metodo utilizzato nella richiesta, come ad esempio:';
$lang['MOTIVE_3_200']         = 'GET - HEAD - POST - TRACE';

//\\==\ 201.php /==//\\

$lang['PAGE_TITLE_201']       = '201 - Richiesta';
$lang['HEADER_TITLE_201']     = 'Creata';
$lang['MOTIVE_1_201']         = 'La richiesta è stata soddisfatta e ha portato in una nuova risorsa in fase di creazione.';
$lang['MOTIVE_2_201']         = 'Il formato entità è specificato dal tipo di supporto dato nel campo di intestazione Content-Type.';
$lang['MOTIVE_3_201']         = 'Il server di origine ha creato la risorsa prima di tornare questo codice di stato.';

//\\==\ 202.php /==//\\

$lang['PAGE_TITLE_202']       = '202 - Richiesta';
$lang['HEADER_TITLE_202']     = 'Accettato';
$lang['MOTIVE_1_202']         = "La richiesta è stata accettata per l'elaborazione";
$lang['MOTIVE_2_202']         = 'Ma la trasformazione non è stata completata';
$lang['MOTIVE_3_202']         = 'La richiesta potrebbe eventualmente essere annullata';

//\\==\ 203.php /==//\\

$lang['PAGE_TITLE_203']       = '203 - Richiesta';
$lang['HEADER_TITLE_203']     = 'Informazione non autorevole';
$lang['MOTIVE_1_203']         = "La metainformazione restituita nella entità d'intestazione non è la definitiva dal server di origine";
$lang['MOTIVE_2_203']         = 'Metainformazione viene raccolta da una copia di terze parti o dal server locale.';
$lang['MOTIVE_3_203']         = "L'insieme presentato, puo essere un sottoinsieme o superinsieme della versione originale.";

//\\==\ 204.php /==//\\

$lang['PAGE_TITLE_204']       = '204 - Richiesta';
$lang['HEADER_TITLE_204']     = 'Nessun contenuto';
$lang['MOTIVE_1_204']         = 'Il server ha soddisfatto la richiesta.';
$lang['MOTIVE_2_204']         = 'Nessun contenuto rilevato.';
$lang['MOTIVE_3_204']         = '';

//\\==\ 205.php /==//\\

$lang['PAGE_TITLE_205']       = '205 - Richiesta';
$lang['HEADER_TITLE_205']     = 'Contenuto di ripristino';
$lang['MOTIVE_1_205']         = 'Il server ha soddisfatto la richiesta.';
$lang['MOTIVE_2_205']         = "L'user-agent dovrebbe ripristinare la visualizzazione del documento che ha causato la richiesta.";
$lang['MOTIVE_3_205']         = "La risposta non deve includere un'entità.";

//\\==\ 206.php /==//\\

$lang['PAGE_TITLE_206']       = '206 - Richiesta';
$lang['HEADER_TITLE_206']     = 'Contenuto parziale';
$lang['MOTIVE_1_206']         = 'Il server ha soddisfatto la richiesta GET parziale per la risorsa.';
$lang['MOTIVE_2_206']         = "La richiesta deve includere un campo di intestazione, indicando l'intervallo desiderato.";
$lang['MOTIVE_3_206']         = '';


//\\==\ 300.php /==//\\

$lang['PAGE_TITLE_300']       = '300 - Errore';
$lang['HEADER_TITLE_300']     = 'Scelte multiple';
$lang['MOTIVE_1_300']         = 'Se il server dispone di una scelta preferita di rappresentanza, esso dovrebbe includere la specifica URI';
$lang['MOTIVE_2_300']         = 'Gli interpreti (User agents) possono utilizzare il valore del campo posizione per il reindirizzamento automatico.';
$lang['MOTIVE_3_300']         = 'Questa risposta è memorizzabile nella cache se non diversamente indicato.';

//\\==\ 301.php /==//\\

$lang['PAGE_TITLE_301']       = '301 - Errore';
$lang['HEADER_TITLE_301']     = 'Permanentemente Trasferito';
$lang['MOTIVE_1_301']         = 'La risorsa richiesta è stata assegnata  un nuovo URI permanente';
$lang['MOTIVE_2_301']         = 'Il nuovo URI permanente dovrebbe essere dato dal campo Posizione nella risposta.';
$lang['MOTIVE_3_301']         = 'Nota: Quando il reindirizzamento automatico ha una richiesta POST, dopo
                                  <br> aver ricevuto un codice di stato 301, alcuni agenti HTTP / 1.0 esistenti
                                  <br> erroneamente trasformano la stessa in una richiesta GET.';

//\\==\ 302.php /==//\\

$lang['PAGE_TITLE_302']       = '302 - Errore';
$lang['HEADER_TITLE_302']     = 'Trovato';
$lang['MOTIVE_1_302']         = 'La risorsa richiesta risiede temporaneamente in un diverso URI.';
$lang['MOTIVE_2_302']         = "L'URI temporanea dovrebbe essere dato dal campo Posizione nella risposta.";
$lang['MOTIVE_3_302']         = "L'user-agent non deve reindirizzare automaticamente la richiesta a meno che non può essere confermata dall'utente.";

//\\==\ 303.php /==//\\

$lang['PAGE_TITLE_303']       = '303 - Errore';
$lang['HEADER_TITLE_303']     = 'Vedi altri';
$lang['MOTIVE_1_303']         = 'La risorsa richiesta risiede temporaneamente in un diverso URI.';
$lang['MOTIVE_2_303']         = 'Il nuovo URI non è un riferimento sostituto per la risorsa originariamente richiesta.';
$lang['MOTIVE_3_303']         = 'Il diverso URI DOVREBBE essere dato dal campo Posizione nella risposta.';

//\\==\ 304.php /==//\\

$lang['PAGE_TITLE_304']       = '304 - Errore';
$lang['HEADER_TITLE_304']     = 'Non modificato';
$lang['MOTIVE_1_304']         = "Il cliente ha effettuato una richiesta GET condizionale ed è consentito l'accesso, ma il documento non è stato modificato.";
$lang['MOTIVE_2_304']         = "Un'entità non è attualmente memorizzato nella cache, quindi la cache deve ignorare la risposta e ripetere la richiesta.";
$lang['MOTIVE_3_304']         = "La cache deve aggiornare la voce per riflettere eventuali nuovi valori dei campi indicati nella risposta.";

//\\==\ 305.php /==//\\

$lang['PAGE_TITLE_305']       = '305 - Errore';
$lang['HEADER_TITLE_305']     = 'Usa un proxy';
$lang['MOTIVE_1_305']         = 'La risorsa richiesta deve essere raggiunta attraverso il proxy proposta dal campo Posizione.';
$lang['MOTIVE_2_305']         = 'Il destinatario prevede di ripetere questa singola richiesta tramite il proxy.';
$lang['MOTIVE_3_305']         = 'Questa risposta è generato dal server di origine.';


//\\==\ 307.php /==//\\

$lang['PAGE_TITLE_307']       = '307 - Errore';
$lang['HEADER_TITLE_307']     = 'Reindirizzazione Temporanea';
$lang['MOTIVE_1_307']         = 'La risorsa richiesta risiede temporaneamente in un diverso URI.';
$lang['MOTIVE_2_307']         = 'Il cliente deve continuare a utilizzare il Request-URI per le richieste future.';
$lang['MOTIVE_3_307']         = "L'user-agent non deve reindirizzare automaticamente la richiesta a meno che non può essere confermata dall'utente.";

//\\==\ 400.php /==//\\

$lang['PAGE_TITLE_400']       = '400 - Errore';
$lang['HEADER_TITLE_400']     = 'Brutta richiesta';
$lang['MOTIVE_1_400']         = 'La richiesta non PUÒ Essere compresa dal server a causa di sintassi errata.';
$lang['MOTIVE_2_400']         = 'Il cliente non deve ripetere la richiesta senza modifiche.';
$lang['MOTIVE_3_400']         = '';

//\\==\ 401.php /==//\\

$lang['PAGE_TITLE_401']       = '401 - Errore';
$lang['HEADER_TITLE_401']     = 'Autorizzazione Richiesta';
$lang['MOTIVE_1_401']         = "La richiesta richiede l'autenticazione dell'utente.";
$lang['MOTIVE_2_401']         = 'La risposta deve includere un campo di intestazione WWW-Authenticate contenente una sfida applicabile alla risorsa richiesta.';
$lang['MOTIVE_3_401']         = "Se la richiesta comprendeva già credenziali di autorizzazione, allora l'autorizzazione è stata respinta per le credenziali.";

//\\==\ 402.php /==//\\

$lang['PAGE_TITLE_402']       = '402 - Errore';
$lang['HEADER_TITLE_402']     = 'Pagamento richiesto';
$lang['MOTIVE_1_402']         = 'Il pagamento non è stato completato';
$lang['MOTIVE_2_402']         = '';
$lang['MOTIVE_3_402']         = '';

//\\==\ 403.php /==//\\

$lang['PAGE_TITLE_403']       = '403 - Errore';
$lang['HEADER_TITLE_403']     = 'Proibito';
$lang['MOTIVE_1_403']         = 'Il server ha capito la richiesta, ma si rifiuta di compierla.';
$lang['MOTIVE_2_403']         = "L'autorizzazione non aiuterà la richiesta e l'azione non deve essere ripetuta.";
$lang['MOTIVE_3_403']         = '';

//\\==\ 405.php /==//\\

$lang['PAGE_TITLE_405']       = '405 - Errore';
$lang['HEADER_TITLE_405']     = 'Operazione non permessa';
$lang['MOTIVE_1_405']         = 'Il metodo specificato nella Request-Line non è consentito per la risorsa identificata dal Request-URI.';
$lang['MOTIVE_2_405']         = 'La risposta deve includere un Allow header contenente un elenco dei metodi validi per la risorsa richiesta.';
$lang['MOTIVE_3_405']         = '';

//\\==\ 406.php /==//\\

$lang['PAGE_TITLE_406']       = '406 - Errore';
$lang['HEADER_TITLE_406']     = 'Non accettabile';
$lang['MOTIVE_1_406']         = "A meno che non si trattava di una richiesta HEAD, la risposta dovrebbe includere un'entità che contiene un elenco di caratteristiche di entità disponibili e posizione(i) da cui l'user-agent o utente può scegliere la più appropriata.";
$lang['MOTIVE_2_406']         = "Il formato entità è specificato dal tipo di supporto dato nel campo di intestazione Content-Type.";
$lang['MOTIVE_3_406']         = 'A seconda del formato e le capacità della user-agent, la selezione della scelta più appropriata può essere eseguita automaticamente.';

//\\==\ 407.php /==//\\

$lang['PAGE_TITLE_407']       = '407 - Errore';
$lang['HEADER_TITLE_407']     = 'Autenticazione proxy richiesta';
$lang['MOTIVE_1_407']         = 'La delega deve restituire un campo di intestazione Proxy-Authenticate contenente una sfida applicabile al proxy per la risorsa richiesta.';
$lang['MOTIVE_2_407']         = 'Il client può ripetere la richiesta di un adeguato campo di intestazione Proxy-Authorization.';
$lang['MOTIVE_3_407']         = '';

//\\==\ 408.php /==//\\

$lang['PAGE_TITLE_408']       = '408 - Errore';
$lang['HEADER_TITLE_408']     = 'Richiesta Time-Out';
$lang['MOTIVE_1_408']         = 'Il cliente non ha prodotto una richiesta entro il tempo che il server è stato disposto ad aspettare.';
$lang['MOTIVE_2_408']         = 'Il client può ripetere la richiesta senza modifiche in qualsiasi momento.';
$lang['MOTIVE_3_408']         = '';

//\\==\ 409.php /==//\\

$lang['PAGE_TITLE_409']       = '409 - Errore';
$lang['HEADER_TITLE_409']     = 'Conflitto';
$lang['MOTIVE_1_409']         = 'La richiesta non può essere completata a causa di un conflitto con lo stato attuale della risorsa.';
$lang['MOTIVE_2_409']         = 'I conflitti hanno più probabilità di verificarsi in risposta a una richiesta PUT.';
$lang['MOTIVE_3_409']         = '';

//\\==\ 410.php /==//\\

$lang['PAGE_TITLE_410']       = '410 - Errore';
$lang['HEADER_TITLE_410']     = 'Andato';
$lang['MOTIVE_1_410']         = 'La risorsa richiesta non è più disponibile sul server è e nessun indirizzo di inoltro è noto.';
$lang['MOTIVE_2_410']         = 'Questa condizione dovrebbe essere considerata permanente.';
$lang['MOTIVE_3_410']         = '';

//\\==\ 411.php /==//\\

$lang['PAGE_TITLE_411']       = '411 - Errore';
$lang['HEADER_TITLE_411']     = 'Lunghezza desiderata';
$lang['MOTIVE_1_411']         = 'Il server si rifiuta di accettare la richiesta senza un contenuto definito della Lunghezza.';
$lang['MOTIVE_2_411']         = 'Il client può ripetere la richiesta se aggiunge un Contenuto Lunghezza nel campo di intestazione valido, contenente la lunghezza del corpo del messaggio nel messaggio di richiesta.';
$lang['MOTIVE_3_411']         = '';

//\\==\ 412.php /==//\\

$lang['PAGE_TITLE_412']       = '412 - Errore';
$lang['HEADER_TITLE_412']     = 'Condizione preliminare non riuscita';
$lang['MOTIVE_1_412']         = 'La precondizione dato in uno o più dei campi di request-header è risultata falsa al momento del test sul server.';
$lang['MOTIVE_2_412']         = 'Questo codice di risposta consente al cliente di posizionare precondizioni sul metainformation risorsa corrente.';
$lang['MOTIVE_3_412']         = 'Il metodo richiesto viene applicato a una risorsa diversa da quella prevista.';

//\\==\ 413.php /==//\\

$lang['PAGE_TITLE_413']       = '413 - Errore';
$lang['HEADER_TITLE_413']     = 'Entità richiesta troppo grande';
$lang['MOTIVE_1_413']         = "Il server si rifiuta di elaborare una richiesta perché l'entità richiesta è più grande nella quale il server è disposto o in grado di elaborare";
$lang['MOTIVE_2_413']         = 'Il server può chiudere la connessione per evitare il cliente di continuare la richiesta.';
$lang['MOTIVE_3_413']         = '';

//\\==\ 414.php /==//\\

$lang['PAGE_TITLE_414']       = '414 - Errore';
$lang['HEADER_TITLE_414']     = 'Request-URI Troppo lungo';
$lang['MOTIVE_1_414']         = 'Il server rifiuta di servire la richiesta perché la richiesta-URI è più lunga dove il server è disposto ad interpretare.';
$lang['MOTIVE_2_414']         = 'È il prefisso URI reindirizzato, puntato a un suffisso a se stesso?';
$lang['MOTIVE_3_414']         = 'Il server può essere sotto attacco da parte di un cliente che cerca di sfruttare i buchi di sicurezza.';

//\\==\ 415.php /==//\\

$lang['PAGE_TITLE_415']       = '415 - Errore';
$lang['HEADER_TITLE_415']     = 'Stazioni mediatiche non supportate';
$lang['MOTIVE_1_415']         = 'Il server rifiuta di servire la richiesta.';
$lang['MOTIVE_2_415']         = "L'entità della richiesta è in un formato non supportato dalla risorsa richiesta.";
$lang['MOTIVE_3_415']         = '';

//\\==\ 416.php /==//\\

$lang['PAGE_TITLE_416']       = '416 - Errore';
$lang['HEADER_TITLE_416']     = 'Requested Range Not Satisfiable';
$lang['MOTIVE_1_416']         = 'The request included a Range request-header field.';
$lang['MOTIVE_2_416']         = 'None of the range-specifier values in this field overlap the current extent of the selected resource.';
$lang['MOTIVE_3_416']         = 'The request did not include an If-Range request-header field.';

//\\==\ 417.php /==//\\

$lang['PAGE_TITLE_417']       = '417 - Errore';
$lang['HEADER_TITLE_417']     = 'Aspettative non riuscita';
$lang['MOTIVE_1_417']         = "L'aspettativa data in un campo request-header non poteva essere soddisfatta da questo server.";
$lang['MOTIVE_2_417']         = 'Se il server è un proxy, il server ha la prova inequivocabile che la richiesta non poteva essere soddisfatta dal server next-hop.';
$lang['MOTIVE_3_417']         = '';

//\\==\ 500.php /==//\\

$lang['PAGE_TITLE_500']       = '500 - Errore';
$lang['HEADER_TITLE_500']     = 'Errore interno del server';
$lang['MOTIVE_1_500']         = 'Il server ha rilevato una condizione imprevista che ha impedito di soddisfare la richiesta.';
$lang['MOTIVE_2_500']         = '';
$lang['MOTIVE_3_500']         = '';

//\\==\ 501.php /==//\\

$lang['PAGE_TITLE_501']       = '501 - Errore';
$lang['HEADER_TITLE_501']     = 'Non implementato';
$lang['MOTIVE_1_501']         = 'Il server non supporta le funzionalità necessarie per soddisfare la richiesta.';
$lang['MOTIVE_2_501']         = 'Il server non riconosce il metodo di richiesta e non è in grado di sostenere qualsiasi risorsa.';
$lang['MOTIVE_3_501']         = '';

//\\==\ 502.php /==//\\

$lang['PAGE_TITLE_502']       = '502 - Errore';
$lang['HEADER_TITLE_502']     = 'Gateway non valido';
$lang['MOTIVE_1_502']         = 'Il server, attuando come un gateway o proxy, ha ricevuto una risposta non valida dal server upstream che accede nel tentativo di soddisfare la richiesta';
$lang['MOTIVE_2_502']         = '';
$lang['MOTIVE_3_502']         = '';

//\\==\ 503.php /==//\\

$lang['PAGE_TITLE_503']       = '503 - Errore';
$lang['HEADER_TITLE_503']     = 'Servizio non disponibile';
$lang['MOTIVE_1_503']         = 'Il server è attualmente in grado di gestire la richiesta a causa di un sovraccarico temporaneo o di manutenzione del server.';
$lang['MOTIVE_2_503']         = "L'implicazione è che questa è una condizione temporanea che verrà risolta dopo un certo ritardo.";
$lang['MOTIVE_3_503']         = '';

//\\==\ 504.php /==//\\

$lang['PAGE_TITLE_504']       = '504 - Errore';
$lang['HEADER_TITLE_504']     = 'Gateway Time-Out';
$lang['MOTIVE_1_504']         = 'Il server, attuando come un gateway o proxy, non ha ricevuto una risposta tempestiva dal server upstream specificato dal URI';
$lang['MOTIVE_2_504']         = 'O qualche altro server ausiliario (ad esempio DNS) è necessario per accedere nel tentativo di completare la richiesta.';
$lang['MOTIVE_3_504']         = '';

//\\==\ 505.php /==//\\

$lang['PAGE_TITLE_505']       = '505 - Errore';
$lang['HEADER_TITLE_505']     = 'Versione HTTP non supportata';
$lang['MOTIVE_1_505']         = 'Il server non supporta, o si rifiuta di sostenere, la versione del protocollo HTTP che è stato utilizzato nel messaggio di richiesta.';
$lang['MOTIVE_2_505']         = '';
$lang['MOTIVE_3_505']         = '';

?>