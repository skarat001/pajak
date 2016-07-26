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
       <p><strong>Verfikasi anggota berhasil</strong></p>
<p> </p>

<p>Silahkan melakukan <strong>login</strong> pada form yang telah tersedia. Data <strong>username</strong> dan <strong>password</strong> anda dapat dilihat pada email anda.
<p> </p>
<p>Salam Sukses,</p>
<p> </p>
<p>Tim IKPI</p>
         </div>
       </div>
   
        </div>

   
     </div>

   </div>
 </div>

 @endsection
