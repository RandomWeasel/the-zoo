<?php


namespace App\Articles\Inheritance;

use App\Articles\Inheritance\Traits\Swims;

class Fish extends AbstractAnimal implements SwimmerInterface
{
    use Swims;
}
