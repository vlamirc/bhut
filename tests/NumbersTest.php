<?php

use PHPUnit\Framework\TestCase;
use App\Classes\TwoDividers;
use App\Classes\Numbers;

class NumbersTest extends TestCase
{
    private $dividers;
    private $numbers;

    public function initialize()
    {
        $this->dividers = new TwoDividers(3, 5);
        $this->numbers = new Numbers(1, 100, $this->dividers);
    }

    public function testDivider()
    {
        $this->initialize();

        $this->assertEquals('1', $this->dividers->getValueLabel(1));
        $this->assertEquals(TwoDividers::label1, $this->dividers->getValueLabel(3));
        $this->assertEquals(TwoDividers::label2, $this->dividers->getValueLabel(5));
        $this->assertEquals(TwoDividers::label3, $this->dividers->getValueLabel(15));
    }

    public function testNumber()
    {
        $this->initialize();

        $array = $this->numbers->getArray();
        $this->assertIsArray($array);
        $this->assertArrayHasKey(1, $array);
        $this->assertArrayHasKey(100, $array);

        $this->assertEquals('', $this->numbers->getLabel(2));
        $this->assertEquals('', $this->numbers->getLabel(4));
        $this->assertEquals('', $this->numbers->getLabel(6));

        $this->numbers->setLabel(1, 'Foo');
        $this->assertEquals('Foo', $this->numbers->getLabel(1));

        $this->numbers->checkMultiples();
        $this->assertEquals('2', $this->numbers->getLabel(2));
        $this->assertEquals('4', $this->numbers->getLabel(4));
        $this->assertEquals(TwoDividers::label1, $this->numbers->getLabel(6));
        $this->assertEquals(TwoDividers::label2, $this->numbers->getLabel(40));
        $this->assertEquals(TwoDividers::label3, $this->numbers->getLabel(90));
    }
}
