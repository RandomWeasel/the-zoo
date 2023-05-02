<?php
namespace App\Articles\Inheritance;

class AquaticEnclosure
{
    private SwimmerInterface $animal;

    public function __construct(SwimmerInterface $animal)
    {
        $this->animal = $animal;
    }

    public function getAnimal()
    {
        return $this->animal;
    }
}
