# Schuldhulp

Schuldhulp is een project van de Gemeente Amsterdam. Meer informatie over dit project is te vinden op de website van
het [Datalab van de Gemeente Amsterdam](https://www.amsterdam.nl/bestuur-organisatie/organisatie/overige/datalab-amsterdam/)

Meer informatie [datapunt.ois@amsterdam.nl](datapunt.ois@amsterdam.nl)

## Waarom is deze code gedeeld

De Gemeente Amsterdam vindt het belangrijk dat software die met publiek geld wordt
ontwikkeld ook publiek beschikbaar is.

## Onderhoud en security

Deze repository bevat een "as-is" kopie van het project op moment van publiceren.
Deze kopie wordt niet actief onderhouden.

## Wat mag ik met deze code

De Gemeente Amsterdam heeft deze code gepubliceerd onder de Mozilla Public License v2.
Een kopie van de volledige licentie tekst is opgenomen in het bestand LICENSE.

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

### Standaard accounts

Schulddossier maakt gebruik van een externe IDP voor gebruikers authenticatie.

### CSS genereren:

De css wordt vanuit `public/scss/screen.scss` naar `public/css/screen.css` gecompiled.

```aidl
npm install -g sass@1.32.13
sass public/scss/screen.scss public/css/screen.css --style compressed
```