@extends('layouts.app')

@section('content')
<div class="container">

  <div class="panel">
    <div class="panel-body">

      <br>
      <div class="row">

        <div class="col-md-3" id="leftCol">

         @include('layouts.login-sidebar')
       </div>  
       <div class="col-md-9">

        @include('layouts.step-member')
        <?php $messages =$errors; ?>
        <form class="form-horizontal" method="POST" action="{{url('/pendaftaran')}}" 
        enctype="multipart/form-data" id="form-registrasi">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>Registrasi Keanggotaan {{config('public.acronim')}} </h1>
        <h2 class="form-signin-heading">Data Pribadi</h2>
      
        <div class="form-group @if($messages->first('name')!=null) has-error @endif">
          <label class="col-md-3" for="Name" >Nama Lengkap*</label>
          <div  class="col-md-9">
            <input  type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" autofocus>
           <span class="text-danger " > {{$messages->first('name')}}</span>

          </div>

        </div>
        <div class="row">
         
          <div  class="col-md-8 form-group @if($messages->first('place_birth')!=null) has-error @endif"> <label  class="col-md-5 " for="ttl" >Tempat/Tanggal Lahir*</label>
          <div class="col-md-7">
            <input  type="text" id="place-birth"  name="place_birth" class="form-control"  placeholder="tempat lahir" value="{{ old('place_birth') }}">
             <span class="text-danger " > {{$messages->first('place_birth')}}</span>
          </div>
          </div>
          <div  class="col-md-4 form-group @if($messages->first('date_birth')!=null) has-error @endif">
           <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" name="date_birth"  placeholder="tanggal lahir" value="{{ old('date_birth') }}"/>
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
 <span class="text-danger " > {{$messages->first('date_birth')}}</span>
        </div>
      </div>
      <div class="form-group @if($messages->first('ktp')!=null) has-error @endif">
        <label class="col-md-3" for="ktp" >Nomor Kartu Tanda Penduduk*</label>
        <div  class="col-md-9">
          <input  type="text" id="ktp" name="ktp" class="form-control"  autofocus value="{{ old('ktp') }}">
 <span class="text-danger " > {{$messages->first('ktp')}}</span>
              </div>
      </div>  
      <div class="form-group ">
        <label class="col-md-3" for="jk" >Jenis Kelamin*</label>
        <div  class="col-md-9">
          <div class="radio">
            <label><input type="radio" value="Pria" name="jk"
              @if(old('jk')=="Pria"||old('jk')=="")
              checked="true"
              @endif

              >Pria</input></label>
            </div>
            <div class="radio">

              <label><input type="radio" value="Wanita" name="jk"
               @if(old('jk')=="Wanita")
               checked="true"
               @endif
               >Wanita</input></label>
             </div>
           </div>
         </div> 
         <div class="form-group">
          <label class="col-md-3" for="agama" >Agama</label>
          <div  class="col-md-9">
            {{
            Form::select('agama',
            [
            'Islam'=>'Islam',
            'Kristen'=>'Kristen',
            'Katolik'=>'Katolik',
            'Hindu'=>'Hindu',
            'Budha'=>'Budha',
            'Lainnya'=>'Lainnya',
            ] ,
            old('agama'), array('class' => 'form-control'))
          }}
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3" for="pendidikan" >Pendidikan*</label>
        <div  class="col-md-9">
          {{
          Form::select('pendidikan',
          [
          'SMA atau sederajat'=>'SMA atau sederajat',
          'DIII'=>'DIII',
          'DIV'=>'DIV',
          'PPA'=>'PPA',
          'SI'=>'SI',
          'S2'=>'S2',
          'S3'=>'S3',
          'Profesor'=>'Profesor',
          ] ,
          old('pendidikan'), array('class' => 'form-control'))
        }}

      </div>
    </div>
    <div class="form-group ">
      <label class="col-md-3" for="alamat" >Alamat Rumah*</label>
      <div  class="col-md-9">

        <div class="form-group">
          <label class="col-md-2" for="Provinsi" >Provinsi</label>
          <div  class="col-md-10">
           {{
           Form::select('prov',
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
           old('prov'), array('class' => 'form-control'))
         }}
       </div>
     </div>
     <div class="form-group @if($messages->first('alamat')!=null) has-error @endif">
      <label class="col-md-2" for="alamat_l" >Alamat Lengkap</label>
      <div  class="col-md-10">
       <textarea class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}"></textarea>
 <span class="text-danger " > {{$messages->first('alamat')}}</span>
     </div>
   </div>
   <div class="form-group @if($messages->first('pos')!=null) has-error @endif">
    <label class="col-md-2" for="pos" >Kode Pos</label>
    <div  class="col-md-10">
      <input  type="text" id="pos" name="pos" class="form-control" value="{{ old('pos') }}" >
 <span class="text-danger " > {{$messages->first('pos')}}</span>
    </div>
  </div>
