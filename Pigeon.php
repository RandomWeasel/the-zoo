<?php


namespace App\Articles\Inheritance;

use App\Articles\Inheritance\Traits\Flies;
use App\Articles\Inheritance\Traits\Walks;

class Pigeon extends AbstractAnimal
{
    use Flies;
    use Walks;
}
