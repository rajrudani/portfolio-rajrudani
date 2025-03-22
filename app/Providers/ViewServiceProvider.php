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
                'facebook' => null,
                'twitter' => 'https://x.com/rkrudani24?s=21&t=NvDu73Xj4tbI56NL4JwSyA',
                'instagram' => null,
                'linkedin' => 'https://www.linkedin.com/in/rajrudani',
                'github' => 'https://github.com/rajrudani',
                'skype' => 'https://join.skype.com/invite/xbadvzdH5Lff',
            ];

            $personalData = [
                'name' => 'Raj Rudani',
                'job-title' => 'Web Developer',
                'email' => 'rajrudani1234@gmail.com',
                'phone' => '+91 (875)-806-5009',
                'birthdate' => '24 September 1998',
                'degree' => 'Bachelors in Information & Technology',
                'location' => 'Gujarat, India.',
                'nationality' => 'Indian',
            ];

            $view->with([
                'personalData' => $personalData,
                'socialMedia' => $socialMedia,
            ]);
        });
    }
}
