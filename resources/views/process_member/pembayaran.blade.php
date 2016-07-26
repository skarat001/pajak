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
         <p><strong>Konfirmasi Pembayaran Anggota IKPI</strong></p>
         <p> </p>

         <p>Silahkan memasukkan data transaksi sesuai dengan methode pembayaran yang telah dilakukan</p>
         <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Kasir</a></li>
          <li><a data-toggle="tab" href="#menu1">Transfer</a></li>
      
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
           <form class="form-horizontal" action="{{URL::route('kasir')}}">
            <div class="form-group">
            <label class="col-md-3" for="hp" >Nama Calon Anggota</label>
              <div  class="col-md-9">
               {{$nama}}
              </div>
            </div>
               <div class="form-group">
            <label class="col-md-3" for="hp" >Tanggal Bayar</label>
              <div  class="col-md-4">
             <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" name="tgl_bayar" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
              </div>
            </div>
             <div class="form-group">
            <label class="col-md-3" for="hp" >Sebesar</label>
              <div  class="col-md-6">
               <input type="text" class="form-control" value="Rp. 125.000" disabled="true" name="uang">
              </div>
            </div>
             <div class="form-group">
            <label class="col-md-3" for="hp" >Lokasi Bayar</label>
              <div  class="col-md-6">
                {{
           Form::select('lokasi',
           [
          'Nanggroe Aceh Darussalam'=>'Nanggroe Aceh Darussalam',
           'Sumatera Utara'=>'Sumatera Utara',
           'Sumatera Barat'=>'Sumatera Barat',
           'Riau'=>'Riau',
           'Jambi'=>'Jambi',
           'Sumatera Selatan'=>'Sumatera Selatan',
           'Bengkulu'=>'Bengkulu',
           'Lampung'=>'Lampung',
           'Kepulauan Bangka Belitung'=>'Kepulauan Bangka Belitung',
           'Kepulauan Riau'=>'Kepulauan Riau',
           'DKI Jakarta'=>'DKI Jakarta',
           'Jawa Barat'=>'Jawa Barat',
           'Jawa Tengah'=>'Jawa Tengah',
           'DI Yogyakarta'=>'DI Yogyakarta',
           'Jawa Timur'=>'Jawa Timur',
           'Banten'=>'Banten',
           'Bali'=>'Bali',
           'Nusa Tenggara Barat'=>'Nusa Tenggara Barat',
           'Nusa Tenggara Timur'=>'Nusa Tenggara Timur',
           'Kalimantan Barat'=>'Kalimantan Barat',
           'Kalimantan Selatan'=>'Kalimantan Selatan',
           'Kalimantan Timur'=>'Kalimantan Timur',
           'Kalimantan Tengah'=>'Kalimantan Tengah',
           'Sulawesi Utara'=>'Sulawesi Utara',
           'Sulawesi Tengah'=>'Sulawesi Tengah',
           'Sulawesi Selatan'=>'Sulawesi Selatan',
           'Sulawesi Tenggara'=>'Sulawesi Tenggara',
           'Gorontalo'=>'Gorontalo',
           'Sulawesi Barat'=>'Sulawesi Barat',
           'Maluku'=>'Maluku',
           'Maluku Utara'=>'Maluku Utara',
           'Papua'=>'Papua',
           'Papua Barat'=>'Papua Barat',
           'Kalimantan Utara'=>'Kalimantan Utara',
           ] ,
          'Nanggroe Aceh Darussalam', array('class' => 'form-control'))
         }}
              </div>
            </div>
               
             <div class="form-group">
            <label class="col-md-3" for="hp" >Nomor Kwitansi</label>
              <div  class="col-md-6">
               <input type="text" class="form-control" value=""  name="kwitansi">
              </div>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Kirim"/>
            </div>
          </form>
        </div>
        <div id="menu1" class="tab-pane fade">
     <img src="{{ asset('/image/web/mandiri.png')}}" width="150px" class="img_bank">
     <img src="{{ asset('/image/web/bca.png')}}" width="150px" class="img_bank">
     <img src="{{ asset('/image/web/cimb.png')}}" width="150px" class="img_bank">
     <img src="{{ asset('/image/web/panin.png')}}" width="150px" class="img_bank">
     <img src="{{ asset('/image/web/bri.jpg')}}" width="150px" class="img_bank">

     <form class="form-horizontal" action="{{URL::route('kasir')}}">
            <div class="form-group">
            <label class="col-md-3" for="hp" >Nama Calon Anggota</label>
              <div  class="col-md-9">
               {{$nama}}
              </div>
            </div>
               <div class="form-group">
            <label class="col-md-3" for="hp" >Tanggal Bayar</label>
              <div  class="col-md-4">
             <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" name="tgl_bayar" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
              </div>
            </div>

             <div class="form-group">
            <label class="col-md-3" for="hp" >Sebesar</label>
              <div  class="col-md-6">
               <input type="text" class="form-control" value="Rp. 125.000" disabled="true" name="uang">
              </div>
            </div>
    <div class="form-group">
            <label class="col-md-3" for="hp" >Bank Pengirim</label>
              <div  class="col-md-6">
                {{
           Form::select('lokasi',
           [
          'Bank Mandiri Jakarta (123 123456 1234)'=>'Bank Mandiri Jakarta (123 123456 1234)',
           'Bank BCA Jakarta (9876533222)'=>'Bank BCA Jakarta (9876533222)',
     
           ] ,
           'Bank Mandiri Jakarta (123 123456 1234)', array('class' => 'form-control'))
         }}
              </div>
            </div>

   <div class="form-group">
            <label class="col-md-3" for="hp" >Bank Pengirim</label>
              <div  class="col-md-6">
               <input type="text" class="form-control" value=""  name="bank_peng">
              </div>
            </div>
            <div class="form-group">
            <label class="col-md-3" for="hp" >No Rekening Pengirim</label>
              <div  class="col-md-6">
               <input type="text" class="form-control" value=""  name="rek_peng">
              </div>
            </div>
            <div class="form-group">
            <label class="col-md-3" for="hp" >Nama Pemegang Rekening</label>
              <div  class="col-md-6">
               <input type="text" class="form-control" value=""  name="rek_nama">
              </div>
            </div>
            <div class="form-group">
            <label class="col-md-3" for="hp" >Bukti Transfer</label>
              <div  class="col-md-6">
               <input type="file" class="form-control" value=""  name="bukti">
              </div>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Kirim"/>
            </div>
</form>
      </div>
    </div>
  </div>

</div>


</div>

</div>
</div>
<script >

  $( document ).ready(function() {

    $(function () {
      $('#datetimepicker1').datetimepicker({
       format: 'YYYY-MM-DD'
     });
    });
  });
  </script>

@stop

