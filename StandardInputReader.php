<?php
namespace com\github\tncrazvan\jphp;

class StandardInputReader{
    private $data;
    public function __construct(array $argv){
        $input = fopen('php://stdin','r');
        $this->data = fread($input,$argv[1]);
        fclose($input);
    }

    public function getData():string{
        return $this->data;
    }
}