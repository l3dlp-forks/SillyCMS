<?php

namespace Symfony\Tests\Component\Validator\Fixtures;

use Symfony\Component\Validator\Constraint;

class ConstraintA extends Constraint
{
    public $property1;
    public $property2;

    public function defaultOption()
    {
        return 'property2';
    }
}