<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests;

use Image;
use Auth;
use App\User;
use App\Role;
use App\skp;
use App\data_pribadi;
use App\pendidikan;
use App\pekerjaan;
use App\sertifikat;
use App\registration;
use App\berkas;
use App\pembayaran;


use Mail;
use stdclass;
use Response;
use Hash;
class AdminController extends Controller
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

     return view('admin.dashboard');
   }
   public function showNewMember()
   {
     return view('admin.newmember');
   }
   public function getNewMember()
   {
    $user= User::join('data_pribadi','user.id','=','data_pribadi.user_id')

    ->join('role_user','role_user.user_id','=','user.id')
    ->join('roles','role_user.role_id','=','roles.id')
    ->where('roles.name','member')
    ->where('user.active',1)
    ->select('user.id','data_pribadi.nama','data_pribadi.email','user.join_date')
    ->get();
    return Response::json($user);
  //return view('admin.newmember', ['users' => $user]);
  }
  public function setIdleMember(Request $request){
    $user=User::find($request->id);
$user->active=0;
$user->save();

  }
    public function resetPassMember(Request $request){
    $user=User::find($request->id);
 $password=str_random(6);
      $user->password=bcrypt($password);
$user->save();
$pribadi=data_pribadi::where('user_id',$user->id)->first();
 $panggilan="";
     if ($pribadi->jenis_kelamin=="Pria"){
      $panggilan="Bapak";
    }
    else{
      $panggilan="Ibu";
    }

Mail::send('emails.changepass', ['title' => $panggilan, 'name' => $pribadi->nama, 'email'=>$user->email, 'password'=>$password], function ($message) use ($user)
    {

      $message->from('noreply.ikpi@gmail.com', 'IKPI');
      $email=$user->email;
      $message->to($email)->subject("Perubahan Password");

    });

  }
}

