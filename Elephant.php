<?php


namespace App\Articles\Inheritance;

use App\Articles\Inheritance\Traits\Swims;
use App\Articles\Inheritance\Traits\Walks;

class Elephant extends AbstractAnimal implements SwimmerInterface
{
    use Swims;
    use Walks;
}
