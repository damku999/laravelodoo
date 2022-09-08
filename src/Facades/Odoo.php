<?php namespace AdaptIT\LaravelOdoo\Facades;

use Illuminate\Support\Facades\Facade;

class Odoo extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return \AdaptIT\LaravelOdoo\Odoo::class; }

}