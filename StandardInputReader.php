<?php
namespace com\github\tncrazvan\jphp;

class StandardInputReader{
    public $headers;
    public $args;
    public $query;
    public $body;
    public function __construct(array $argv){
        $input = fopen('php://stdin','r');
        //$this->data = fread($input,intval($argv[1]));
        $this->headers = fgets($input);
        $this->args = fgets($input);
        $this->query = fgets($input);
        $this->body = stream_get_contents($input,intval($argv[1]));
    }
}