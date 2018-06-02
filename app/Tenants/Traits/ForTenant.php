<?php

namespace App\Tenants\Traits;

use App\Tenants\Manager;
use App\Tenants\Observers\TenantObserver;
use App\Tenants\Scopes\TenantScope;

trait ForTenant
{
    public static function boot()
    {
        parent::boot();

        $manager = app(Manager::class);

        static::addGlobalScope(new TenantScope($manager->getTenant()));

        static::observe(app(TenantObserver::class));
    }
}