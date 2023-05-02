<?php
namespace App\Articles\Inheritance;

use App\Articles\Inheritance\Traits\Grows;
use App\Articles\Inheritance\Traits\Poops;

abstract class AbstractAnimal
{
    use Grows;
    use Poops;
}
