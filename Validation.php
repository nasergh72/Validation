<?php

class Validation{
    public function OddorEven($number){

        if ($number % 2 == 0){
            return 'Even';
        }else{
            return 'Odd';
        }

    }

}