<?php
namespace com\github\tncrazvan\jphp;

interface JphpInterface{
    public function run(array $_HEADERS,array $_ARGS, array $_QUERY,string $_BODY);
}