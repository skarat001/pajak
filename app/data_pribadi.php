<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class data_pribadi extends \Eloquent
{
	protected $table = 'data_pribadi';
	public $timestamps = false;
    //
/*	private $rules = array(
		'email' => 'required|min:3',

        // .. more rules here ..
		);
private $errors;*/
	// public function validate($data)
	// {
	// 	$v = Validator::make($data, $this->rules);

 //        // check for failure
	// 	if ($v->fails())
	// 	{
 //            // set errors and return false
	// 		$this->errors = $v->errors;
	// 		return false;
	// 	}

 //        // validation pass
	// 	return true;
	// }



public function getSize($name){
	$columns=DB::connection()
	->getDoctrineSchemaManager()
	->listTableColumns('data_pribadi');


	return $columns[$name]->getLength();
}       
}
