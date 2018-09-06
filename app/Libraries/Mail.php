<?php


namespace App\Libraries;

use PHPMailer;

class Mail extends PHPMailer{

    public function __construct( $exceptions = false)
    {
        parent::__construct($exceptions);

        $this->isSMTP();
        $this->Host = GP_MAIL['Host'];
        $this->SMTPAuth = GP_MAIL['SMTPAuth'];
        $this->Username = GP_MAIL['Username'];
        $this->Password = GP_MAIL['Password'];
        $this->SMTPSecure = GP_MAIL['SMTSecure'];
        $this->Port = GP_MAIL['Port'];
        
        $this->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
    }
}