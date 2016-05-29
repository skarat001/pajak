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
                 <form class="form-horizontal" method="POST" action="{{url('/pendaftaran')}}" 
                  enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <h1>Registrasi Keanggotaan {{config('public.acronim')}} </h1>
                  <h2 class="form-signin-heading">Data Pribadi</h2>

                  <div class="form-group">
                    <label class="col-md-3" for="Name" >Nama Lengkap</label>
                    <div  class="col-md-9">
                        <input  type="text" id="name" name="name" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-md-3" for="ttl" >Tempat/Tanggal Lahir</label>
                    <div  class="col-md-4">
                        <input  type="text" id="place-birth"  name="place_birth" class="form-control"  placeholder="tempat lahir" required>
                    </div>
                    <div  class="col-md-4">
                     <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="date_birth"  placeholder="tanggal lahir" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3" for="Name" >Nomor Kartu Tanda Penduduk</label>
                    <div  class="col-md-9">
                        <input  type="text" id="ktp" name="ktp" class="form-control" required autofocus>
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-md-3" for="Name" >Jenis Kelamin</label>
                    <div  class="col-md-9">
                        <div class="radio">
                          <label><input type="radio" value="Pria" name="jk" checked="true">Pria</input>
                          </div>
                          <div class="radio">
                              <label><input type="radio" value="Wanita" name="jk">Wanita</input>
                              </div>
                          </div>
                      </div> 
                      <div class="form-group">
                        <label class="col-md-3" for="Name" >Agama</label>
                        <div  class="col-md-9">
                           <select class="form-control" id="agama" name="agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3" for="Name" >Pendidikan</label>
                    <div  class="col-md-9">
                       <select class="form-control" id="pendidikan" name="pendidikan" required>
                        <option>SMA atau sederajat</option>
                        <option>DIII</option>
                        <option>DIV</option>
                        <option>PPA</option>
                        <option>SI</option>
                        <option>S2</option>
                        <option>S3</option>
                        <option>Profesor</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3" for="Name" >Alamat Rumah</label>
                <div  class="col-md-9">
                    <div class="form-group">
                      <label class="col-md-2" for="Provinsi" >Provinsi</label>
                      <div  class="col-md-10">
                       <select class="form-control" id="prov" name="prov">
                         <option >Nanggroe Aceh Darussalam</option>
                         <option >Sumatera Utara</option>
                         <option >Sumatera Barat</option>
                         <option >Riau</option>
                         <option >Jambi</option>
                         <option >Sumatera Selatan</option>
                         <option >Bengkulu</option>
                         <option >Lampung</option>
                         <option >Kepulauan Bangka Belitung</option>
                         <option >Kepulauan Riau</option>
                         <option >DKI Jakarta</option>
                         <option >Jawa Barat</option>
                         <option >Jawa Tengah</option>
                         <option >DI Yogyakarta</option>
                         <option >Jawa Timur</option>
                         <option >Banten</option>
                         <option >Bali</option>
                         <option >Nusa Tenggara Barat</option>
                         <option >Nusa Tenggara Timur</option>
                         <option >Kalimantan Barat</option>
                         <option >Kalimantan Selatan</option>
                         <option >Kalimantan Timur</option>
                         <option >Kalimantan Tengah</option>
                         <option >Sulawesi Utara</option>
                         <option >Sulawesi Tengah</option>
                         <option >Sulawesi Selatan</option>
                         <option >Sulawesi Tenggara</option>
                         <option >Gorontalo</option>
                         <option >Sulawesi Barat</option>
                         <option >Maluku</option>
                         <option >Maluku Utara</option>
                         <option >Papua</option>
                         <option >Papua Barat</option>
                         <option >Kalimantan Utara</option>


                     </select>
                 </div>
             </div>
             <div class="form-group">
              <label class="col-md-2" for="alamat" >Alamat Lengkap</label>
              <div  class="col-md-10">
               <textarea class="form-control" id="alamat" name="alamat" required></textarea>

           </div>
       </div>
       <div class="form-group">
          <label class="col-md-2" for="pos" >Kode Pos</label>
          <div  class="col-md-10">
              <input  type="text" id="pos" name="pos" class="form-control"  >

          </div>
      </div>
  </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="email" >Email</label>
    <div  class="col-md-9">
        <input  type="text" id="email" name="email" class="form-control" required >
    </div>
