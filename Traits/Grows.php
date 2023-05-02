<?php
namespace App\Articles\Inheritance\Traits;

trait Grows
{
    public function grow(int $amount)
    {
        print("I grew by $amount cm!");
    }
}
