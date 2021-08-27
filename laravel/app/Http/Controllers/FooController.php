<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

final class FooController
{
    public function __invoke()
    {
        $obj = new Foo();
        
        return new JsonResponse(['text' => 'Foo']);
    }
}
