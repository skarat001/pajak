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
   $user=User::with('Pribadi')->paginate(20);
   //return Response::json($user);
  return view('admin.newmember', ['users' => $user]);
   }
}

