@extends('layouts.app')

@section('content')
<script>
    // global app configuration object
    var config = {
      routes: "{{ URL::route('getprofil') }}",
    };
    var routes = {
      all: "{{ URL::route('pendaftaran_anggota') }}",
      pendidikan: "{{ URL::route('profil_pendidikan') }}",
      pekerjaan: "{{ URL::route('profil_riwayat_pekerjaan') }}",
      sertifikat: "{{ URL::route('profil_sertifikat') }}",
    };
  </script>
    <meta name="_token" content="{{ csrf_token() }}"/>
  <div class="container">
    <div class="panel">
      <div class="panel-body">

        <br>
        <div class="row">

          <div class="col-md-3" id="leftCol">

           @include('layouts.account-sidebar')
         </div>  
         <div class="col-md-9">
           @include('layouts.step-member')  

           <h1>Perpanjang Kenggotaan</h1>
           <form id="testt" >

           </form>
 <form class="form-horizontal dropzone" method="POST"  enctype="multipart/form-data" id="p_anggota">
            <div class="dropzone-previews"></div> <!-- this is were the previews should be shown. -->

           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <h2 class="form-signin-heading">Data Pribadi</h2>

           <div class="form-group">
            <label class="col-md-3" for="Name" >Nama Lengkap</label>
            <div  class="col-md-9">
              <input  type="text" id="name" name="name"  value="{{old('name')}}@if(old('name')==""){{$pribadi->nama}}@endif" class="form-control"  autofocus>
            </div>

          </div>
          <div class="form-group">
            <label  class="col-md-3" for="ttl" >Tempat/Tanggal Lahir</label>
            <div  class="col-md-4">
              <input  type="text" id="place-birth"  name="place_birth" value="{{old('place_birth')}}@if(old('place_birth')==""){{$pribadi->tempat_lahir}}@endif" class="form-control"  placeholder="tempat lahir" >
            </div>
            <div  class="col-md-4">
             <div class='input-group date' id='datetimepicker1'>
              <input type='text' class="form-control" name="date_birth" value="{{old('date_birth')}}@if(old('date_birth')==""){{$pribadi->tanggal_lahir}}@endif"  placeholder="tanggal lahir" />
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>

          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3" for="Name" >Nomor Kartu Tanda Penduduk</label>
          <div  class="col-md-9">
            <input  type="text" id="ktp" name="ktp" value="{{old('ktp')}}@if(old('ktp')==""){{$pribadi->no_ktp}}@endif" class="form-control"  autofocus>
          </div>
        </div>  
        <div class="form-group">
          <label class="col-md-3" for="Name" >Jenis Kelamin</label>
          <div  class="col-md-9">
            <?php 
            $jk;
            if(old('jk')==""){
              $jk=$pribadi->jenis_kelamin;
            }
            else{
              $jk=old('jk');
            }
            ?>
            <div class="radio">
              <label><input type="radio" value="Pria" name="jk" @if($jk=="Pria") checked="true" @endif >Pria</input>
              </div>
              <div class="radio">
                <label><input type="radio" value="Wanita" name="jk" @if($jk=="Wanita") checked="true" @endif >Wanita</input>
                </div>
              </div>
            </div> 
            <div class="form-group">
              <label class="col-md-3" for="Name" >Agama</label>
              <div  class="col-md-9">
                <?php
                $agama;
                if(old('agama')==""){
                  $agama=$pribadi->agama;
                }
                else{
                  $agama=old('agama');
                }
                ?>
                {{
                Form::select('agama',
                ['Islam'=>'Islam','Kristen'=>'Kristen','Katolik'=>'Katolik','Hindu'=>'Hindu','Budha'=>'Budha',
                'Lainnya'=>'Lainnya'] ,
                $agama, array('class' => 'form-control'))
              }}>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
               <span style="display: block;">Riwayat Pendidikan</span>
             </h4>
           </div>


           <div class="panel-body">
            <button  type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#modal_pendidikan" onclick="c_e_pendidikan()">Tambah</button>

            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td>Tanggal Ijazah</td> 
                  <td>Sekolah/ Perguruan Tinggi</td> 
                  <td>Perguruan Tinggi  Program Studi</td>  
                  <td>Studi  Jenjang Pendidikan</td> 
                  <td>Kota Sekolah/ Perguruan Tinggi</td> 
                  <td></td> 
                </tr>
              </thead>
              <tbody>

               @foreach ($pendidikan as $pendidikanlist)

               <tr>
                <td>{{$pendidikanlist->tanggal}}</td>
                <td>{{$pendidikanlist->sekolah}}</td>
                <td>{{$pendidikanlist->prodi}}</td>
                <td>{{$pendidikanlist->jenjang}}</td>
                <td>{{$pendidikanlist->kota}}</td>
                <td> <button type="button" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#modal_pendidikan" onclick="c_e_pendidikan({{$pendidikanlist->id}})">Ubah</button><button type="button" class="btn btn-danger btn-sm" onclick="h_e_pendidikan({{$pendidikanlist->id}})">Hapus</button>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>

        <div class="form-group">
          <label class="col-md-3" for="Name" >Alamat Rumah</label>
          <div  class="col-md-9">
            <div class="form-group">
              <label class="col-md-2" for="Provinsi" >Provinsi</label>
              <div  class="col-md-10">

                <?php
                $prov;
                if(old('prov')==""){
                  $prov=$pribadi->alamat_provinsi;
                }
                else{
                  $prov=old('prov');
                }
                ?>
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
                'Kalimantan Utara'=>'Kalimantan Utara'
                ] ,
                $prov, array('class' => 'form-control'))
              }}
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2" for="alamat" >Alamat Lengkap</label>
            <div  class="col-md-10">
             <textarea class="form-control" id="alamat" name="alamat" >{{old('alamat')}}@if(old('alamat')==""){{$pribadi->alamat}}@endif</textarea>

           </div>
         </div>
         <div class="form-group">
          <label class="col-md-2" for="pos" >Kode Pos</label>
          <div  class="col-md-10">
            <input  type="text" id="pos" name="pos" class="form-control" value="{{old('pos')}}@if(old('pos')==""){{$pribadi->alamat_pos}}@endif"  >

          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="email" >Email</label>
      <div  class="col-md-9">
        <input  type="text" id="email" name="email" class="form-control" value="{{old('email')}}@if(old('email')==""){{$pribadi->email}}@endif"  >
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3" for="telp" >Nomor Telepon Rumah</label>
      <div  class="col-md-9">
        <input  type="text" id="telp" name="telp" class="form-control" value="{{old('telp')}}@if(old('telp')==""){{$pribadi->telp}}@endif" >
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3" for="fax" >Nomor Fax Rumah</label>
      <div  class="col-md-9">
        <input  type="text" id="fax" name="fax" class="form-control" value="{{old('fax')}}@if(old('fax')==""){{$pribadi->fax}}@endif" >
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3" for="hp" >Handphone</label>
      <div  class="col-md-9">
        <input  type="text" id="hp" name="hp" class="form-control"  value="{{old('hp')}}@if(old('hp')==""){{$pribadi->hp}}@endif" >
      </div>
    </div>


    <div class="form-group">
      <label class="col-md-3" for="photo" >Unggah Foto Profil</label>
      <div  class="col-md-9">
          
            <span >Tarik berkas ke kotak ini atau klik untuk membuka</span>
  <!-- Now setup your input fields -->
