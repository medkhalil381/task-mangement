<?php

namespace App\Providers;
use App\Models\Produit;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['cats.fields'], function ($view) {
            $produitItems = Produit::pluck('nom','id')->toArray();
            $view->with('produitItems', $produitItems);
        });
        View::composer(['categories.fields'], function ($view) {
            $produitItems = Produit::pluck('nom','id')->toArray();
            $view->with('produitItems', $produitItems);
        });
        View::composer(['categories.fields'], function ($view) {
            $produitItems = Produit::pluck('nom','id')->toArray();
            $view->with('produitItems', $produitItems);
        });
        //
    }
}