<?php

require 'vendor/autoload.php';
require 'config.php';

define("FILEPATH", "/var/tmp/error.txt");

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername($username)
  ->setPassword($password);

$mailer = new Swift_Mailer($transport);

echo "Checking for /var/tmp/error.txt".PHP_EOL;
$i=1;

while (true) {
    if ($i % 10 == 0) {
        echo "still checking for errors";
    }
    if (file_exists(FILEPATH)) {
        echo "Error! enviando notificacion...".PHP_EOL;
        //send email
        $message = (new Swift_Message('alerta!'))
            ->setFrom(['alertas@alertas.com' => 'Mr Alerta'])
            ->setTo(['iribarren.aritz@gmail.com'])
            ->setBody('Hay un error!')
        ;
        $result   = $mailer->send($message);
        //send slack notificacion
        $notifier = new SlackNotify\SlackNotifier();
        $notifier = new SlackNotify\SlackNotifier();
        $notifier->setSlackWebHookUrl( "https://hooks.slack.com/services/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 ");
        $notifier->setText("Alerta!");
        $notifier->setChannel("#aleatorio");
        $notifier->setUserName("ALERT BOT");
        $notifier->setIconEmoji(":robot_face:");
        $notifier->notify();
        //once the nofitication is send wait 10 minutes to see that the error is fixed
        sleep(600);
    } else {
        //wait 30 seconds to check again
        sleep(30);
        $i++;
    }
}
