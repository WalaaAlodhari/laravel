<?php

interface EmailServiceInterface{
    public function sendEmail(string $to, string $subject, string $message);
}
