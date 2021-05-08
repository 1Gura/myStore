<?php

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
        mail("{$this->email}", "{$this->subject}", "{$this->message}", "{$headers}");

        header("Location: http://{$_SERVER['HTTP_HOST']}/components/feedback.php?ok=ok");
        exit;
    }
}


if (!empty($_POST)) {
    $name = checkRegularName($_POST['name']);
    $surname = checkRegularSurName($_POST['surname']);
    $phone = checkRegularPhone($_POST['phone']);
    $email = checkRegularEmail($_POST['email']);
    $subject = checkSubject();
    $message = checkTextBox();
    $flagSuccess = false;
    if (!$name && !$surname && !$phone && !$email && !$subject && !$message) {
        $mail = new Email($_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email'], $_POST['subject'], $_POST['message']);
        $mail->submit();
        $flagSuccess = success();
    } else {
        $flagSuccess = false;
    }
}

?>
