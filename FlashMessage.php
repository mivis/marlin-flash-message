<?php

session_start();

/*
простой класс с выводом флеш сообщения в зависимости от переданного POST или GET
*/

class FlashMessage {

    public $type;

    public function __construct() {

        if (!empty($_POST)) {
            $_SESSION['type'] = "POST";            
        }

        if (!empty($_GET)) {
            $_SESSION['type'] = "GET";   
        }
    }


}

?>