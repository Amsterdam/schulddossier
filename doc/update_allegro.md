./vendor/bin/soap-client wizard

 Where would you like to store your config file? [config/soap-client.php]:
 > config/soap-client-allegro.php


 Wsdl location (URL or path to file):
 > http://swappams2694.basis.lan:8084/SOAP?service=LoginService

 Generic name used to name this client (Results in <name>Client <name>Classmap etc.):
 > AllegroLogin

 Directory where the client should be generated in:
 > src/Allegro/Login

 Namespace for your client:
 > GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login

 This tool can set some basic code generation rules. This requires some knowledge of the SOAP service.
Take a look at the message section in the WSDL. Are you able to match request and response elements based on keywords?
These keywords are used in a case insensitive regex match with '/' delimiters, escape accordingly! (yes/no) [no]:
 > yes

 Keyword for matching request objects []:
 > (?<!Response)$

 Keyword for matching response objects []:
 > Response$
