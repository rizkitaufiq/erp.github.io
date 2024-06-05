<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

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
     */
    public function boot(): void
    {
        //
        Blade::directive('langUpper', function ($expression) {
            return "<?php echo strtoupper(trans($expression)); ?>";
        });

        // View::composer('*', function ($view) {
        //     $view->with('app', app());

        //     if (Auth::check()) {
        //         URL::forceRootUrl(config('app.url'));
        //     }

        //     header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1
        //     header("Pragma: no-cache"); // HTTP 1.0
        //     header("Expires: Sat, 01 Jan 2000 00:00:00 GMT"); // Date in the past
        // });
    }
}
