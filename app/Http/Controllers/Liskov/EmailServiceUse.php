<?php

class EmailServiceUse{
    public function sendMessage($emailService){
        sendEmail($to ="halaa@gmil.com", $subject="email", $message="sending email");

    }

}
$emailService= new EmailServiceUse();
$emailService->sendMessage(new EmailService());
//$emailService->sendMessage(new EmailService2());
