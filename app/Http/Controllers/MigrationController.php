<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class MigrationController extends Controller
{

    public function migrateAndSeed($user, $pass){
        if(\Illuminate\Support\Facades\Schema::hasTable('users')){
            if(\App\Models\User::where('user_name', env('APP_USER', 'sensible'))->exists()){
                abort(403);
            }
        }
        
        if($user != env('APP_USER', 'sensible') || !\Illuminate\Support\Facades\Hash::check($pass, env('MIGRATION_PASSWORD', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'))){
            abort(401);
        }

        Artisan::call('migrate:fresh --seed');
        $artisanOutput = Artisan::output();
        
        return view('migration.index', compact('artisanOutput'));
    }

    public function migrate($user, $pass){
        if($user != env('APP_USER', 'sensible') || !\Illuminate\Support\Facades\Hash::check($pass, env('MIGRATION_PASSWORD', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'))){
            abort(401);
        }

        Artisan::call('migrate');
        $artisanOutput = Artisan::output();
        
        return view('migration.index', compact('artisanOutput'));
    }
}
