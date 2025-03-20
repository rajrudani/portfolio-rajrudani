<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['front.layout', 'front.index'], function ($view) {
            $socialMedia = [
                'facebook' => 'dsad',
                'twitter' => 'dsa',
                'instagram' => 'dasd',
                'linkedin' => 'dsa',
                'github' => 'sad',
                'skype' => 'sad',
            ];

            $view->with([
                'socialMedia' => $socialMedia

            ]);
        });
    }
}
