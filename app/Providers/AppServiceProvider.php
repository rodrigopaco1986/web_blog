<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.link-order', 'linkOrder');
        Blade::component('components.form.input-checkbox', 'frmInputCheckbox');
        Blade::component('components.form.input-text', 'frmInputText');
        Blade::component('components.form.input-password', 'frmInputPassword');
        Blade::component('components.form.select', 'frmSelect');
        Blade::component('components.form.textarea', 'frmTextarea');
    }
}
