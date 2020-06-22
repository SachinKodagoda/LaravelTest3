<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Channel;
use App\Http\View\Composers\ChannelsComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function($app){
            if(request()->has('credit')){
                return new CreditPaymentGateway('usd');
            }
            return new BankPaymentGateway('usd');
            
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Option1 - Every Single view
        View::share('title', env('APP_NAME'));
        // Option2 - Granular views with wildcards
        // View::composer(['post.*','channel.index'], function($view){
        //     $view->with('channels',Channel::orderBy('name')->get());
        // });
        // Option3 - Dedicated Class
        View::composer('partials.channels.*',ChannelsComposer::class);
    }
}
