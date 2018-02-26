
# FIXXX Schuldhulp

FIXXX Schuldhulp is een project van de Gemeente Amsterdam. Meer informatie over dit project is te vinden op de website van het [Datalab van de Gemeente Amsterdam](https://www.amsterdam.nl/bestuur-organisatie/organisatie/overige/datalab-amsterdam/)

Meer informatie [datapunt.ois@amsterdam.nl](datapunt.ois@amsterdam.nl)


## Waarom is deze code gedeeld

Het FIXXX-team van de Gemeente Amsterdam ontwikkelt software voor de gemeente.
Veel van deze software wordt vervolgens als open source gepubliceerd zodat andere
gemeentes, organisaties en burgers de software als basis en inspiratie kunnen 
gebruiken om zelf vergelijkbare software te ontwikkelen.
De Gemeente Amsterdam vindt het belangrijk dat software die met publiek geld wordt
ontwikkeld ook publiek beschikbaar is.

## Onderhoud en security

Deze repository bevat een "as-is" kopie van het project op moment van publiceren.
Deze kopie wordt niet actief onderhouden.

## Wat mag ik met deze code

De Gemeente Amsterdam heeft deze code gepubliceerd onder de Mozilla Public License v2.
Een kopie van de volledige licentie tekst is opgenomen in het bestand LICENSE.

Het FIXXX-team heeft de verdere doorontwikkeling van deze software overgedragen 
aan de probleemeigenaar. De code in deze repository zal dan ook niet actief worden
bijgehouden door het FIXXX-team.

## Open Source

Dit project maakt gebruik van diverse andere Open Source software componenten. O.a. 
[Symfony](http://www.symfony.com), 
[Doctrine](http://www.doctrine-project.org/), 
[Composer](https://getcomposer.org/), 
[Monolog](https://github.com/Seldaek/monolog), 
[Twig](http://twig.sensiolabs.org/), 
[Swiftmailer](http://swiftmailer.org/)


## Installeren

Er zijn verschillende installatie methodes beschikbaar.

### Uitvoeren met interne PHP webserver (alleen voor development)

Zie voor meer informatie [https://symfony.com/doc/current/setup/built_in_web_server.html]

    git clone git@github.com:amsterdam/fixxx-schuldhulp.git
    cd fixxx-schuldhulp
    composer install
    php bin\console server:run 127.0.0.1:8080
  
De applicatie is nu beschikbaar in de browser door [http://127.0.0.1:8080] te openen in de browser.

### Installatie op (virtuele) server (geschikt voor development en productie)

Gebruik Apache met mod-php, Apache met PHP-FPM, Nginx met PHP-FPM of IIS. Gebruik minimaal PHP 7.1.

    git clone git@github.com:amsterdam/fixxx-schuldhulp.git
    cd fixxx-schuldhulp
    composer install
    php bin/console cache:clear --env=prod
    
Configueer tenslote een vhost van de webserver. Zie ook de specifieke handleiding per webserver [in de Symfony 4.0 handleiding](http://symfony.com/doc/current/setup/web_server_configuration.html)

### Installatie via Docker (productie)

Installeer via:

    git clone git@github.com:amsterdam/fixxx-schuldhulp.git
    cd fixxx-schuldhulp
    docker build -t schuldhulp-app .
    docker run -p 80:80 --name schuldhulp-app-instance schuldhulp-app

Verwijderen via:

    docker stop schuldhulp-app-instance
    docker rm schuldhulp-app-instance
    docker rmi schuldhulp-app

### Installatie via Docker (development)

Deze Docker maakt gebruikt van een Docker volume zodat er geen nieuwe build nodig is bij wijziging van code.

    git clone git@github.com:amsterdam/fixxx-schuldhulp.git
    cd fixxx-schuldhulp
    docker build -t schuldhulp-app-dev -f Dockerfile-dev .
    docker run -p 80:80 --volume "$(pwd)":/srv/app --name schuldhulp-app-dev-instance schuldhulp-app-dev

