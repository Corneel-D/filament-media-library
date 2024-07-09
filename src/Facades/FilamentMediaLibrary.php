<?php

namespace CorneelD\FilamentMediaLibrary\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CorneelD\FilamentMediaLibrary\FilamentMediaLibrary
 */
class FilamentMediaLibrary extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CorneelD\FilamentMediaLibrary\FilamentMediaLibrary::class;
    }
}