<div  class="dropzone dropzone-previews" id="openUpload" ></div>
            
      </div>
  <!--     <img src="{{URL::asset("image/".$pribadi->foto)}}" width="60px" height="80px"> -->
    </div>

    <h3>Pekerjaan saat ini</h3>
    <div class="form-group">
      <label class="col-md-3" for="hp" >Nama Perusahaan/Institusi</label>
      <div  class="col-md-9">
        <input  type="text" id="perusahaan" name="perusahaan" class="form-control"  value="{{old('perusahaan')}}@if(old('perusahaan')==""){{$pribadi->perusahaan}}@endif">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3" for="hp" >Jabatan</label>
      <div  class="col-md-9">
        <input  type="text" id="jabatan_perusahaan" name="jabatan_perusahaan" class="form-control"  value="{{old('jabatan_perusahaan')}}@if(old('jabatan_perusahaan')==""){{$pribadi->perusahaan_jabatan}}@endif">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="hp" >Alamat Perusahaan</label>
      <div  class="col-md-9">
        <input  type="text" id="alamat_perusahaan" name="alamat_perusahaan" class="form-control"  value="{{old('alamat_perusahaan')}}@if(old('alamat_perusahaan')==""){{$pribadi->perusahaan_alamat}}@endif">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="alamat" >Alamat Korespondensi</label>
      <div  class="col-md-9">
        <?php
        $kor;
        if(old('korespondensi_perusahaan')==""){
          $kor=$pribadi->perusahaan_korespondensi;
        }
        else{
          $kor=old('korespondensi_perusahaan');
        }
        ?>
        <div class="radio">
          <label><input type="radio" value="Kantor" name="korespondensi_perusahaan" @if($kor=="Kantor")  checked="true" @endif>Kantor</input></label>
        </div>
        <div class="radio">
          <label><input type="radio" value="Kantor" name="korespondensi_perusahaan" @if($kor=="Rumah")  checked="true" @endif>Rumah</input></label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="telp" >Nomor Telepon</label>
      <div  class="col-md-9">
        <input  type="text" id="telepon_perusahaan" name="telepon_perusahaan" class="form-control"  value="{{old('telepon_perusahaan')}}@if(old('telepon_perusahaan')==""){{$pribadi->perusahaan_telp}}@endif">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="hp" >Extension</label>
      <div  class="col-md-9">
        <input  type="text" id="extension_perusahaan" name="extension_perusahaan" class="form-control"  value="{{old('extension_perusahaan')}}@if(old('extension_perusahaan')==""){{$pribadi->perusahaan_extensi}}@endif">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="hp" >Nomor Fax</label>
      <div  class="col-md-9">
        <input  type="text" id="fax_perusahaan" name="fax_perusahaan" class="form-control"  value="{{old('fax_perusahaan')}}@if(old('fax_perusahaan')==""){{$pribadi->perusahaan_fax}}@endif">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="hp" >Job Level</label>
      <div  class="col-md-9">
        <?php
        $joblv;
        if(old('job_level')==""){
          $joblv=$pribadi->perusahaan_level;
        }
        else{
          $joblv=old('job_level');
        }
        ?>
        {{
        Form::select('job_level',
        [    
        'Entry Level'=>'Entry Level',
        'Middle Management'=>'Middle Management',
        'Senior Management'=>'Senior Management',
        'Top Management'=>'Top Management'
        ] ,
        $joblv, array('class' => 'form-control'))
      }}
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3" for="hp" >Kategori Pekerjaan</label>
    <div  class="col-md-9">
      <?php
      $kat;
      if(old('job_category')==""){
        $kat=$pribadi->jenis_kelamin;
      }
      else{
        $kat=old('job_category');
      }
      ?>
          {{
      Form::select('job_category',
      [
      'Akuntan Sektor Publik'=>'Akuntan Sektor Publik',
      'Akuntan Pendidik'=>'Akuntan Pendidik',
      'Akuntan Manajemen'=>'Akuntan Manajemen',
      'Akuntan Publik'=>'Akuntan Publik',
      'Akuntan Pajak'=>'Akuntan Pajak',
      'Internal Audit'=>'Internal Audit',
      'Lainnya'=>'Lainnya'
      ] ,
      $kat, array('class' => 'form-control'))
    }}
     
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3" for="hp" >Tipe Instansi/Perusahaan</label>
    <div  class="col-md-9">
          <?php
              $inst;
    if(old('tipe_perusahaan')==""){
              $inst=$pribadi->perusahaan_level;
            }
            else{
              $inst=old('tipe_perusahaan');
            }
              ?>
                 {{
    Form::select('tipe_perusahaan',
    ['Listed Company',
    'BUMN'=>'BUMN',
    'BUMD'=>'BUMD',
    'Multinasional'=>'Multinasional',
    'Small Medium Enterprise'=>'Small Medium Enterprise',
    'Non-SME'=>'Non-SME',
    'Lainnya'=>'Lainnya'

    ] ,
    $inst, array('class' => 'form-control'))
  }}

     
  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="hp" >Kategori Bisnis</label>
  <div  class="col-md-9">
        <?php
              $katb;
    if(old('kategori_bisnis')==""){
              $katb=$pribadi->perusahaan_bisnis;
            }
            else{
              $katb=old('kategori_bisnis');
            }
              ?>
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
   $katb, array('class' => 'form-control'))
 }}
   
 </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
     <span style="display: block;">Riwayat Pekerjaan</span>
   </h4>
 </div>
 <div id="collapseSix" class="">
  <div class="panel-body">
   <button  type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#modal_riwayat_pekerjaan"  onclick="c_e_pekerjaan()">Tambah</button>

   <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <td>Perusahaan</td> 
        <td>Jabatan</td> 
        <td>Divisi</td>  
        <td>Tanggal Mulai Bekerja</td> 
        <td>Tanggal Akhir Bekerja</td> 
        <td>Lama Bekerja</td> 
        <td>Uraian Pekerjaan</td> 
        <td></td> 
      </tr>
    </thead>
    <tbody>
      @foreach ($pekerjaan as $pekerjaanlist)

      <tr>
        <td>{{$pekerjaanlist->nama}}</td>
        <td>{{$pekerjaanlist->jabatan}}</td>
        <td>{{$pekerjaanlist->divisi}}</td>
        <td>{{$pekerjaanlist->masuk}}</td>
        <td>{{$pekerjaanlist->keluar}}</td>
        <td>{{$pekerjaanlist->durasi}}</td>
        <td>{{$pekerjaanlist->deskripsi}}</td>
        <td><button type="button" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#modal_riwayat_pekerjaan" onclick="c_e_pekerjaan({{$pekerjaanlist->id}})">Ubah</button><button type="button" class="btn btn-danger btn-sm" onclick="h_e_pekerjaan({{$pekerjaanlist->id}})">Hapus</button>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
     <span style="display: block;">Riwayat Sertifikasi</span>
   </h4>
 </div>
 <div id="collapseSeven" class="">

  <div class="panel-body">
    <button  type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#modal_sertifikat"  onclick="c_e_sertifikat()">Tambah</button>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <td>Tanggal Sertifikasi</td> 
          <td>Nama Sertifikasi</td> 
          <td>Nomor Sertifikasi</td>   
          <td>Penyelenggara</td> 
          <td></td> 
        </tr>
      </thead>
      <tbody>
       @foreach ($sertifikat as $sertifikatlist)

       <tr>
        <td>{{$sertifikatlist->tanggal}}</td>
        <td>{{$sertifikatlist->nama}}</td>
        <td>{{$sertifikatlist->no}}</td>
        <td>{{$sertifikatlist->penyelenggara}}</td>
        <td><button type="button" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#modal_sertifikat" onclick="c_e_sertifikat({{$sertifikatlist->id}})">Ubah</button><button type="button" class="btn btn-danger btn-sm" onclick="h_e_pekerjaan({{$sertifikatlist->id}})">Hapus</button>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

