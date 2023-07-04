<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Pagination extends Facade
{
    /**
     * @inheritDoc
     */
    protected static function getFacadeAccessor(): string
    {
        return 'pagination-helper';
    }
}
