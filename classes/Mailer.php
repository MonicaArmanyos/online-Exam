<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mailer
 *
 * @author monica
 */
class Mailer {
    private $from,
            $to,
            $subject,
            $body;
    public function __construct($to,$subject,$msg,$header) {
        $this->to=$to;
        $this->subject=$subject;
        $this->body=$msg;
        $this->from=$header;
    }
    public function send()
    {
        mail($this->to,$this->subject, $this->body, $this->from);
    }
}
