<?php

namespace App\Wcs;

class Hello
{
    private string $greeting;
    
    public function talk(): string
    {
        $greeting='Hello World!';
        return $greeting;
    }
}
