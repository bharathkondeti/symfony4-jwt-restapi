<?php

namespace App\Exception;

use Symfony\Component\HttpFoundation\Response;

class MyException extends Exception {

    function d() {
       throw new Response('hello world');
    }
}
