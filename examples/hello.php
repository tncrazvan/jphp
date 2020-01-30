<?php
require_once '../vendor/autoload.php';
use com\github\tncrazvan\jphp\Jphp;
use com\github\tncrazvan\jphp\JphpInterface;
new Jphp($argv,new class() implements JphpInterface{
    public function run(array $_HEADERS, array $_ARGS, array $_QUERY, string $_BODY){
        echo "hello world";
    }
});