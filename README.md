# Desplegament-web

Aplicació web per a sa gestió de productes electrònics i tèxtils d'una tenda online
que permet altes, baixes i modificacions de sa relació de productes disponibles en sa web 

### Prerequisits

Entorn de producció:
* Debian v12.4.0, SSH server, sense entorn gràfic
* Gestor de BBDD MariaDB v10.11.6 amb sa BBDD la_meva_botiga
* PHP 8.2.7(mòdul mbstring)
* Servidor web Apache v2.4.57 (mòdul de PHP libapache2-mod-php)
* PHPMyAdmin

Entorn de Desenvolupament:
* Windows 10
* Compte d'usuari en Github https://github.com
* Gestor de BBDD MariaDB amb una còpia de sa BBDD la_meva_botiga
* Visual C++
* Framework de PHP Symfony 
* PHP v8.3.6 (mòduls mbstring, mysqli)
* Notepad ++
* Git v2.44.0
* Java JDK v21.0.3
* Apache Netbeans v21
* phpDocumentor (https://phpdoc.org/phpDocumentor.phar)
* GitHub Desktop v3.3.14 

### Instal·lació

* Instal·lar en el client Windows tot el software indicat per l'entorn de desenvolupament en el mateix ordre.
* Des de sa web de GitHub generar un fork de https://github.com/CarlesCanals/Desplegament-web
* En l'equip client:
	* Generar una carpeta pel repositori local
	* Generar una clau SSH i afegir-la en GitHub per poder autenticar-nos en el repositori remot
	* Configurar en Git informació personal i per sincronitzar amb el repositori original 
	* Clonar el repositori remot en local: git clone git@github.com:<usuari>/<repositori>
	* Des de l'IDE Netbeans generar un nou projecte PHP amb ruta origen el repositori local i que s'executi com PHP Built-in Web Server
* Generar una nova branca develop on desenvolupar els nostres canvis  

## Execució de test

* Per validar el funcionament dels nostres scripts executar el projecte que serà accesible des de l’URL http://localhost:8000/Principal.php

## Desenvolupat amb

* [Apache Netbeans v21](https://netbeans.apache.org/front/main/index.html) - IDE
* [Java JDK v21](https://www.oracle.com/es/java/technologies/downloads/#jdk21-windows) - Kit de desenvolupament de Java
* [Symfony](https://symfony.com/download) - Framework de PHP 
* [PHP](https://windows.php.net/download) - Intèrprete de PHP

## Autors

* **Joan Rebassa Oliver** - [Desplegament-web](https://github.com/jrebassa/Desplegament-web.git)

## Agraïments

Fork de https://github.com/CarlesCanals/Desplegament-web.git

