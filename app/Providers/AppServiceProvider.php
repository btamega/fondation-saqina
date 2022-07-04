<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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
        //
        $messages = DB::table('commentaires')->orderByDesc('id_commentaire')->get();
        $nombreMessage = $messages->count();
        view()->composer('*', function ($view) 
        {
           $user= Auth::user();
            $view->with('user', $user);  
        }); 
        
        View::share('nombreMessages', $nombreMessage);
        View::share('messages', $messages);
    }
}
