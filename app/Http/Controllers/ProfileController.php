<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\skp;
use App\data_pribadi;
use App\pendidikan;
use App\pekerjaan;
use App\sertifikat;
use App\registration;
use Mail;
use stdclass;
use Response;

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
        $sertifikat=sertifikat::where('user_id',$user_id)->where("delete_stat",0)->get();
        $pekerjaan=pekerjaan::where('user_id',$user_id)->where("delete_stat",0)->get();
        $pendidikan=pendidikan::where('user_id',$user_id)->where("delete_stat",0)->get();

        $registration=new registration;

        return view('member/profile')->with('pribadi',$data_pribadi)->with('skp',$skp)
        ->with('sertifikat',$sertifikat)
        ->with('pekerjaan',$pekerjaan)->with('pendidikan',$pendidikan)
        ->with('step',$registration->getStep());
    }

    public function getProfile(){
      $user_id=Auth::user()->id;
      $sertifikat=sertifikat::where('user_id',$user_id)->where("delete_stat",0)->get();
      $pekerjaan=pekerjaan::where('user_id',$user_id)->where("delete_stat",0)->get();
      $pendidikan=pendidikan::where('user_id',$user_id)->where("delete_stat",0)->get();
      $data=new stdClass();
      $data->pekerjaan=$pekerjaan;
      $data->pendidikan=$pendidikan;
      $data->sertifikat=$sertifikat;
      return Response::json($data);
  }
  public function changephoto(Request $request){
   if(Input::file())
   {

    $image = Input::file('foto');

    $filename  = time() . '-' . Str::slug($request->name).'.'. $image->getClientOriginalExtension();

    $path = public_path('image/'.$filename);

    move_uploaded_file($image->getRealPath(), $path);
               // Image::make($image->getRealPath())->resize(200, 200)->save($path);
    $request->photo = $filename;

}
$pribadi=data_pribadi::where('user_id',Auth::user()->id)->first();
$pribadi->foto=$filename;
$pribadi->save();
return Redirect::back()

->withSuccess('Foto diubah');
}
public function updateDataPribadi(Request $request){

    $id=Auth::user()->id;
    $pribadi=data_pribadi::where('user_id',$id)->first();

    $pribadi->nama=$request->name;
    $pribadi->tempat_lahir=$request->place_birth;
    $pribadi->tanggal_lahir=$request->date_birth;
    $pribadi->no_ktp=$request->ktp;
    $pribadi->npwp=$request->npwp;
    $pribadi->no_registrasi=$request->no_registrasi;
    $pribadi->jenis_kelamin=$request->jk;
    $pribadi->agama=$request->agama;
    $pribadi->alamat_provinsi=$request->prov;
    $pribadi->alamat=$request->alamat;
    $pribadi->rt=$request->rt;
    $pribadi->rw=$request->rw;
    $pribadi->kelurahan=$request->kelurahan;
    $pribadi->kecamatan=$request->kecamatan;
    $pribadi->alamat_pos=$request->pos;
    $pribadi->email=$request->email;
    $pribadi->telp=$request->telp;
    $pribadi->fax=$request->fax;
    $pribadi->hp=$request->hp;
    $pribadi->save();
    return redirect()->back()->withInput()->withSuccess('Data diubah');
    //return redirect('/profil')->withSuccess('Data diubah');
}

public function updateDataPekerjaan(Request $request){

    $id=Auth::user()->id;
    $pribadi=data_pribadi::where('user_id',$id)->first();
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
    $pribadi->save();
    return redirect('/profil')->withSuccess('Data diubah');
}

public function setDataPendidikan(Request $request){
    $id_pend=$request->id_pend;
    if($id_pend==""){
        $id=Auth::user()->id;
        $pendidikan= new pendidikan;
        $pendidikan->user_id=$id;
    }
    else{
        $pendidikan=pendidikan::where('id',$id_pend)->first();    
    }
    
    $pendidikan->tanggal=$request->date_certificate;
    $pendidikan->sekolah=$request->sekolah;
    $pendidikan->prodi=$request->prodi;
    $pendidikan->jenjang=$request->jenjang;
    $pendidikan->kota=$request->kota;
    
    $pendidikan->save();
    echo $pendidikan;
    return redirect()->back()->withInput()->withSuccess('Data diubah');
    //  return redirect('/profil')->withSuccess('Data diubah');
}

