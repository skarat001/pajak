<?php

namespace App\Http\Controllers;



use App\data_pribadi;
use App\user;
use App\pendidikan;
use App\Registration;

use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationPostRequest;
 use Illuminate\Support\Facades\Schema;
 use Response;
class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

  return view('registration')->with('step',"1");
    }

    public function store(RegistrationPostRequest $request){


        $user =new User;
        $user->username=$request->email;
        $user->email=$request->email;
        $password=str_random(6);
        $user->password=bcrypt($password);
        $user->role='member';
        $user->active=1;
        $user->valid_date='2018-01-01';
        $user->save();

        $registration=new Registration;
        $registration->user_id=$user->id;
        $registration->step_registration=1;
        $registration->link=str_random(15);
        $registration->date_updated=date("Y-m-d");
        $registration->save();



        if(Input::file())
        {

          $image = Input::file('photo');

          $filename  = time() . '-' . Str::slug($request->name).'.'. $image->getClientOriginalExtension();

          $path = public_path('image/'.$filename);

          move_uploaded_file($image->getRealPath(), $path);
               // Image::make($image->getRealPath())->resize(200, 200)->save($path);
          $request->photo = $filename;

        }
        else{
           $request->photo="person.png";
        }

    
       


        $pribadi=new data_pribadi;
   
        $pribadi->nama=$request->name;
        $pribadi->tempat_lahir=$request->place_birth;
        $pribadi->tanggal_lahir=$request->date_birth;
        $pribadi->no_ktp=$request->ktp;
        $pribadi->jenis_kelamin=$request->jk;
        $pribadi->agama=$request->agama;
        $pribadi->alamat_provinsi=$request->prov;
        $pribadi->alamat=$request->alamat;
        $pribadi->alamat_pos=$request->pos;
        $pribadi->email=$request->email;
        $pribadi->telp=$request->telp;
        $pribadi->fax=$request->fax;
        $pribadi->hp=$request->hp;
        $pribadi->foto=$request->photo;
        $pribadi->perusahaan=$request->perusahaan;
        $pribadi->perusahaan_alamat=$request->alamat_perusahaan;
        $pribadi->perusahaan_jabatan=$request->jabatan_perusahaan;
        $pribadi->perusahaan_korespondensi=$request->korespondensi_perusahaan;
        $pribadi->perusahaan_telp=$request->telepon_perusahaan;
        $pribadi->perusahaan_extensi=$request->extension_perusahaan;
        $pribadi->perusahaan_fax=$request->fax_perusahaan;
        $pribadi->perusahaan_level=$request->job_level;
        $pribadi->perusahaan_kategori=$request->job_category;
        $pribadi->perusahaan_tipe=$request->tipe_perusahaan;
        $pribadi->perusahaan_bisnis=$request->kategori_bisnis;
        $pribadi->user_id=$user->id;
        $pribadi->save();

        $panggilan="";
        if ($pribadi->jenis_kelamin=="Pria"){
          $panggilan="Bapak";
        }
        else{
          $panggilan="Ibu";
        }
        Mail::send('emails.registration', ['title' => $panggilan, 'name' => $pribadi->nama, 'email'=>$pribadi->email, 'password'=>$password], function ($message) use ($pribadi)
        {

          $message->from('noreply.ikpi@gmail.com', 'IKPI');
          $email=$pribadi->email;
          $message->to($email)->subject("Verifikasi Pendaftaran");

        });

        return redirect('/confirmation')
        ->withSuccess('Pendaftaran berhasil');
 

    }

  public function checkEmail($attribute, $value, $parameters, $validator) {
    return false;
  }
  }
