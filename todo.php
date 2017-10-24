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
?>

<?php

require 'vendor/autoload.php';

define("FILEPATH", "/var/tmp/error.txt");

// Create the Transport
$transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');

$mailer = new Swift_Mailer($transport);

while (true) {
    if (file_exists(FILEPATH)) {
        echo "Error! enviando notificacion...".PHP_EOL;
        //send email
        $message = (new Swift_Message('Alerta!'))
            ->setFrom(['alertas@alertas.com' => 'Mr Alerta'])
            ->setTo(['recibir@notificaciones.com'])
            ->setBody('Parece que algo ha generado un error!')
        ;
        $result   = $mailer->send($message);
        
        //send slack notificacion
    } else {
        //wait 30 seconds to check again
        sleep(30);
    }
}