public function deleteDataPendidikan(Request $request){
 $id_pend=$request->id;
 $pendidikan=pendidikan::where('id',$id_pend)->first();
 $pendidikan->delete_stat=1;
 $pendidikan->save();
   //return redirect('/profil')->withSuccess('Data dihapus');
 return redirect()->back()->withInput()->withSuccess('Data dihapus');
}
public function setDataPekerjaan(Request $request){
    $id_pek=$request->r_id_pek;
    if($id_pek==""){
        $id=Auth::user()->id;
        $pekerjaan= new pekerjaan;
        $pekerjaan->user_id=$id;
    }
    else{
        $pekerjaan=pekerjaan::where('id',$id_pek)->first();    
    }
    
    $pekerjaan->nama=$request->r_perusahaan;
    $pekerjaan->jabatan=$request->r_jabatan;
    $pekerjaan->divisi=$request->r_divisi;
    $pekerjaan->masuk=$request->r_mulai;
    $pekerjaan->keluar=$request->r_akhir;
    $pekerjaan->durasi=$request->r_lama;
    $pekerjaan->deskripsi=$request->r_uraian;
    $pekerjaan->save();
    //return redirect('/profil')->withSuccess('Data diubah');
    return redirect()->back()->withInput()->withSuccess('Data diubah');
}
public function deleteDataPekerjaan(Request $request){
 $id_pek=$request->id;
 $pekerjaan=pekerjaan::where('id',$id_pek)->first();
 $pekerjaan->delete_stat=1;
 $pekerjaan->save();
   //return redirect('/profil')->withSuccess('Data dihapus');
 return redirect()->back()->withInput()->withSuccess('Data dihapus');
}

public function setDataSertifikat(Request $request){
    $id_ser=$request->id_ser;
    if($id_ser==""){
        $id=Auth::user()->id;
        $sertifikat= new sertifikat;
        $sertifikat->user_id=$id;
    }
    else{
        $sertifikat=sertifikat::where('id',$id_ser)->first();    
    }
    
    $sertifikat->tanggal=$request->tanggal;
    $sertifikat->nama=$request->nama;
    $sertifikat->no=$request->nomor;
    $sertifikat->penyelenggara=$request->penyelenggara;

    $sertifikat->save();
    //return redirect('/profil')->withSuccess('Data diubah');
    return redirect()->back()->withInput()->withSuccess('Data diubah');
}
public function deleteDataSertifikat(Request $request){
 $id_ser=$request->id;
 $sertifikat=sertifikat::where('id',$id_ser)->first();
 $sertifikat->delete_stat=1;
 $sertifikat->save();
   //return redirect('/profil')->withSuccess('Data dihapus');
 return redirect()->back()->withInput()->withSuccess('Data dihapus');
}

public function setMember(Request $request){
    if(Input::file())
    {

        $image = Input::file('photo');

        $filename  = time() . '-' . Str::slug($request->name).'.'. $image->getClientOriginalExtension();

        $path = public_path('image/'.$filename);

        move_uploaded_file($image->getRealPath(), $path);
               // Image::make($image->getRealPath())->resize(200, 200)->save($path);
        $request->photo = $filename;

    }




    $user_id=Auth::user()->id;

    $pribadi=data_pribadi::where('user_id',$user_id)->first();

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
    $pribadi->user_id=$user_id;
    $pribadi->save();

    $registrasi=registration::where('user_id',$user_id)->first();
    $registrasi->step_registration=5;
     $registrasi->confirmation_link=str_random(15);
    $registrasi->save();

    $panggilan="";
    if ($pribadi->jenis_kelamin=="Pria"){
      $panggilan="Bapak";
  }
  else{
      $panggilan="Ibu";
  }

  Mail::send('emails.confirmation_member', ['title' => $panggilan, 'name' => $pribadi->nama, 'link_confirmation'=>$registrasi->confirmation_link], function ($message) use ($pribadi)
  {

      $message->from('noreply.ikpi@gmail.com', 'IKPI');
      $email=$pribadi->email;
      $message->to($pribadi->email)->subject("Konfimasi Anggota");

  });
  return view('process_member/confirmation_data')->with('pribadi',$pribadi)->with('step',$registrasi->step_registration);
}

public function confirmation(Request $request){
    $id=$request->id;

    $registration=registration::where('confirmation_link',$id)->first();
    $registration->step_registration=6;
$registration->save();

    $user_id=$registration->user_id;

    $pribadi=data_pribadi::where('user_id',$user_id)->first();
    return view('process_member/pembayaran')->with('nama',$pribadi->nama)->with('step', $registration->step_registration);
}

}

