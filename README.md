# Schuldhulp

Schuldhulp is een project van de Gemeente Amsterdam. Meer informatie over dit project is te vinden op de website van het [Datalab van de Gemeente Amsterdam](https://www.amsterdam.nl/bestuur-organisatie/organisatie/overige/datalab-amsterdam/)

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

### Lokale ontwikkeling met Docker Compose (zonder Kubernetes)

Benodigd: Docker met Compose v2 en `make`. PHP, Composer, Node en npm draaien
in containers; een Kubernetes-cluster, registry of lokale `.env` is niet nodig.

#### Eerste keer starten

Voer de onderstaande `make`-commando's uit vanuit de root van de
**schulddossier-repository**, niet vanuit `salmagundi-kubernetes-dev-env`.
Vanuit die laatste map ga je eerst naar het project:

```sh
cd ../apps/schulddossier
```

Voeg eenmalig de volgende regel toe aan `/etc/hosts` (op Windows:
`C:\Windows\System32\drivers\etc\hosts`) voor de lokale inlogserver:

```text
127.0.0.1 keycloak.schulddossier.test
```

```sh
make dev-up
make dev-init  # Alleen de eerste keer; bevestig het laden van de testgegevens.
```

De eerste start bouwt het PHP-image en installeert `composer.lock` en
`package-lock.json`. Dit kan enkele minuten duren. De stack staat apart in
`docker-compose.dev.yml`; de bestaande deploymentbestanden en `make dev`
(Kubycat) blijven ongewijzigd.

| Onderdeel                     | URL                                     | Account / wachtwoord               |
| ----------------------------- | --------------------------------------- | ---------------------------------- |
| Schulddossier                 | http://localhost:8080                   | `schulddossier_admin` / `insecure` |
| Keycloak beheer               | http://keycloak.schulddossier.test:8084 | `admin` / `insecure`               |
| Mailpit (onderschepte e-mail) | http://localhost:8025                   | Geen                               |

Ook `schulddossier_gka`, `schulddossier_gka_appbeheerder`, `schulddossier_shv`
en `schulddossier_shv_keyuser` kunnen inloggen met `insecure`. De rollen komen
uit de applicatiedatabase, gevuld door de fixtures. Het account
`schulddossier_disabled` is in Keycloak beschikbaar om de blokkade door de
applicatie te testen. De oude standaardaccounts hieronder horen niet bij deze stack.

`keycloak.schulddossier.test` verwijst via het hosts-bestand naar de eigen
computer en binnen Compose via een DNS-alias naar de Keycloak-container.
Gebruik hier geen `*.localhost`: PHP/cURL verbindt daarmee altijd met loopback,
ook als Docker een DNS-alias heeft.

#### Dagelijks ontwikkelen

```sh
make dev-up      # Starten of hervatten; bestaande gegevens blijven behouden.
```

Open http://localhost:8080 en bewerk de broncode in je editor. Je hoeft de
containers niet opnieuw te bouwen voor wijzigingen aan PHP, Twig, JavaScript
of Sass. Voer `make dev-init` niet bij elke start uit: dat commando vervangt
de applicatiegegevens met fixtures.

Na wijzigingen aan PHP-extensies of het development-Dockerfile bouwt
`make dev-up` het PHP-image opnieuw. Na wijzigingen aan `composer.lock` of
`package-lock.json` herstart je de betreffende container om de dependencies
opnieuw te installeren:

```sh
docker compose -f docker-compose.dev.yml restart php     # Composer-dependencies.
docker compose -f docker-compose.dev.yml restart assets  # npm-dependencies.
```

**HMR en debuggen**

- PHP, Twig en frontendbroncode zijn rechtstreeks vanuit deze checkout gekoppeld.
- Symfony draait met `APP_ENV=dev`, `APP_DEBUG=1` en de webprofiler; OPcache staat uit.
- Encore draait als development server: Sass/CSS gebruikt HMR, JavaScriptwijzigingen
  worden waar nodig gevolgd door een paginaherlading. PHP- en Twigwijzigingen
  activeren eveneens een herlading. Assets en de WebSocket lopen via Nginx op
  dezelfde origin, zonder extra publieke frontendpoort of aangepaste CSP.
- Werkt bestanddetectie niet op Docker Desktop? Start opnieuw met
  `WATCH_POLL=1 make dev-up`.
- Xdebug is beschikbaar op poort 9003 van de host en start alleen met een
  `XDEBUG_TRIGGER` (bijvoorbeeld via een browserextensie). Stel in de IDE de
  servernaam `SCHULDDOSSIER` en padmapping van deze checkout naar `/var/www` in.
  Met `XDEBUG_MODE=off make dev-up` kan Xdebug uit.

#### Handige commands

```sh
make dev-logs     # Containerlogs volgen.
make dev-shell    # Shell voor bijvoorbeeld php bin/console ...
make dev-migrate  # Nieuwe databasemigraties uitvoeren, zonder fixtures te wissen.
make dev-down    # Stoppen; database en uploads blijven behouden.
make dev-test    # Compose-configuratie en lokale loginconfiguratie controleren.
make dev-smoke   # Draaiende stack testen: HTTP, assets en volledige OIDC-login.
```

De optionele testcommando's vereisen Python 3 op de host; `dev-smoke` ook `curl`.

#### Gegevens en configuratie

`make dev-init` laadt fixtures en **vervangt bestaande applicatiegegevens** na
bevestiging. Starten en herstarten laden nooit automatisch fixtures of migraties.
PostgreSQL en Keycloak gebruiken benoemde volumes; uploads staan in de genegeerde
mappen `var/data` en `public/localworkingstorage` in deze checkout. Verwijder geen
volumes tenzij je de lokale gegevens echt wilt wissen.

`make` geeft de eigen UID/GID door, zodat gegenereerde bestanden niet van root zijn.
Zonder `make` is het equivalente startcommando:

```sh
LOCAL_UID=$(id -u) LOCAL_GID=$(id -g) docker compose -f docker-compose.dev.yml up -d --build
```

De stack publiceert alleen op `127.0.0.1`. `APP_PORT` (standaard 8080) en
`MAIL_PORT` (standaard 8025) zijn instelbaar, bijvoorbeeld
`APP_PORT=8090 make dev-up`. Voeg bij een afwijkende applicatiepoort de nieuwe
callback-URL `http://localhost:8090/*` toe aan de Keycloak-client `schulddossier`
via de beheerconsole. De realmimport wordt alleen toegepast als de realm nog
niet bestaat; wijzigingen aan het importbestand vervangen een bestaande realm niet.

De defaults in `docker/dev/app.env` gebruiken lokale bestandsopslag en lege
Azure-/Swiftgegevens. PostgreSQL krijgt bij een nieuwe database de extensie
`fuzzystrmatch` voor het zoeken op cliëntnamen. Allegro is bewust **niet verbonden**; SOAP-acties vereisen
een bereikbaar testendpoint en eventuele VPN-toegang. Voor afwijkende instellingen
kun je een apart Compose-overridebestand met `php.environment` meegeven. Gebruik
geen productiegegevens: dit is een onveilige, uitsluitend lokale ontwikkelomgeving.

### Standaard accounts

De volgende accounts worden tijdens de installatie aangemaakt. Wijzig de gegevens na de installatie!

    gebruikersnaam: gka1 / wachtwoord: test12345
    gebruikersnaam: madi1 / wachtwoord: test12345
    gebruikersnaam: admin1 / wachtwoord: test12345

### CSS genereren:

De css wordt vanuit `public/scss/screen.scss` naar `public/css/screen.css` gecompiled.

```aidl
npm install -g sass@1.32.13
sass public/scss/screen.scss public/css/screen.css --style compressed
```
