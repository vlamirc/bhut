<?php

namespace App\Classes;

use App\Interfaces\Divider as DividerInterface;

class TwoDividers implements DividerInterface
{
    const label1 = 'BHUT';
    const label2 = 'IT';
    const label3 = 'BHUT TI';

    private $dividers;

    public function __construct($divider1, $divider2)
    {
        $this->dividers = [
            ['value' => $divider1, 'label' => self::label1],
            ['value' => $divider2, 'label' => self::label2],
            ['value' => $divider1 * $divider2, 'label' => self::label3],
        ];
    }

    public function getValueLabel($value) : string
    {
        $label = strval($value);

        foreach ($this->dividers as $divider) {
            if ($this->isMultiple($value, $divider['value'])) {
                $label = $divider['label'];
            }
        }

        return $label;
    }

    private function isMultiple(int $value, int $divider) : bool
    {
        return (($value % $divider) == 0);
    }
}
