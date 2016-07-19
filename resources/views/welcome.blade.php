@extends('layouts.app')

@section('content')
@include('layouts.errors')
@include('layouts.success')

<div class="container">

<div class="panel">
    <div class="panel-body">

      <div class="row">
        <div class="col-md-12">

          <h2 >Selamat Datang</h2>
          <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel odio velit. Morbi est nulla, aliquam nec tristique ac, lacinia eget nibh. Ut lacinia ipsum pretium, faucibus quam pulvinar, pellentesque neque.

            <br> Silakan memulai dengan mengklik tombol di bawah. </span>
            @if (Auth::guest())
            <a href="pendaftaran" class="btn btn-primary pull-right btn-lg " type="button">Daftar Anggota</a>
            @endif

          </div>
        </div>
<br/>
        <div class="row">

          <div class="col-md-3" id="leftCol">

           @if (Auth::guest())
           @include('layouts.login-sidebar')
           @else

           @include('layouts.account-sidebar')

           @endif
         </div>
         <div class="col-md-9">
           <img src="{{ URL::asset('image/web/4.jpg') }}" class="img " alt="img1" style="max-height:350px;width:100%">
         </div>
       </div>
     </div>

   </div>
 </div>

 @endsection
