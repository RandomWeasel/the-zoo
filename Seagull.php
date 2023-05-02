<?php

namespace App\Articles\Inheritance;

use App\Articles\Inheritance\Traits\Walks;
use App\Articles\Inheritance\Traits\Swims;
use App\Articles\Inheritance\Traits\Flies;


class Seagull extends AbstractAnimal implements SwimmerInterface
{
    use Walks;
    use Swims;
    use Flies;

    public function stealChips()
    {
        print("Mine! Mine!");
    }
}
