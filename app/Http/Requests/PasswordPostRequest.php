<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use App\data_pribadi;
class PasswordPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data_pribadi=new data_pribadi;

        return [
        'old_pass'=>'required',
        "new_pass"=>"required|min:6|regex:/^[a-zA-Z0-9\s-]+$/",
        "con_pass"=>"required|same:new_pass",

        ];
    }
    protected function getValidatorInstance()
    {
      $validator = parent::getValidatorInstance();

      $validator->setAttributeNames([
        'old_pass' => 'Password Lama',
        "new_pass" =>"Password Baru",
        "con_pass" =>"Konfirmasi Password",
        
        ]);
return $validator;
    }
    
}
