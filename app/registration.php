<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class registration extends Model
{
    //
      protected $table = 'registration';
           public $timestamps = false;

public function getStep(){
	   if (Auth::guest()){
	   	return 0;
	   }
	   else{
	   	$reg=$this::where('user_id',Auth::user()->id)->first();
	   	return $reg->step_registration;
	   }
}           

}
