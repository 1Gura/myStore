<?php
include_once $_SERVER['DOCUMENT_ROOT'] . './include/db.php';
const emailHost = 'gura.ilya2011@yandex.ru';
class Email
{
    private string $name;
    private string $surname;
    private string $phone;
    private string $email;
    private string $subject;
    private string $message;
    private string $feed;


    public function __construct($name = '', $surname = '', $phone = '', $email = '', $subject = '', $message = '', $feed = '')
    {
        $this->name = trim($name);
        $this->surname = trim($surname);
        $this->phone = trim($phone);
        $this->email = trim($email);
        $this->subject = trim($subject);
        $this->message = trim($message);
        $this->feed = trim($feed);
    }

    public function getSubject(): string
    {
        return $this->subject;
    }
    public function getMessage(): string
    {
        return $this->message;
    }

    public function stringFormation()
    {
        $this->message = "
        <p>
        Пользователь:{$this->surname} {$this->name} <br/>
        Номер телефона: {$this->phone}<br/>
        Почта отправителя: {$this->email}<br/>
        </p>
        <p>Сообщение:
        {$this->message}
        </p>    
        ";
    }

    public function submit()
    {
        $headers = "From: $this->email\r\nReplay-to: gura.ilya2468@gmail.com\r\nContent-type: text/html; charset=utf-8\r\n";
        $this->subject = "=?utf-8?B?" . base64_encode($this->subject) . "?=";
        $this->stringFormation();
        mail(emailHost, "{$this->subject}", "{$this->message}", "{$headers}");
    }
}

?>
