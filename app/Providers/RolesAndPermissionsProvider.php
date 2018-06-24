<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Create necessary roles and permissions.
 */
class RolesAndPermissionsProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $basicRole = Role::firstOrCreate(['name' => 'basic']);
        $premiumRole = Role::firstOrCreate(['name' => 'premium']);

        $writePostPermission = Permission::firstOrCreate(['name' => 'write posts']);

        if (!$premiumRole->hasPermissionTo($writePostPermission)) {
            $premiumRole->givePermissionTo($writePostPermission);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
