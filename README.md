# COMPOSER

# INTRO

Diapositiva -> Intro

El objetivo de esta charla es presentar las herramientas que disponemos en el 
mundo PHP para compartir librerias, ya sea para utilizar librerias de terceros 
como para compartir nuestras propias librerias

Para hacer la charla lo más practica posible vamos a presentar una simple 
aplicación de alertas. Esta aplicación va a comprobar si un fichero existe en
nuestro sistema, y si es así enviara un correo y una notificación a un chat de 
Slack

Diapositiva -> Esquema app

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~php
<?php

define("FILEPATH", "/var/tmp/error.txt");

while (true) {
    if (file_exists(FILEPATH)) {
        //TODO send email
        //TODO send slack notificacion
        sleep(600);
    } else {
        //wait 30 seconds to check again
        sleep(30);
    }
}
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

La tarea de enviar emails lo haremos utilizando una libreria de terceros y para 
comunicarnos con slack utilizaremos nuestra propia libreria. 

# A LITTLE LOOK BACK

Para entender mejor los beneficios de composer, vamos a ver como podiamos realizar
estas tareas en el pasado. Por ejemplo, para buscar una libreria de envio de emails
teniamos estas opciones

Diapositiva -> a little look back

* Web
* https://www.phpclasses.org/ https://web.archive.org/web/20101224122659/http://www.phpclasses.org/package/9-PHP-PHP-mailer-to-compose-and-send-MIME-messages.html
* Soluciones propias(plugin, modules, components etc)
* PEAR

Estas opciones tienen algo en común, todas son como estar en la jungla

Diapositiva -> a little look back (abajo)

Problemas:

* dependecias
* mantenimiento
* PEAR: instalacion global: versiones
* incompatibilidad entre frameworks
* Autoload

# ENTER COMPOSER

Para intentar dar solución a estos problemas, nace composer. Composer hace uso 
de las nuevas funcionaldiades que se añaden a PHP, sobretodo los namespaces

Diapositiva: Enter composer

* Gestor de paquetes a nivel de aplicación
* Gestión de dependencias
* Inspirado en npm de node.js y bundler de ruby
* Repositorio de paquetes packagist.org
* Autoload (PSR-0, PSR-4)

Diapositiva -> PHP-FIG

* Que: Grupo de interoperabilidad de frameworks
* Objectivo: mejorar el ecosistema PHP
* Como: Recomendaciones de standares
* 

Para solucionar estos (y otros) problemas de PHP, en 2009 diferentes miembros de
la comunidad crearon PHP-FIG (Framework Interoperability Group) con la intención
de crear una serie de recomendaciones de estandares para la comunidad PHP.

#
