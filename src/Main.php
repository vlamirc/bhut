<?php

namespace App;

use App\Classes\TwoDividers;
use App\Classes\Numbers;
use App\Classes\Helpers;

require 'vendor/autoload.php';

class Main
{
    public function exec()
    {
        $dividers = new TwoDividers(3, 5);
        $numbers = new Numbers(1, 100, $dividers);

        $numbers->checkMultiples();

        Helpers::printArray($numbers->getArray());
    }
}

$main = new Main();
$main->exec();
