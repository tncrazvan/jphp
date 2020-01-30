<?php
namespace com\github\tncrazvan\jphp;

class Jphp{
    protected $input;
    public function __construct(array $argv,JphpInterface $callback){
        $reader = new StandardInputReader($argv);
        $this->input = \json_decode($reader->getData(),true);
        $_HEADERS = $this->input["HEADERS"];
        $_ARGS = $this->input["ARGS"];
        $_QUERY = $this->input["QUERY"];
        $_BODY = $this->input["BODY"];
        $callback->run($_HEADERS,$_ARGS,$_QUERY,$_BODY);
    }
}