<div class="form-group">    
  <h3>Berkas yang harus dilengkapi</h3>  
  <div class="checkbox">
    <label><input type="checkbox" checked="true" value="">Kopi Sertifikat Akuntan Profesional (jika ada)</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" checked="true" value="">Kopi Kartu Anggota</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" checked="true" value="">Kopi KTP atau Bukti Domisili Lainnya</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" checked="true" value="">Surat Keterangan atau Bukti Pengalaman Praktik</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" checked="true" value="">Kopi Ijazah yang Dilegalisir</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" value="">2 Buah Pas Foto dengan Latar Belakang Putih 4x6 Terbaru</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" checked="true" value="">Kopi Piagam Register Negara Akuntan atau Surat Keterangan Terdaftar dalam Register Negara Akuntan</label>
  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="hp" >Pilih Dukumen</label>
  <div  class="col-md-9">
   <input type="file" name="foto"></div>
 </div>


 <div class="form-group checkbox">
  <div class="highlight">
    <h3>Syarat dan Ketentuan</h3>
    <ol>
      <li>Saya dengan keadaan sadar dan tanpa paksaan, menyatakan bahwa informasi yang Saya sampaikan di atas adalah benar.</li>
      <li>Saya tidak sedang tersangkut masalah pelanggaran hukum baik pidana maupun perdata.</li>
      <li>Dengan pengajuan keanggotaan ini, maka Saya akan terikat dan wajib mematuhi peraturan Ikatan Akuntan Indonesia.
        <p>Untuk itu Saya menyatakan bersedia memenuhi kewajiban sesuai ketentuan dalam Anggaran Dasar, Anggaran Rumah Tangga dan Peraturan Organisasi IAI untuk:</p>
        <ol type="a">
          <li>Melunasi iuran anggota sesuai jangka waktu yang ditetapkan;</li>
          <li>Mengikuti Pendidikan Profesional Berkelanjutan (PPL) sejumlah Satuan Kredit PPL (SKP) yang diwajibkan *;</li>
          <li>Mematuhi Standar Profesi *</li>
          <li>Mematuhi Kode Etik; dan</li>
          <li>Melaporkan setiap perubahan data dan alamat.</li>
        </ol>
      </li>
      <li>Dalam hal saya tidak memenuhi kewajiban sebagaimana disebutkan di atas, saya bersedia untuk diproses dan menerima sanksi penegakan disiplin dan keanggotaan sesuai mekanisme yang berlaku di IAI. </li>
      <li>Formulir ini merupakan pengajuan registrasi ulang Akuntan Beregister Negara kepada Menteri Keuangan Republik Indonesia yang dilakukan melalui IAI sesuai PMK no. 025/PMK.01/2014 tentang Akuntan Beregister Negara.*</li>
    </ol>
    <br />
    <p>
      * berlaku bagi Anggota Utama
    </p>
  </div>
  <input id="KejujuranCheckbox" type="checkbox" name="ctl00$ctl00$ctl00$ContentPlaceHolderDefault$mainbar$ctl01$MemberIAIRegistration_8$KejujuranCheckbox" /><label for="KejujuranCheckbox">Saya setuju.</label>
  <span id="ContentPlaceHolderDefault_mainbar_ctl01_MemberIAIRegistration_8_KejujuranValidator" class="alert-danger" style="color:Red;visibility:hidden;">
    *
  </span>
</div>




<button class="btn btn-lg pull-right btn-primary " type="submit" onclick="changeform()">Daftar</button>


</div>
</div>
</div>
</div>

</div>
@include('member._modals-extend')
</form>
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

<script type="text/javascript" src="{{ asset("/bower_components/moment/min/moment.min.js")}}"></script>

<script type="text/javascript" src="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js")}}"></script>

<script >
  $( document ).ready(function() {
    $(function () {
      $('#datetimepicker1').datetimepicker({
       format: 'YYYY-MM-DD'
     });
      $('#datetimepicker2').datetimepicker({
       format: 'YYYY-MM-DD'     });
      $('#datetimepicker3').datetimepicker({
        format: 'YYYY-MM-DD'
      });
      $('#datetimepicker4').datetimepicker({
        format: 'YYYY-MM-DD'
      });
      $('#datetimepicker5').datetimepicker({
        format: 'YYYY-MM-DD'
      });
      $('#datetimepicker6').datetimepicker({
        format: 'YYYY-MM-DD'
      });
      $('#datetimepicker7').datetimepicker({
        format: 'YYYY-MM-DD'
      });
    });
  });
</script>
@stop


@section('styles')
<link rel="stylesheet" href="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css")}}" />
@show
