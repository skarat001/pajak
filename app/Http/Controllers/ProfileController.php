<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\skp;
use App\data_pribadi;
use App\pendidikan;
use App\pekerjaan;
use App\sertifikat;

class ProfileController extends Controller
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
        $user_id=Auth::user()->id;
        $data_pribadi=data_pribadi::where('user_id',$user_id)->first();
        $skp=skp::where('user_id',$user_id)->get();
        $sertifikat=sertifikat::where('user_id',$user_id)->get();
        $pekerjaan=pekerjaan::where('user_id',$user_id)->get();
        $pendidikan=pendidikan::where('user_id',$user_id)->get();
        return view('member/profile')->with('pribadi',$data_pribadi)->with('skp',$skp)
        ->with('sertifikat',$sertifikat)
        ->with('pekerjaan',$pekerjaan)->with('pendidikan',$pendidikan);
    }
}
