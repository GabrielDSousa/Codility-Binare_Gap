<?php
/*
A function to return the biggest gap of zeros between zeros
*/
function solution($N): int
{
    $biggest_gap = 0;
    $binary = strval(decbin($N));
    $binary = trim($binary, 0);
    $zero_array = explode("1", $binary);
    unset($zero_array[0]);
    $size = sizeof($zero_array);
    unset($zero_array[$size]);
    if($zero_array!=null){
        foreach ($zero_array as $zero){
            if(strlen($zero) > $biggest_gap){
                $biggest_gap = strlen($zero);
            }
        }
        return $biggest_gap;
    }
    return 0;
}

