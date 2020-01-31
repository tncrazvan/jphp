<?php
namespace com\github\tncrazvan\jphp;

class Jphp{
    public function __construct(array $argv,JphpInterface $callback){
        $reader = new StandardInputReader($argv);

        $_HEADERS = json_decode(\base64_decode($reader->headers),true);
        $_ARGS = json_decode(\base64_decode($reader->args),true);
        $_QUERY = json_decode(\base64_decode($reader->query),true);
        $_BODY = &$reader->body;

        $response = $callback->run($_HEADERS,$_ARGS,$_QUERY,$_BODY);

        echo $response->status."\n";
        foreach($response->headers as &$header){
            echo $header."\n";
        }
        echo "\n";
        echo $response->body;
    }
}