</div>

<div class="form-group">
    <label class="col-md-3" for="telp" >Nomor Telepon Rumah</label>
    <div  class="col-md-9">
        <input  type="text" id="telp" name="telp" class="form-control"  >
    </div>
</div>

<div class="form-group">
    <label class="col-md-3" for="fax" >Nomor Fax Rumah</label>
    <div  class="col-md-9">
        <input  type="text" id="fax" name="fax" class="form-control"  >
    </div>
</div>

<div class="form-group">
    <label class="col-md-3" for="hp" >Handphone</label>
    <div  class="col-md-9">
        <input  type="text" id="hp" name="hp" class="form-control" required >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="photo" >Unggah Foto Profil</label>
    <div  class="col-md-9">
        <input  type="file" id="photo" name="photo" class="form-control" required >
    </div>
</div>

<h3>Pekerjaan saat ini</h3>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Nama Perusahaan/Institusi</label>
        <div  class="col-md-9">
            <input  type="text" id="perusahaan" name="perusahaan" class="form-control"  >
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3" for="hp" >Jabatan</label>
        <div  class="col-md-9">
            <input  type="text" id="jabatan_perusahaan" name="jabatan_perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Alamat Perusahaan</label>
        <div  class="col-md-9">
            <input  type="text" id="alamat_perusahaan" name="alamat_perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="alamat" >Alamat Korespondensi</label>
        <div  class="col-md-9">
           <div class="radio">
            <label><input type="radio" value="Kantor" name="korespondensi_perusahaan"  checked="true">Kantor</input></label>
        </div>
        <div class="radio">
          <label><input type="radio" value="Kantor" name="korespondensi_perusahaan">Rumah</input></label>
      </div>
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="telp" >Nomor Telepon</label>
        <div  class="col-md-9">
            <input  type="text" id="telepon_perusahaan" name="telepon_perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Extension</label>
        <div  class="col-md-9">
            <input  type="text" id="extension_perusahaan" name="extension_perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Nomor Fax</label>
        <div  class="col-md-9">
            <input  type="text" id="fax_perusahaan" name="fax_perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Job Level</label>
        <div  class="col-md-9">
           <select class="form-control" id="job_level" name="job_level">
              <option selected="selected" >Entry Level</option>
              <option >Middle Management</option>
              <option >Senior Management</option>
              <option >Top Management</option>

          </select>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Kategori Pekerjaan</label>
        <div  class="col-md-9">
           <select class="form-control" id="job_category" name="job_category">
             <option selected="selected" >Akuntan Sektor Publik</option>
        <option >Akuntan Pendidik</option>
        <option >Akuntan Manajemen</option>
        <option >Akuntan Publik</option>
        <option >Akuntan Pajak</option>
        <option >Internal Audit</option>
        <option >Lainnya</option>



          </select>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Tipe Instansi/Perusahaan</label>
        <div  class="col-md-9">
           <select class="form-control" id="tipe_perusahaan" name="tipe_perusahaan">
              <option selected="selected" >Listed Company</option>
        <option >BUMN</option>
        <option >BUMD</option>
        <option >Multinasional</option>
        <option >Small Medium Enterprise</option>
        <option >Non-SME</option>
        <option >Lainnya</option>


          </select>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Kategori Bisnis</label>
        <div  class="col-md-9">
           <select class="form-control" id="kategori_bisnis" name="kategori_bisnis">
           <option selected="selected" >Pemerintah</option>
            <option>Pendidikan</option>
            <option>Manufaktur</option>
            <option>Perbankan</option>
            <option>Auditing &amp; Assurance</option>
            <option>Konstruksi</option>
            <option>Konsultan</option>
            <option>Properti</option>
            <option>Asuransi</option>
            <option>Keuangan</option>
            <option>Pajak</option>
            <option>Migas</option>
            <option>Perdagangan</option>
            <option>Agrobisnis</option>
            <option>Hotel</option>
            <option>IT &amp; Telekomunikasi</option>
            <option>Shipping</option>
            <option>Lainnya</option>



          </select>
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
</script>
@stop


@section('styles')
  <link rel="stylesheet" href="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css")}}" />
  @show