</div>
</div>
<div class="form-group @if($messages->first('email')!=null) has-error @endif">
  <label class="col-md-3" for="email" >Email*</label>
  <div  class="col-md-9">
    <input  type="text" id="email" name="email" class="form-control" value="{{ old('email') }}" >
     <span class="text-danger " > {{$messages->first('email')}}</span>
  </div>
</div>

<div class="form-group @if($messages->first('telp')!=null) has-error @endif">
  <label class="col-md-3" for="telp" >Nomor Telepon Rumah</label>
  <div  class="col-md-9">
    <input  type="text" id="telp" name="telp" class="form-control"  value="{{ old('telp') }}">
   <span class="text-danger " > {{$messages->first('telp')}}</span>
  </div>
</div>

<div class="form-group @if($messages->first('fax')!=null) has-error @endif">
  <label class="col-md-3" for="fax" >Nomor Fax Rumah</label>
  <div  class="col-md-9">
    <input  type="text" id="fax" name="fax" class="form-control"  value="{{ old('fax') }}">
   <span class="text-danger " > {{$messages->first('fax')}}</span>
  </div>
</div>

<div class="form-group @if($messages->first('hp')!=null) has-error @endif">
  <label class="col-md-3" for="hp" >Handphone*</label>
  <div  class="col-md-9">
    <input  type="text" id="hp" name="hp" class="form-control"  value="{{ old('hp') }}">
   <span class="text-danger " > {{$messages->first('hp')}}</span>
  </div>
</div>
<div class="form-group ">
  <label class="col-md-3" for="photo" >Unggah Foto Profil</label>
  <div  class="col-md-9">
    <input  type="file" id="photo" name="photo" class="form-control"  >
  </div>
</div>

<h3>Pekerjaan saat ini</h3>
<div class="form-group @if($messages->first('perusahaan')!=null) has-error @endif">
  <label class="col-md-3" for="hp" >Nama Perusahaan/Institusi</label>
  <div  class="col-md-9">
    <input  type="text" id="perusahaan" name="perusahaan" class="form-control"  value="{{ old('perusahaan') }}">
     <span class="text-danger " > {{$messages->first('perusahaan')}}</span>
  </div>
</div>

<div class="form-group @if($messages->first('jabatan_perusahaan')!=null) has-error @endif">
  <label class="col-md-3" for="hp" >Jabatan</label>
  <div  class="col-md-9">
    <input  type="text" id="jabatan_perusahaan" name="jabatan_perusahaan" class="form-control" value="{{ old('jabatan_perusahaan') }}" >
     <span class="text-danger " > {{$messages->first('jabatan_perusahaan')}}</span>
  </div>
</div>
<div class="form-group @if($messages->first('alamat_perusahaan')!=null) has-error @endif">
  <label class="col-md-3" for="alamat_perusahaan" >Alamat Perusahaan</label>
  <div  class="col-md-9">
    <input  type="text" id="alamat_perusahaan" name="alamat_perusahaan" class="form-control"  value="{{ old('alamat_perusahaan') }}">
     <span class="text-danger " > {{$messages->first('alamat_perusahaan')}}</span>
  </div>
</div>
<div class="form-group ">
  <label class="col-md-3" for="alamat" >Alamat Korespondensi</label>
  <div  class="col-md-9">
   <div class="radio">
    <label><input type="radio" value="Kantor" name="korespondensi_perusahaan" 
     @if(old('korespondensi_perusahaan')=="Kantor"||old('korespondensi_perusahaan')=="")
              checked="true"
              @endif
  >Kantor</input></label>
  </div>
  <div class="radio">
    <label><input type="radio" value="Rumah" name="korespondensi_perusahaan" 
   @if(old('korespondensi_perusahaan')=="Rumah")
              checked="true"
              @endif
    >Rumah</input></label>
  </div>
</div>
</div>
<div class="form-group @if($messages->first('telepon_perusahaan')!=null) has-error @endif">
  <label class="col-md-3" for="telp" >Nomor Telepon</label>
  <div  class="col-md-9">
    <input  type="text" id="telepon_perusahaan" name="telepon_perusahaan" class="form-control"  value="{{ old('telepon_perusahaan') }}">
     <span class="text-danger " > {{$messages->first('telepon_perusahaan')}}</span>
  </div>
</div>
<div class="form-group @if($messages->first('extension_perusahaan')!=null) has-error @endif">
  <label class="col-md-3" for="hp" >Extension</label>
  <div  class="col-md-9">
    <input  type="text" id="extension_perusahaan" name="extension_perusahaan" class="form-control"  value="{{ old('extension_perusahaan') }}">
     <span class="text-danger " > {{$messages->first('extension_perusahaan')}}</span>
  </div>
