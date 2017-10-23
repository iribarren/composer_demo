<?php

require 'vendor/autoload.php';

define("FILEPATH", "/var/tmp/error.txt");

// Create the Transport
$transport = new Swift_SendmailTransport('/usr/sbin/exim -bs');

$mailer = new Swift_Mailer($transport);

echo "Checking for /var/tmp/error.txt".PHP_EOL;
$i=1;

while (true) {
    if ($i % 10 == 0) {
        echo "still checking for errors";
    }
    if (file_exists(FILEPATH)) {
        //send email
        $message = (new Swift_Message('Wonderful Subject'))
            ->setFrom(['alertas@alertas.com' => 'Mr Alerta'])
            ->setTo(['iribarren.aritzz@gmail.com'])
            ->setBody('Here is the message itself')
        ;
        $result   = $mailer->send($message);
        
        //send slack notificacion
        $notifier = new SlackNotify\SlackNotifier();
        //once the nofitication is send wait 10 minutes to see that the error is fixed
        sleep(600);
    } else {
        //wait 30 seconds to check again
        sleep(30);
        $i++;
    }
}