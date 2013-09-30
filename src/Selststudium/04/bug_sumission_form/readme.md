Uebung/Selbststudium Veranstaltung04
===============

HTML5/CSS/PHP-Form für Bugfiling


* [x] bild/screenshot -> upload
* [x] prio -> slider
* [x] bugtype -> dropdown
* [x] rueckruf erforderlich -> 1 checkbox
* [x] reproduzierbar -> radio
* [x] datum -> datetime
* [-] re-captcha -> ext. library *fuckoff wer programmiert scho husufgabe wenner internet het*
* [x] password -> wird php-seitig validiert (reicht, wenn als Var im Script abgelegt)

* [x] required values: alle :) -> html5 - optional auch mit JS-Fallbacks

* validate:
* [x] mail -> html5 - optional auch mit JS-Fallbacks
* [x] website (http/s) -> html5 mit pattern - optional auch mit JS-Fallbacks
-> alles was client-seitig validiert wird, muss natürlich auch serverseitig validiert werden

* [-] mail auslösen mit uploaded file als attachment -> swift / phpmailer

* [x] speichern auf server FS -> inhalte des forms in datei + uploaded file (ev. mit einer sinnvollen ordner-struktur)

advanced++:
anbindung an dropbox API mit (credentials folgen per mail):
https://www.dropbox.com/developers/core/start/php
soll Ordner erstellen mit timestamp und mail-Adresse des Bug-Filers, sowie Files darin ablegen


Dropbox Credentials: 
Login: xobe@zhaw.ch
pass: g4pSSSewp

Um API-Kexs etc. für eure "App" müsst ihr euch selber kümmern :) - Der Dropbox-Account ist stozusagen freigegeben, um darauf zu basteln. 