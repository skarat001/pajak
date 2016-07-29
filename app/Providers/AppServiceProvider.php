<?php

namespace App\Providers;
use Validator;
use App\data_pribadi;
use Illuminate\Support\ServiceProvider;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
      Validator::extend('foo', function($attribute, $value, $parameters, $validator) {


      });
      Validator::extend('uniquecustom', function($attribute, $value, $parameters, $validator) {
        $field="";
        if($attribute=="email"){
          $field="email";
        }
        elseif ($attribute=="ktp") {
          $field="no_ktp";
        }
        if (Auth::guest()){
            $pribadi=data_pribadi::where($field,$value)->count();
        }
        else{
           $pribadi=data_pribadi::where($field,$value)->where('user_id','<>',Auth::user()->id)->count();
        }
      
        if($pribadi!=0){
         return false;
       }
       return true;

     });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
  }
