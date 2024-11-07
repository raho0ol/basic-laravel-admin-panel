<?php

namespace App\Models;

use BalajiDharma\LaravelMenu\Traits\LaravelCategories;
use Spatie\Permission\Models\Permission as OriginalPermission;

class Permission extends OriginalPermission
{
    use LaravelCategories;

    protected $fillable = [
        'name',
        'guard_name',
        'updated_at',
        'created_at',
    ];
}
