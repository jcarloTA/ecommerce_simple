<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\Game;
use App\Libraries\Mail;
use Gregwar\Captcha\CaptchaBuilder;

class PageController {

    public function index() 
    {
        $games = Game::all();

        View::render('pages/index', compact('games'));
    }

    public function about() 
    {
        View::render('pages/about');
    }

    public function contact()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = htmlentities(trim($_POST['message']));
            $captcharInput = trim($_POST['captcha']);
            $inputs = compact('name','email','message');

            if ($name == '') {
                $this->contactWithError('El campo nombre es obligatorio', $inputs );
            }else if($email == '') {
                $this->contactWithError('El campo email es obligatorio', $inputs );
            }else if($message == '') {
                $this->contactWithError('El campo mensaje es obligatorio', $inputs );                
            }else if($captcharInput != $_SESSION['phrase'] ) {
                $this->contactWithError('El texto no coincide con la imagen', $inputs );                
            }

            $mail = new Mail;

            if(!$mail->validateAddress($email)) {
                $this->contactWithError('El email ingresado no es valido', $inputs);
            }

            $mail->setForm(GM_MAIL['AddressFrom'], GM_MAIL['NameFrom']);
            $mail->addAddress(GM_MAIL['AddressInbox'], GM_MAIL['NameInbox']);
            $mail->isHtml(true);

            $mail->Subject = "GAME PLACE: {$name} <{$email}>";
            $mail->Body = nl2br($message);

            if($mail->send()) {
                View::render('pages/success');
            } else {
                $this->contactWithError('El mensaje no pudo ser enviado. Error: ', $mail->ErrorInfo, $inputs);
            }
        } else {
            $captcha = new CaptchaBuilder;
            $captcha->build();
            $_SESSION['phrase'] = $captcha->getPhrase();
            View::render('pages/contact', compact('captcha'));
        }
    }

    private function contactWithError($errorMessage, array $variables = []) 
    {
        $captcha = new CaptchaBuilder;
        $captcha->build();
        $_SESSION['phrase'] = $captcha->getPhrase();

        $variables['captcha'] = $captcha;
        $variables['errorMessage'] = $errorMessage;
        View::render('pages/contact', $variables);
        exit();
    }
}
