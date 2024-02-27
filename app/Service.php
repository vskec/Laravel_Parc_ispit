<?php

namespace App;

use App\Contracts\SomeInterface;

class Service
{
    public function __construct(private SomeInterface $someInterface)
    {
    }

    public function topList() {

        $this->someInterface->connect();

        return [
            'Witcher',
            'Ghost of Thusima',
            'Final Fantasy VII',
            'Hogwarts Legacy',
            'Spider-Man'
        ];
    }
}
