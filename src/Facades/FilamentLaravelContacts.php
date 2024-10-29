<?php

namespace goubs\FilamentLaravelContacts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \goubs\FilamentLaravelContacts\FilamentLaravelContacts
 */
class FilamentLaravelContacts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \goubs\FilamentLaravelContacts\FilamentLaravelContacts::class;
    }
}
