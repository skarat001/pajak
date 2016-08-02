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
         @include('layouts.step-member')
         <br/><br/>
       <p><strong>Selamat, konfirmasi pembayaran anda berhasil diinput.</strong></p>
<p> </p>
<p>Terima kasih sudah melakukan konfirmasi pembayaran untuk registrasi anggota IKPI.</p>
<p>Selanjutnya kami akan melakukan mengevaluasi data dan berkas-berkas anda. </p>
<p>Kami akan memberikan notifikasi apabila proses evaluasi telah selesai</p>
<p> </p>
<p>Salam Sukses,</p>
<p> </p>
<p>Tim IKPI</p>
<p></p>
<p><a href="{{URL::route('profil')}}" class="btn btn-link">Kembali ke profil</a></p>
         </div>
       </div>
   
        </div>

   
     </div>

   </div>
 </div>

 @endsection
