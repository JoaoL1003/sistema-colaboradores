<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */public function boot()
{
    Route::model('colaborador', \App\Models\Colaborador::class); // associa explicitamente
    Route::bind('colaborador', function ($value) {
        return \App\Models\Colaborador::findOrFail($value);
    });

    // Força o Laravel a usar 'colaborador' como singular de 'colaboradores'
    Route::resourceVerbs([
        'create' => 'criar',
        'edit' => 'editar',
    ]);

    Route::pattern('colaborador', '[0-9]+');
}
}
