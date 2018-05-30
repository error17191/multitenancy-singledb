<?php

namespace App\Http\Middleware\Tenant;

use App\Company;
use App\Tenants\Manager;
use Closure;

class TenantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $company = Company::findOrFail($request->company ?: session()->get('tenant'));
        if (!auth()->user()->companies()->where('companies.id', '=', $company->id)->first()) {
            return redirect('home');
        }

        app(Manager::class)->setTenant($company);
        session()->put('tenant', $company->id);
        return $next($request);
    }
}
