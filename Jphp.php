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
        $response = $callback->run($_HEADERS,$_ARGS,$_QUERY,$_BODY);
        echo $response->status."\n";
        foreach($response->headers as &$header){
            echo $header."\n";
        }
        echo "\n";
        echo $response->body;
    }
}

