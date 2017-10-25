# COMPOSER

# Diapositiva -> Intro

El objetivo de esta charla es presentar las herramientas que disponemos en el 
mundo PHP para compartir librerias, ya sea para utilizar librerias de terceros 
como para compartir nuestras propias librerias

# Diapositiva -> Esquema app

Para hacer la charla lo más practica posible vamos a presentar una simple 
aplicación de alertas. Esta aplicación va a comprobar si un fichero existe en
nuestro sistema, y si es así enviara un correo y una notificación a un chat de 
Slack

La tarea de enviar emails lo haremos utilizando una libreria de terceros y para 
comunicarnos con slack utilizaremos nuestra propia libreria. 

# Diapositiva -> a little look back

Para entender mejor los beneficios de composer, vamos a ver como podiamos realizar
estas tareas en el pasado. Por ejemplo, para buscar una libreria de envio de emails
teniamos estas opciones

Estas opciones tienen algo en común, todas son como estar en la jungla

- las depencias, totalmente manual
- las versiones tambien de manera manual
- dificil trabajar en equipo
- librerias con el mismo nombre
-

# Diapositiva -> composer

Para intentar dar solución a estos problemas, nace composer. Composer hace uso 
de las nuevas funcionaldiades que se añaden a PHP, sobretodo los namespaces, y 
de aprovecha las propuestas de estandar lanzadas por el PHP-FIG.

Permite configurar los paquetes a nivel de aplicación y gestiona las dependencias.
Tambien se encarga de la autocarga de clases. Pol ultimo cuenta con un repositorio
general donde almacenar los paquetes

# Diapositiva -> composer instalacion

Instalar composer es tan sencillo como ejecutar estos comandos. Podemos usar los 
parametros para indicar en que directorio queremos realizar la instalacion y que 
nombre darle al ejecutable (sino sera composer.phar). Es recomendable que lo 
instalemos en un directorio dentro del PATH del sistema

# Diapositiva -> Instalando una libreria

Para instalar una libreria no tenemos más que usar el comando require. Esto
añadira la dependecia de dicha libreria a nustro proyecto, que estará en el fichero 
composer.json e instalara los paquetes necesarios en la carpeta vendor/ de nuestro proyecto

Como vemos este fichero no tiene mucho misterio. Asi que como es posible que composer
haga todo eso que hemos explicado antes?

#Mostrar composer.lock

Este fichero congela las versiones de los paquetes en el momento en que son requeridas.
De esta manera distintas personas trabajando en el mismo proyecto estarán seguras de usar 
las mismas versiones.

# Diapositiva -> Usando la libreria

Una vez hemos añadido la dependencia de la libreria vamos a usar otra de las ventajas
de composer, la autocarga. Para contar con la libreria no tenemos más que incluir el fichero
'vendor/autoload.php' y ya estaremos listos para usar la libreria

# Diapositiva -> Composer creando nuestra libreria

Para crear nuestra libreria vamos a tener que estructurar nuestro código pensando en los namespaces.
Como hemos visto un paquete se define de como vendor/nombre_paquete. Se considera buena practica
tener una carpeta src/ en nuestro proyecto dondee y ahi crear las carpetas/namepsaces donde ira nuestro código

# Diapositiva -> Composer creando nuestra libreria II

Aqui podemos ver la configuracion de nuestro proyecto. Hemos añadido al nombre del paquete un identificador de
vendor

# Diapositiva -> Packagist

Una vez hemos creado nuestra libreria y hemos subido nuestro codigo a github,
podemos subirlo al repositorio packagist

Mostrar packagist

# Diapositiva -> Comandos

Explicar los comandos

# Diapositiva -> Conclusiones

PHP ha evolucionado mucho en los ultimos años. Se han añadido potentes funcionalidades
al lenguaje y la comunidad esta trabajando en establecer buenas practicas de trabajo. 
Espero que esta charla os haya podido servir de base para ver como es trabajar con composer
y que ya tengais ideas de como se podría mejorar este proyecto. Quizás usar algun patron para
hacer una clase que se encargue de las notificaciones en general...como se crearia ese paquete en composer
etc

# Diapositiva -> Preguntas

