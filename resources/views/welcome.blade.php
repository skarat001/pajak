@extends('layouts.app')

@section('content')
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
<br>
    <div class="row">

        <div class="col-md-3" id="leftCol">
                
         @if (Auth::guest())
                       @include('layouts.login-sidebar')
                    @else
                        <li class="dropdown">
                           @include('layouts.account-sidebar')
                        </li>
                  @endif
            </div>  
        <div class="col-md-9 intro">
             <img src="http://www.shkoh.com.sg/wp-content/uploads/2013/05/handshake2.png" class="img" alt="img1">
        </div>
    </div>
</div>

</div>
</div>
<link  href="{{ asset("/css/home.css")}}" rel="stylesheet"/>
@endsection

