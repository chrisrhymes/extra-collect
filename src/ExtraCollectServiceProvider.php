<?php

namespace ChrisRhymes\ExtraCollect;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class ExtraCollectServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    /**
    * Bootstrap any application services.
    *
    * @return void
    */
    public function boot()
    {
        // Add a prefix to all items or a specific key of a nested array
        Collection::macro('prefix', function ($prefix, $key = null) {
            return $this->map(function ($value) use ($prefix, $key) {
                if ($key) {
                    $value[$key] = $prefix . $value[$key];
                    return $value;
                }

                return $prefix . $value;
            });
        });

        // Add a suffix to all items or a specific key of a nested array
        Collection::macro('suffix', function ($suffix, $key = null) {
            return $this->map(function ($value) use ($suffix, $key) {
                if ($key) {
                    $value[$key] = $value[$key] . $suffix;
                    return $value;
                }
                return $value . $suffix;
            });
        });

        // Add double quotes to all items or a specific key of a nested array
        Collection::macro('doubleQuote', function ($key = null) {
            return $this->map(function ($value) use ($key) {
                if ($key) {
                    $value[$key] = '"' . $value[$key] . '"';
                    return $value;
                }
                return '"' . $value . '"';
            });
        });
    }
}