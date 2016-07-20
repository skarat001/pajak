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
        "place_birth"=>"required|max:".$data_pribadi->getSize('tempat_lahir'),
        "date_birth"=>"required|date",
        "ktp"=>"required|max:".$data_pribadi->getSize('no_ktp'),
        "jk"=>"required|",
        "agama" =>"max:".$data_pribadi->getSize('agama'),
    /*    "pendidikan"=>"required|",
        "prov"=>"required|",*/
        "alamat"=>"required|max:".$data_pribadi->getSize('alamat'),
        "pos"=>"required|max:".$data_pribadi->getSize('alamat_pos'),
        "email"=>"required||email|max:".$data_pribadi->getSize('email'),
        "telp"=>"regex:/^\+?[^a-zA-Z]{5,}$/|max:".$data_pribadi->getSize('telp'),
        "fax"=>"max:".$data_pribadi->getSize('fax'),
        "hp"=>"required|regex:/^\+?[^a-zA-Z]{5,}$/|max:".$data_pribadi->getSize('hp'),
        /*"photo"=>"",*/
        "perusahaan"=>"max:".$data_pribadi->getSize('perusahaan'),
        "jabatan_perusahaan"=>"max:".$data_pribadi->getSize('perusahaan_jabatan'),
        "alamat_perusahaan"=>"max:".$data_pribadi->getSize('perusahaan_alamat'),
       // "korespondensi_perusahaan "=>"",
        "telepon_perusahaan"=>"regex:/^\+?[^a-zA-Z]{5,}$/|max:".$data_pribadi->getSize('perusahaan_telp'),
        "extension_perusahaan"=>"max:".$data_pribadi->getSize('perusahaan_extensi'),
        "fax_perusahaan"=>"regex:/^\+?[^a-zA-Z]{5,}$/|max:".$data_pribadi->getSize('perusahaan_fax'),
       /* "job_level"=>"",
        "job_category"=>"",
        "tipe_perusahaan"=>"",
        "kategori_bisnis"=>"",*/
        ];
    }
    protected function getValidatorInstance()
    {
      $validator = parent::getValidatorInstance();

      $validator->setAttributeNames([
        'name' => 'Nama Lengkap',
        "place_birth" =>"Tempat Lahir",
        "date_birth" =>"Tanggal Lahir",
        "ktp" =>"KTP",
        "jk" =>"Jenis Kelamin",
        "agama" =>"Agama",
        "pendidikan" =>"Pendidikan",
        "prov" =>"Provinsi",
        "alamat" =>"Alamat",
        "pos" =>"Kode Pos",
        "email" =>"Email",
        "telp" =>"Telepon",
        "fax" =>"Fax",
        "hp" =>"No Handphone",
        "photo" =>"Photo",
        "perusahaan" =>"Nama Perusahaan",
        "jabatan_perusahaan" =>"Jabatan",
        "alamat_perusahaan" =>"Alamat Perusahaan",
        "korespondensi_perusahaan" =>"Alamat Korespondensi",
        "telepon_perusahaan" =>"Telepon Perusahaan",
        "extension_perusahaan" =>"Extensi Perusahaan",
        "fax_perusahaan" =>"Fax Perusahaan",
        "job_level" =>"Job Level",
        "job_category" =>"Kategori Pekerjaan",
        "tipe_perusahaan" =>"Tipe Perusaahn",
        "kategori_bisnis"=>"Kategorii Bisnis",
        ]);
return $validator;
    }
    
}
