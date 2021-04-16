<?php

namespace App\Classes;

class Helpers
{
    public static function printArray($array)
    {
        foreach ($array as $item) {
            print $item . "\n";
        }
    }
}
