<?php

namespace BITM\SEIP12\Utility;

class Validator{

    static public function url(){

        return true;

    }
    static public function empty($var){

        return empty($var)?true:false;

    }

    static public function email(){
        
        return true;
    }

    static public function validate($var){
        
        return true;
    }


}