</div>
<div class="form-group @if($messages->first('fax_perusahaan')!=null) has-error @endif">
  <label class="col-md-3" for="hp" >Nomor Fax</label>
  <div  class="col-md-9">
    <input  type="text" id="fax_perusahaan" name="fax_perusahaan" class="form-control"  value="{{ old('fax_perusahaan') }}">
     <span class="text-danger " > {{$messages->first('fax_perusahaan')}}</span>
  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="hp" >Job Level</label>
  <div  class="col-md-9">
   {{
   Form::select('job_level',
   [    
   'Entry Level'=>'Entry Level',
   'Middle Management'=>'Middle Management',
   'Senior Management'=>'Senior Management',
   'Top Management'=>'Top Management',
   ] ,
   old('job_level'), array('class' => 'form-control'))
 }}

</div>
</div>
<div class="form-group">
  <label class="col-md-3" for="hp" >Kategori Pekerjaan</label>
  <div  class="col-md-9">
   {{
   Form::select('job_category',
   [
   'Akuntan Sektor Publik'=>'Akuntan Sektor Publik',
   'Akuntan Pendidik'=>'Akuntan Pendidik',
   'Akuntan Manajemen'=>'Akuntan Manajemen',
   'Akuntan Publik'=>'Akuntan Publik',
   'Akuntan Pajak'=>'Akuntan Pajak',
   'Internal Audit'=>'Internal Audit',
   'Lainnya'=>'Lainnya',
   ] ,
   old('job_category'), array('class' => 'form-control'))
 }}

</div>
</div>
<div class="form-group">
  <label class="col-md-3" for="hp" >Tipe Instansi/Perusahaan</label>
  <div  class="col-md-9">
   {{
   Form::select('tipe_perusahaan',
   [
   'Listed Company'=>'Listed Company',
   'BUMN'=>'BUMN',
   'BUMD'=>'BUMD',
   'Multinasional'=>'Multinasional',
   'Small Medium Enterprise'=>'Small Medium Enterprise',
   'Non-SME'=>'Non-SME',
   'Lainnya'=>'Lainnya',
   ] ,
   old('tipe_perusahaan'), array('class' => 'form-control'))
 }}

</div>
</div>
<div class="form-group">
  <label class="col-md-3" for="hp" >Kategori Bisnis</label>
  <div  class="col-md-9">
   {{
   Form::select('kategori_bisnis',
   [
   'Pemerintah'=>'Pemerintah',
   'Pendidikan'=>'Pendidikan',
   'Manufaktur'=>'Manufaktur',
   'Perbankan'=>'Perbankan',
   'Auditing &amp; Assurance'=>'Auditing &amp; Assurance',
   'Konstruksi'=>'Konstruksi',
   'Konsultan'=>'Konsultan',
   'Properti'=>'Properti',
   'Asuransi'=>'Asuransi',
   'Keuangan'=>'Keuangan',
   'Pajak'=>'Pajak',
   'Migas'=>'Migas',
   'Perdagangan'=>'Perdagangan',
   'Agrobisnis'=>'Agrobisnis',
   'Hotel'=>'Hotel',
   'IT &amp; Telekomunikasi'=>'IT &amp; Telekomunikasi',
   'Shipping'=>'Shipping',
   'Lainnya'=>'Lainnya',
   ] ,
   old('kategori_bisnis'), array('class' => 'form-control'))
 }}

</div>
</div>
</div>
<button class="btn btn-lg pull-right btn-primary " type="submit">Daftar Anggota</button>
</form>

</div>
</div>
</div>

</div>
</div>
<script >

</script>

@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ asset("/bower_components/moment/min/moment.min.js")}}"></script>

<script type="text/javascript" src="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js")}}"></script>

<script >
  $( document ).ready(function() {
    $(function () {
      $('#datetimepicker1').datetimepicker({
       format: 'YYYY-MM-DD'
     });
    });
  });
/*myFunction();
function myFunction() {
  var x = document.querySelectorAll('input,textarea,select');

  console.log("x: " + x);
  console.log("Number of inputs: " + x.length);

  var arrayOfInputNames = [];
var name;
  for (var i = 0; i < x.length; i++) {
  //for(key in x) {
    console.log("i: " + i);
    console.log("value: " + x[i].name);
name=name+" "+x[i].name;
    arrayOfInputNames.push(x[i].name);
  }

  console.log(name);
  document.getElementById("demo").innerHTML = arrayOfInputNames;
}*/
/*
var x=document.getElementById("form-registrasi").elements
var print="";
 for (var i = 0; i < x.length; i++) {
  //for(key in x) {
  
    print+=x[i].name+" \n";

 
  }
  console.log(print);*/
</script>
@stop


@section('styles')
<link rel="stylesheet" href="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css")}}" />
@show
