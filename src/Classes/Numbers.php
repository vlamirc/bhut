<?php

namespace App\Classes;

use App\Interfaces\Divider;

class Numbers
{
    private $arrayNumbers;
    private $dividers;

    public function __construct(int $first, int $last, Divider $dividers)
    {
        $this->dividers = $dividers;
        for ($i = $first; $i <= $last; $i++) {
            $this->setLabel($i, '');
        }
    }

    public function getArray() : array
    {
        return $this->arrayNumbers;
    }

    public function setLabel(int $value, string $label)
    {
        $this->arrayNumbers[$value] = $label;
    }

    public function getLabel(int $value) : string
    {
        return $this->arrayNumbers[$value];
    }

    public function checkMultiples()
    {
        foreach (array_keys($this->arrayNumbers) as $value) {
            $this->setLabel($value, $this->dividers->getValueLabel($value));
        }
    }
}
