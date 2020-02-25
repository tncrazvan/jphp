<?php
require_once '../vendor/autoload.php';
use com\github\tncrazvan\jphp\Jphp;
use com\github\tncrazvan\jphp\Status;
use com\github\tncrazvan\jphp\HttpResponse;
use com\github\tncrazvan\jphp\JphpInterface;
/*
    $argv does not contain the data, it simply contains the length of the header and the length of the body,
    which are used to read from the stdin correctly.
*/
new Jphp($argv,new class() implements JphpInterface{
    public function run(array $_HEADERS, array $_ARGS, array $_QUERY, string $_BODY):HttpResponse{
        
        return new HttpResponse(Status::SUCCESS,[],"hello");
    }
});
