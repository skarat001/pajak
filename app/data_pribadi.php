<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class data_pribadi extends Model
{
	  protected $table = 'data_pribadi';
	       public $timestamps = false;
    //

	public function getSize($name){
		      $columns=DB::connection()
  ->getDoctrineSchemaManager()
  ->listTableColumns('data_pribadi');
  

      return $columns[$name]->getLength();
	}       
}
