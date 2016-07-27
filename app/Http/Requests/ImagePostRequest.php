<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ImagePostRequest extends Request
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
   

        return [
        'foto'=>'required|image',
        
        ];
    }
    protected function getValidatorInstance()
    {
      $validator = parent::getValidatorInstance();

      $validator->setAttributeNames([
        'foto' => 'foto',
       
        ]);
return $validator;
    }
    
}
