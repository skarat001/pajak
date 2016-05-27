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
                 <form class="form-horizontal">
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
                        <input  type="text" id="place-birth"  name="place-birth" class="form-control"  placeholder="tempat lahir" required>
                    </div>
                    <div  class="col-md-4">
                     <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="date-birth"  placeholder="tanggal lahir" />
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
                          <label><input type="radio" name="ktp">Pria</input>
                          </div>
                          <div class="radio">
                              <label><input type="radio" name="ktp">Wanita</input>
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
                       <select class="form-control" id="pendidikan" name="pendidikan">
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
                         <option value="1">Nanggroe Aceh Darussalam</option>
                         <option value="2">Sumatera Utara</option>
                         <option value="3">Sumatera Barat</option>
                         <option value="4">Riau</option>
                         <option value="5">Jambi</option>
                         <option value="6">Sumatera Selatan</option>
                         <option value="7">Bengkulu</option>
                         <option value="8">Lampung</option>
                         <option value="9">Kepulauan Bangka Belitung</option>
                         <option value="10">Kepulauan Riau</option>
                         <option value="11">DKI Jakarta</option>
                         <option value="12">Jawa Barat</option>
                         <option value="13">Jawa Tengah</option>
                         <option value="14">DI Yogyakarta</option>
                         <option value="15">Jawa Timur</option>
                         <option value="16">Banten</option>
                         <option value="17">Bali</option>
                         <option value="18">Nusa Tenggara Barat</option>
                         <option value="19">Nusa Tenggara Timur</option>
                         <option value="20">Kalimantan Barat</option>
                         <option value="21">Kalimantan Selatan</option>
                         <option value="22">Kalimantan Timur</option>
                         <option value="23">Kalimantan Tengah</option>
                         <option value="24">Sulawesi Utara</option>
                         <option value="25">Sulawesi Tengah</option>
                         <option value="26">Sulawesi Selatan</option>
                         <option value="27">Sulawesi Tenggara</option>
                         <option value="28">Gorontalo</option>
                         <option value="29">Sulawesi Barat</option>
                         <option value="30">Maluku</option>
                         <option value="31">Maluku Utara</option>
                         <option value="32">Papua</option>
                         <option value="33">Papua Barat</option>
                         <option value="35">Kalimantan Utara</option>


                     </select>
                 </div>
             </div>
             <div class="form-group">
              <label class="col-md-2" for="alamat" >Alamat Lengkap</label>
              <div  class="col-md-10">
               <textarea class="form-control" id="alamat" name="alamat"></textarea>

           </div>
       </div>
       <div class="form-group">
          <label class="col-md-2" for="pos" >Kode Pos</label>
          <div  class="col-md-10">
              <input  type="text" id="pos" name="pos" class="form-control" required >

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
        <input  type="text" id="telp" name="telp" class="form-control" required >
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
        <input  type="text" id="hp" name="hp" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="photo" >Unggah Foto Profil</label>
    <div  class="col-md-9">
        <input  type="file" id="photo" name="photo" class="form-control"  >
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
            <input  type="text" id="jabatan-perusahaan" name="jabatan-perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Alamat Perusahaan</label>
        <div  class="col-md-9">
            <input  type="text" id="alamat-perusahaan" name="alamat-perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="alamat" >Alamat Korespondensi</label>
        <div  class="col-md-9">
           <div class="radio">
            <label><input type="radio" name="korespondensi-perusahaan">Kantor</input></label>
        </div>
        <div class="radio">
          <label><input type="radio" name="korespondensi-perusahaan">Rumah</input></label>
      </div>
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="telp" >Nomor Telepon</label>
        <div  class="col-md-9">
            <input  type="text" id="telepon-perusahaan" name="telepon-perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Extension</label>
        <div  class="col-md-9">
            <input  type="text" id="extension-perusahaan" name="extension-perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Nomor Fax</label>
        <div  class="col-md-9">
            <input  type="text" id="fax-perusahaan" name="fax-perusahaan" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Job Level</label>
        <div  class="col-md-9">
           <select class="form-control" id="job-level" name="job-level">
              <option selected="selected" value="1">Entry Level</option>
              <option value="2">Middle Management</option>
              <option value="3">Senior Management</option>
              <option value="4">Top Management</option>

          </select>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Kategori Pekerjaan</label>
        <div  class="col-md-9">
           <select class="form-control" id="job-category" name="job-category">
             <option selected="selected" value="1">Akuntan Sektor Publik</option>
        <option value="2">Akuntan Pendidik</option>
        <option value="3">Akuntan Manajemen</option>
        <option value="4">Akuntan Publik</option>
        <option value="5">Akuntan Pajak</option>
        <option value="6">Internal Audit</option>
        <option value="8">Lainnya</option>



          </select>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Tipe Instansi/Perusahaan</label>
        <div  class="col-md-9">
           <select class="form-control" id="tipe-perusahaan" name="tipe-perusahaan">
              <option selected="selected" value="1">Listed Company</option>
        <option value="2">BUMN</option>
        <option value="3">BUMD</option>
        <option value="4">Multinasional</option>
        <option value="5">Small Medium Enterprise</option>
        <option value="6">Non-SME</option>
        <option value="7">Lainnya</option>


          </select>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Kategori Bisnis</label>
        <div  class="col-md-9">
           <select class="form-control" id="kategori-bisnis" name="kategori-bisnis">
           <option selected="selected" value="1">Pemerintah</option>
            <option value="2">Pendidikan</option>
            <option value="3">Manufaktur</option>
            <option value="4">Perbankan</option>
            <option value="5">Auditing &amp; Assurance</option>
            <option value="6">Konstruksi</option>
            <option value="7">Konsultan</option>
            <option value="8">Properti</option>
            <option value="9">Asuransi</option>
            <option value="10">Keuangan</option>
            <option value="11">Pajak</option>
            <option value="12">Migas</option>
            <option value="13">Perdagangan</option>
            <option value="14">Agrobisnis</option>
            <option value="15">Hotel</option>
            <option value="16">IT &amp; Telekomunikasi</option>
            <option value="17">Shipping</option>
            <option value="19">Lainnya</option>



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
$( document ).ready(function() {
      $(function () {
                $('#datetimepicker1').datetimepicker({
                     format: 'L'
                });
            });
      });
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
                     format: 'L'
                });
            });
      });
</script>
@stop


@section('styles')
  <link rel="stylesheet" href="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css")}}" />
  @show
