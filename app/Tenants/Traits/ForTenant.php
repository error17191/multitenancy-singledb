<?php

namespace App\Tenants\Traits;

use App\Tenants\Manager;
use App\Tenants\Scopes\TenantScope;

trait ForTenant
{
    public static function boot()
    {
//        \DB::listen(function ($query) {
//            dump($query->sql);
//        });
        parent::boot();

        $manager = app(Manager::class);

        static::addGlobalScope(new TenantScope($manager->getTenant()));
    }
}