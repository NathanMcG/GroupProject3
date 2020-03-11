<?php
class Validate {

    public function databaseDate($date){
        $valid = true;
        if(strlen($date) == 10){
        for($i=0;$i<4;$i++){
            if(!is_int()){
                $valid = false;
            }
        }
        if($date[4] != '-')
        $valid=false;
        for($i=5;$i<7;$i++){
            if(!is_int()){
                $valid = false;
            }
        }
        if($date[4] != '-')
        $valid=false;
        for($i=7;$i<9;$i++){
            if(!is_int()){
                $valid = false;
            }
        }}
        else
        $valid=false;
        return $valid;
    }

    public function allSet($variables, $names){
        $valid = true;
        foreach($names as $name){
            if($variables[$name] == ""){
            $valid = false;}
        }
        return $valid;
    }

    public function confirmPassword($pass1, $pass2){
        $valid = true; 
        if(!$pass1 == $pass2){
            $valid = false;
        }
    }

}