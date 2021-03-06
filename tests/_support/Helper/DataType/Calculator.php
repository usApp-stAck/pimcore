<?php

namespace Pimcore\Tests\Helper\DataType;

use Pimcore\Cache\Runtime;
use Pimcore\Model\DataObject\ClassDefinition\CalculatorClassInterface;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\Data\CalculatedValue;

class Calculator implements CalculatorClassInterface
{
    /**
     * @param $object Concrete
     * @param $context \Pimcore\Model\DataObject\Data\CalculatedValue
     *
     * @return string
     */
    public function compute($object, $context): string
    {
        $value = '';
        if (Runtime::isRegistered('modeltest.testCalculatedValue.value')) {
            $value = Runtime::get('modeltest.testCalculatedValue.value');
        }

        return $value;
    }

    public function getCalculatedValueForEditMode(Concrete $object, CalculatedValue $context): string
    {
    }
}
