@extends('layouts.app')

@section('content')
@include('layouts.errors')
@include('layouts.success')

<div class="container">

<div class="panel">
    <div class="panel-body">

      <div class="row">
         <div class="row">

          <div class="col-md-3" id="leftCol">

           @if (Auth::guest())
           @include('layouts.login-sidebar')
           @else

           @include('layouts.account-sidebar')

           @endif
         </div>
         <div class="col-md-9">
       <p><strong>Selamat, registrasi IKPI Anda telah berhasil.</strong></p>
<p> </p>
<p>Terima kasih sudah bergabung dengan IKPI. Sebagai anggota IKPI Anda akan memperoleh berbagai peluang dan informasi mengenai kegiatan IKPI.</p>
<p>Akun Anda membutuhkan <strong>verifikasi</strong>, Silakan melakukan pengecekan email  yang telah didaftarkan <strong> </strong><untuk <strong>konfirmasi</strong> pendaftaran IAI Lounge Anda. Kami menyarankan untuk mengecek juga di<strong> folder "junk"</strong> apabila memang belum ditemukan. </p>
<p>Email yang anda terima dapat dengan mudah diaktifkan dengan <strong>mengklik tautan</strong> yang diberikan pada email tersebut. </p>
<p> </p>
<p>Salam Sukses,</p>
<p> </p>
<p>Tim IAI</p>
         </div>
       </div>
   
        </div>

   
     </div>

   </div>
 </div>

 @endsection
