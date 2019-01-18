<?php
//Criado por Anderson Ismael
//18 de janeiro de 2019

function inc($includes){
    if(is_array($includes)){
        $includesList=$includes;
    }else{
        $includesList[]=$includes;
    }
    foreach ($includesList as $include) {
        $filename=ROOT.'basic/getbasic/'.$include.'/'.$include.'.php';
        if(file_exists($filename)){
            require_once($filename);
        }else{
            return false;
        }
    }
}
