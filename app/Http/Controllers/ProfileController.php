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
use App\Http\Requests\ImagePostRequest;
use App\Http\Requests\ExtendPostRequest;
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

    public function getImgProf($filename){

        $pribadi = data_pribadi::select('foto','foto_mime')->where('foto', '=', $filename)->firstOrFail();
        $file = Storage::disk('imgprofile')->get($pribadi->foto);
        $type = $pribadi->foto_mime;
        $response= Response::make($file, 200);
        $response->header("Content-Type", $type);
        
        return $response;
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
  public function changephoto(ImagePostRequest $request){
      

   if(Input::file())
   {
    $file = Input::file('foto');
    $extension = $file->getClientOriginalExtension();
    $mime=$file->getClientMimeType();
    
    $image = Image::make($file)->resize(300, 300);
    $image=$image->stream();
    $folder = $_SERVER['DOCUMENT_ROOT'] . '/tmp/';
    
$user=Auth::user()->email;
    $filename  = time() .'-'.$user. '-profile.'. $extension;

    Storage::disk('imgprofile')->put($filename,  $image->__toString());


    $pribadi=data_pribadi::where('user_id',Auth::user()->id)->first();
    $pribadi->foto=$filename;
    $pribadi->foto_mime = $mime;
    $pribadi->save();
}
       /* $image = Input::file('foto');

        $filename  = time() . '-' . Str::slug($request->name).'.'. $image->getClientOriginalExtension();

        $path = public_path('image/'.$filename);

        move_uploaded_file($image->getRealPath(), $path);
               // Image::make($image->getRealPath())->resize(200, 200)->save($path);
        $request->photo = $filename;*/

        

   /*     return Redirect::back()

        ->withSuccess('Foto diubah');*/
    }
    public function uploadDocument(Request $request){
      

   if(Input::file())
   {
    $file = Input::file('file');
    $extension = $file->getClientOriginalExtension();
    $mime=$file->getClientMimeType();
    
    $user=Auth::user()->email;
  /*  $image=$image->stream();
    $folder = $_SERVER['DOCUMENT_ROOT'] . '/tmp/';*/
    

    $filename  = time() . '-'.$user.'-.'.$file->getClientOriginalName().'-.'. $extension;

    Storage::disk('filereq')->put($filename, file_get_contents($file->getRealPath()));


    $pribadi=data_pribadi::select('user_id')->where('user_id',Auth::user()->id)->first();
    
  $berkas=new berkas;
  $berkas->nama=$filename;
  $berkas->format=$extension;
  $berkas->mime=$mime;
  $berkas->status="";
  $berkas->user_id=$pribadi->user_id;
  $berkas->save();
  return Response::json( $berkas->id);
}
     
    }

    public function deleteDocument(Request $request){
        $id=$request->id;
        $berkas=berkas::findorFail($id);
        $berkas->delete_stat=1;
        $berkas->save();
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
        //echo $pendidikan;
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

public function setMember(ExtendPostRequest $request){
/*    if(Input::file())
    {

          $file = Input::file('photo');
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

*/


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

/*  Mail::send('emails.confirmation_member', ['title' => $panggilan, 'name' => $pribadi->nama, 'link_confirmation'=>$registrasi->confirmation_link], function ($message) use ($pribadi)
  {

      $message->from('noreply.ikpi@gmail.com', 'IKPI');
      $email=$pribadi->email;
      $message->to($pribadi->email)->subject("Konfimasi Anggota");

  });*/
  return view('process_member/confirmation_data')->with('pribadi',$pribadi)->with('step',$registrasi->step_registration);
}

public function confirmation(Request $request){


    $id=$request->id;

    $registration=registration::where('confirmation_link',$id)->first();

if($registration==null){
 return Redirect::route('profil')->withErrors('Link konfirmasi pembayaran anda salah');

}
else{
     $step=$registration->step_registration;
   $registration->step_registration=6;
    $registration->save();
        $user_id=$registration->user_id;

    $pribadi=data_pribadi::where('user_id',$user_id)->firstOrFail();
    return view('process_member/pembayaran')->with('nama',$pribadi->nama)->with('step', $step);
}




}



public function Payment(Request $request){
 $user_id=Auth::user()->id;
 $pembayaran=new pembayaran;
 if($request->tipe=="transfer"){


      if(Input::file())
      {

       $file = Input::file('bukti');
    $extension = $file->getClientOriginalExtension();
       $mime=$file->getClientMimeType();
    
    
    $user=Auth::user()->email;
    $filename  = time() .'-'.$user. '-transfer.'. $extension;

    Storage::disk('filepay')->put($filename,  file_get_contents($file->getRealPath()));
    
        $request->bukti_transfer = $filename;
        $request->mime=$mime;

      }
      else{
       $request->bukti_transfer="";
       $request->mime="";
     }

$pembayaran->jenis=$request->tipe;
$pembayaran->tanggal=$request->tgl_bayar;
$pembayaran->jumlah=$request->jumlah;

$pembayaran->bank_penerima=$request->bank_pen;
$pembayaran->bank_pengirim=$request->bank_peng;
$pembayaran->rekening_pengirim=$request->rek_peng;
$pembayaran->pemegang_rekening=$request->rek_nama;
$pembayaran->bukti_transfer=$request->bukti_transfer;
$pembayaran->mime=$request->mime;
$pembayaran->save();
$registration=registration::where('user_id',$user_id)->first();
 $registration->step_registration=7;
    $registration->save();
return Redirect::route('profil');
 }
 else  if($request->tipe=="kasir"){
$pembayaran->jenis=$request->tipe;
$pembayaran->tanggal=$request->tgl_bayar;
$pembayaran->jumlah=$request->jumlah;
$pembayaran->lokasi=$request->lokasi;
$pembayaran->no_kwitansi=$request->kwitansi;
$pembayaran->save();
$registration=registration::where('user_id',$user_id)->first();
 $registration->step_registration=7;
    $registration->save();
return Redirect::route('profil');
 }
}

public function refreshData(){
   $user_id=Auth::user()->id;
        $data_pribadi=data_pribadi::where('user_id',$user_id)->first();
        return Response::json($data_pribadi);
/*    return redirect()->back()->withSuccess('Data diubah'); */
}

}

