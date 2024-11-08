<?php

namespace App\Models;

use BalajiDharma\LaravelMenu\Traits\LaravelCategories;
use Spatie\Permission\Models\Role as OriginalRole;

class Role extends OriginalRole
{
    use LaravelCategories;

    protected $fillable = [
        'name',
        'guard_name',
        'updated_at',
        'created_at',
    ];
}
