<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\data_pribadi;
class RegistrationPostRequest extends Request
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
            'name'=>'required|max:'.$data_pribadi->getSize('nama'),
        ];
    }
}
