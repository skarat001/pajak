<?php

namespace App\Http\Controllers;



use App\data_pribadi;
use App\User;
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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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

      return view('process_member/registration')->with('step',"1");
    }

    public function store(RegistrationPostRequest $request){


      $user =new User;
      $user->username=$request->email;
      $user->email=$request->email;
      $password=str_random(6);
      $user->password=bcrypt($password);
      $user->role='member';
      $user->active=1;
      $user->join_date=date("Y-m-d");
      $user->valid_date='2018-01-01';
      $user->save();

      $registration=new Registration;
      $registration->user_id=$user->id;
      $registration->step_registration=2;
      $registration->link=str_random(15);
      $registration->date_updated=date("Y-m-d");
      $registration->save();



      if(Input::file())
      {

       $file = Input::file('foto');
    $extension = $file->getClientOriginalExtension();
    $mime=$file->getClientMimeType();
    
    $image = Image::make($file)->resize(300, 450);
    $image=$image->stream();
    $user=Auth::user()->email;
    $filename  = time() .'-'.$user. '-profile.'. $extension;

    Storage::disk('imgprofile')->put($filename,  $image->__toString());
    
        $request->photo = $filename;
        $request->photo_mime = $mime;

      }
      else{
       $request->photo="person.png";
       $request->photo_mime = "image/png";
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
     $pribadi->foto_mime=$request->photo_mime;
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
    Mail::send('emails.registration', ['title' => $panggilan, 'name' => $pribadi->nama, 'email'=>$pribadi->email, 'password'=>$password,'link_verification'=>$registration->link], function ($message) use ($pribadi)
    {

      $message->from('noreply.ikpi@gmail.com', 'IKPI');
      $email=$pribadi->email;
      $message->to($email)->subject("Verifikasi Pendaftaran");

    });

    return view('process_member/confirmation')->with('step',$registration->step_registration);


  }

  public function verification(Request $request){
    $id=$request->id;
    
    $registration=Registration::where('link',$id)->first();
    $registration->step_registration=3;
    $registration->save();
 return view('process_member/verification')->with('step',$registration->step_registration);

  }

  public function checkEmail($attribute, $value, $parameters, $validator) {
    return false;
  }
}
