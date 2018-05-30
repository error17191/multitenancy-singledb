<?php

namespace App\Tenants\Traits;

use App\Tenants\Scopes\TenantScope;

trait ForTenant
{
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new TenantScope());
    }
}