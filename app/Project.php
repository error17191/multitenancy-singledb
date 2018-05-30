<?php

namespace App;

use App\Tenants\Traits\ForTenant;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use ForTenant;

    protected $fillable = ['name'];
}
