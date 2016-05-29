@extends('layouts.app')

@section('content')
<div class="container">
  <div class="panel">
    <div class="panel-body">

      <br>
      <div class="row">

        <div class="col-md-3" id="leftCol">

         @include('layouts.account-sidebar')
       </div>  
       <div class="col-md-9">
         <form class="form-horizontal">
          <h1>Perpanjang Kenggotaan</h1>
          <form class="form-horizontal" method="POST" action="{{url('/pendaftaran')}}" 
          enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <h2 class="form-signin-heading">Data Pribadi</h2>

          <div class="form-group">
            <label class="col-md-3" for="Name" >Nama Lengkap</label>
            <div  class="col-md-9">
            <input  type="text" id="name" name="name" value=" {{$pribadi->nama}}" class="form-control" required autofocus>
            </div>
 
          </div>
           <div class="form-group">
                    <label  class="col-md-3" for="ttl" >Tempat/Tanggal Lahir</label>
                    <div  class="col-md-4">
                        <input  type="text" id="place-birth"  name="place_birth" value="{{$pribadi->tempat_lahir}}" class="form-control"  placeholder="tempat lahir" required>
                    </div>
                    <div  class="col-md-4">
                     <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="date_birth" value="{{$pribadi->tanggal_lahir}}"  placeholder="tanggal lahir" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3" for="Name" >Nomor Kartu Tanda Penduduk</label>
                    <div  class="col-md-9">
                        <input  type="text" id="ktp" name="ktp" value="{{$pribadi->no_ktp}}" class="form-control" required autofocus>
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-md-3" for="Name" >Jenis Kelamin</label>
                    <div  class="col-md-9">
                        <div class="radio">
                          <label><input type="radio" value="Pria" name="jk" @if($pribadi->jenis_kelamin=="Pria") checked="true" @endif >Pria</input>
                          </div>
                          <div class="radio">
                              <label><input type="radio" value="Wanita" name="jk" @if($pribadi->jenis_kelamin=="Wanita") checked="true" @endif >Wanita</input>
                              </div>
                          </div>
                      </div> 
                      <div class="form-group">
                        <label class="col-md-3" for="Name" >Agama</label>
                        <div  class="col-md-9">
                           <select class="form-control" id="agama" value="Kristen" name="agama">
                            <option @if($pribadi->agama=="Islam") selected="selected" @endif>Islam</option>
                            <option @if($pribadi->agama=="Kristen") selected="selected" @endif>Kristen</option>
                            <option @if($pribadi->agama=="Katolik") selected="selected" @endif>Katolik</option>
                            <option @if($pribadi->agama=="Hindu") selected="selected" @endif>Hindu</option>
                            <option @if($pribadi->agama=="Budha") selected="selected" @endif>Budha</option>
                            <option @if($pribadi->agama=="Lainnya") selected="selected" @endif>Lainnya</option>
                        </select>
                    </div>
                </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
       <span style="display: block;">Riwayat Pendidikan</span>
      </h4>
    </div>


      <div class="panel-body">
        <button  type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#modal_pendidikan">Tambah</button>

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
              <td><button class="btn btn-warning btn-sm">Ubah</button><button class="btn btn-danger btn-sm">Hapus</button>
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
                       <select class="form-control" id="prov" name="prov">
                         <option @if($pribadi->alamat_provinsi=="Nanggroe Aceh Darussalam") selected="selected" @endif>Nanggroe Aceh Darussalam</option>
                         <option @if($pribadi->alamat_provinsi=="Sumatera Utara") selected="selected" @endif>Sumatera Utara</option>
                         <option @if($pribadi->alamat_provinsi=="Sumatera Barat") selected="selected" @endif>Sumatera Barat</option>
                         <option @if($pribadi->alamat_provinsi=="Riau") selected="selected" @endif>Riau</option>
                         <option @if($pribadi->alamat_provinsi=="Jambi") selected="selected" @endif>Jambi</option>
                         <option @if($pribadi->alamat_provinsi=="Sumatera Selatan") selected="selected" @endif>Sumatera Selatan</option>
                         <option @if($pribadi->alamat_provinsi=="Bengkulu") selected="selected" @endif>Bengkulu</option>
                         <option @if($pribadi->alamat_provinsi=="Lampung") selected="selected" @endif>Lampung</option>
                         <option @if($pribadi->alamat_provinsi=="Kepulauan Bangka Belitung") selected="selected" @endif>Kepulauan Bangka Belitung</option>
                         <option @if($pribadi->alamat_provinsi=="Kepulauan Riau") selected="selected" @endif>Kepulauan Riau</option>
                         <option @if($pribadi->alamat_provinsi=="DKI Jakarta") selected="selected" @endif>DKI Jakarta</option>
                         <option @if($pribadi->alamat_provinsi=="Jawa Barat") selected="selected" @endif>Jawa Barat</option>
                         <option @if($pribadi->alamat_provinsi=="Jawa Tengah") selected="selected" @endif>Jawa Tengah</option>
                         <option @if($pribadi->alamat_provinsi=="DI Yogyakarta") selected="selected" @endif>DI Yogyakarta</option>
                         <option @if($pribadi->alamat_provinsi=="Jawa Timur") selected="selected" @endif>Jawa Timur</option>
                         <option @if($pribadi->alamat_provinsi=="Banten") selected="selected" @endif>Banten</option>
                         <option @if($pribadi->alamat_provinsi=="Bali") selected="selected" @endif>Bali</option>
                         <option @if($pribadi->alamat_provinsi=="Nusa Tenggara Barat") selected="selected" @endif>Nusa Tenggara Barat</option>
                         <option @if($pribadi->alamat_provinsi=="Nusa Tenggara Timur") selected="selected" @endif>Nusa Tenggara Timur</option>
                         <option @if($pribadi->alamat_provinsi=="Kalimantan Barat") selected="selected" @endif>Kalimantan Barat</option>
                         <option @if($pribadi->alamat_provinsi=="Kalimantan Selatan") selected="selected" @endif>Kalimantan Selatan</option>
                         <option @if($pribadi->alamat_provinsi=="Kalimantan Timur") selected="selected" @endif>Kalimantan Timur</option>
                         <option @if($pribadi->alamat_provinsi=="Kalimantan Tengah") selected="selected" @endif>Kalimantan Tengah</option>
                         <option @if($pribadi->alamat_provinsi=="Sulawesi Utara") selected="selected" @endif>Sulawesi Utara</option>
                         <option @if($pribadi->alamat_provinsi=="Sulawesi Tengah") selected="selected" @endif>Sulawesi Tengah</option>
                         <option @if($pribadi->alamat_provinsi=="Sulawesi Selatan") selected="selected" @endif>Sulawesi Selatan</option>
                         <option @if($pribadi->alamat_provinsi=="Sulawesi Tenggara") selected="selected" @endif>Sulawesi Tenggara</option>
                         <option @if($pribadi->alamat_provinsi=="Gorontalo") selected="selected" @endif>Gorontalo</option>
                         <option @if($pribadi->alamat_provinsi=="Sulawesi Barat") selected="selected" @endif>Sulawesi Barat</option>
                         <option @if($pribadi->alamat_provinsi=="Maluku") selected="selected" @endif>Maluku</option>
                         <option @if($pribadi->alamat_provinsi=="Maluku Utara") selected="selected" @endif>Maluku Utara</option>
                         <option @if($pribadi->alamat_provinsi=="Papua") selected="selected" @endif>Papua</option>
                         <option @if($pribadi->alamat_provinsi=="Papua Barat") selected="selected" @endif>Papua Barat</option>
                         <option @if($pribadi->alamat_provinsi=="Kalimantan Utara") selected="selected" @endif>Kalimantan Utara</option>


                     </select>
                 </div>
             </div>
             <div class="form-group">
              <label class="col-md-2" for="alamat" >Alamat Lengkap</label>
              <div  class="col-md-10">
               <textarea class="form-control" id="alamat" name="alamat" required>{{$pribadi->alamat}}</textarea>

           </div>
       </div>
       <div class="form-group">
          <label class="col-md-2" for="pos" >Kode Pos</label>
          <div  class="col-md-10">
              <input  type="text" id="pos" name="pos" class="form-control" value="{{$pribadi->alamat_pos}}"  >

          </div>
      </div>
  </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="email" >Email</label>
    <div  class="col-md-9">
        <input  type="text" id="email" name="email" class="form-control" value="{{$pribadi->email}}" required >
    </div>
</div>

<div class="form-group">
    <label class="col-md-3" for="telp" >Nomor Telepon Rumah</label>
    <div  class="col-md-9">
        <input  type="text" id="telp" name="telp" class="form-control" value="{{$pribadi->telp}}" >
    </div>
</div>

<div class="form-group">
    <label class="col-md-3" for="fax" >Nomor Fax Rumah</label>
    <div  class="col-md-9">
        <input  type="text" id="fax" name="fax" class="form-control" value="{{$pribadi->fax}}" >
    </div>
</div>

<div class="form-group">
    <label class="col-md-3" for="hp" >Handphone</label>
    <div  class="col-md-9">
        <input  type="text" id="hp" name="hp" class="form-control" required value="{{$pribadi->hp}}" >
    </div>
</div>


<div class="form-group">
    <label class="col-md-3" for="photo" >Unggah Foto Profil</label>
    <div  class="col-md-9">
        <input  type="file" id="photo" name="photo" class="form-control" required >
    </div>
      <img src="{{URL::asset("image/".$pribadi->foto)}}" width="60px" height="80px">
</div>

<h3>Pekerjaan saat ini</h3>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Nama Perusahaan/Institusi</label>
        <div  class="col-md-9">
            <input  type="text" id="perusahaan" name="perusahaan" class="form-control"  value="{{$pribadi->perusahaan}}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3" for="hp" >Jabatan</label>
        <div  class="col-md-9">
            <input  type="text" id="jabatan_perusahaan" name="jabatan_perusahaan" class="form-control"  value="{{$pribadi->perusahaan_jabatan}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Alamat Perusahaan</label>
        <div  class="col-md-9">
            <input  type="text" id="alamat_perusahaan" name="alamat_perusahaan" class="form-control"  value="{{$pribadi->perusahaan_alamat}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="alamat" >Alamat Korespondensi</label>
        <div  class="col-md-9">
           <div class="radio">
            <label><input type="radio" value="Kantor" name="korespondensi_perusahaan" @if($pribadi->perusahaan_korespondensi=="Kantor")  checked="true" @endif>Kantor</input></label>
        </div>
        <div class="radio">
          <label><input type="radio" value="Kantor" name="korespondensi_perusahaan" @if($pribadi->perusahaan_korespondensi=="Rumah")  checked="true" @endif>Rumah</input></label>
      </div>
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="telp" >Nomor Telepon</label>
        <div  class="col-md-9">
            <input  type="text" id="telepon_perusahaan" name="telepon_perusahaan" class="form-control"  value="{{$pribadi->perusahaan_telp}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Extension</label>
        <div  class="col-md-9">
            <input  type="text" id="extension_perusahaan" name="extension_perusahaan" class="form-control"  value="{{$pribadi->perusahaan_exensi}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Nomor Fax</label>
        <div  class="col-md-9">
            <input  type="text" id="fax_perusahaan" name="fax_perusahaan" class="form-control"  value="{{$pribadi->perusahaan_fax}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Job Level</label>
        <div  class="col-md-9">
           <select class="form-control" id="job_level" name="job_level">
              <option @if($pribadi->perusahaan_level=="Entry Level")  selected="selected" @endif >Entry Level</option>
              <option @if($pribadi->perusahaan_level=="Middle Management")  selected="selected" @endif>Middle Management</option>
              <option @if($pribadi->perusahaan_level=="Senior Management")  selected="selected" @endif>Senior Management</option>
              <option @if($pribadi->perusahaan_level=="Top Management")  selected="selected" @endif>Top Management</option>

          </select>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Kategori Pekerjaan</label>
        <div  class="col-md-9">
           <select class="form-control" id="job_category" name="job_category">
        <option @if($pribadi->perusahaan_level=="Akuntan Sektor Publik")  selected="selected" @endif>Akuntan Sektor Publik</option>
        <option @if($pribadi->perusahaan_level=="Akuntan Pendidik")  selected="selected" @endif>Akuntan Pendidik</option>
        <option @if($pribadi->perusahaan_level=="Akuntan Manajemen")  selected="selected" @endif>Akuntan Manajemen</option>
        <option @if($pribadi->perusahaan_level=="Akuntan Publik")  selected="selected" @endif>Akuntan Publik</option>
        <option @if($pribadi->perusahaan_level=="Akuntan Pajak")  selected="selected" @endif>Akuntan Pajak</option>
        <option @if($pribadi->perusahaan_level=="Internal Audit")  selected="selected" @endif>Internal Audit</option>
        <option @if($pribadi->perusahaan_level=="Lainnya")  selected="selected" @endif>Lainnya</option>



          </select>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Tipe Instansi/Perusahaan</label>
        <div  class="col-md-9">
           <select class="form-control" id="tipe_perusahaan" name="tipe_perusahaan">
        <option @if($pribadi->perusahaan_level=="Listed Company")  selected="selected" @endif  >Listed Company</option>
        <option @if($pribadi->perusahaan_level=="BUMN")  selected="selected" @endif >BUMN</option>
        <option @if($pribadi->perusahaan_level=="BUMD")  selected="selected" @endif >BUMD</option>
        <option @if($pribadi->perusahaan_level=="Multinasional")  selected="selected" @endif >Multinasional</option>
        <option @if($pribadi->perusahaan_level=="Small Medium Enterprise")  selected="selected" @endif >Small Medium Enterprise</option>
        <option @if($pribadi->perusahaan_level=="Non-SME")  selected="selected" @endif >Non-SME</option>
        <option @if($pribadi->perusahaan_level=="Lainnya")  selected="selected" @endif >Lainnya</option>


          </select>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-3" for="hp" >Kategori Bisnis</label>
        <div  class="col-md-9">
           <select class="form-control" id="kategori_bisnis" name="kategori_bisnis">
           <option @if($pribadi->perusahaan_level=="Pemerintah")  selected="selected" @endif >Pemerintah</option>
            <option @if($pribadi->perusahaan_level=="Pendidikan")  selected="selected" @endif>Pendidikan</option>
            <option @if($pribadi->perusahaan_level=="Manufaktur")  selected="selected" @endif>Manufaktur</option>
            <option @if($pribadi->perusahaan_level=="Perbankan")  selected="selected" @endif>Perbankan</option>
            <option @if($pribadi->perusahaan_level=="Auditing")  selected="selected" @endif>Auditing &amp; Assurance</option>
            <option @if($pribadi->perusahaan_level=="Konstruksi")  selected="selected" @endif>Konstruksi</option>
            <option @if($pribadi->perusahaan_level=="Konsultan")  selected="selected" @endif>Konsultan</option>
            <option @if($pribadi->perusahaan_level=="Properti")  selected="selected" @endif>Properti</option>
            <option @if($pribadi->perusahaan_level=="Asuransi")  selected="selected" @endif>Asuransi</option>
            <option @if($pribadi->perusahaan_level=="Keuangan")  selected="selected" @endif>Keuangan</option>
            <option @if($pribadi->perusahaan_level=="Pajak")  selected="selected" @endif>Pajak</option>
            <option @if($pribadi->perusahaan_level=="Migas")  selected="selected" @endif>Migas</option>
            <option @if($pribadi->perusahaan_level=="Perdagangan")  selected="selected" @endif>Perdagangan</option>
            <option @if($pribadi->perusahaan_level=="Agrobisnis")  selected="selected" @endif>Agrobisnis</option>
            <option @if($pribadi->perusahaan_level=="Hotel")  selected="selected" @endif>Hotel</option>
            <option @if($pribadi->perusahaan_level=="IT")  selected="selected" @endif>IT &amp; Telekomunikasi</option>
            <option @if($pribadi->perusahaan_level=="Shipping")  selected="selected" @endif>Shipping</option>
            <option @if($pribadi->perusahaan_level=="Lainnya")  selected="selected" @endif>Lainnya</option>



          </select>
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
       <button  type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#modal_riwayat_pekerjaan">Tambah</button>

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
            <td><button class="btn btn-warning btn-sm">Ubah</button><button class="btn btn-danger btn-sm">Hapus</button>
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
        <button  type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#modal_sertifikat">Tambah</button>

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
            <td><button class="btn btn-warning btn-sm">Ubah</button><button class="btn btn-danger btn-sm">Hapus</button>
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


    

<button class="btn btn-lg pull-right btn-primary " type="submit">Perpanjang</button>
        </form>
       
</div>
</div>
</div>
</div>

</div>
@include('member._modals-profile')
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
      $('#datetimepicker2').datetimepicker({
       format: 'L'
     });
      $('#datetimepicker3').datetimepicker({
       format: 'L'
     });
      $('#datetimepicker4').datetimepicker({
       format: 'L'
     });
      $('#datetimepicker5').datetimepicker({
       format: 'L'
     });
      $('#datetimepicker6').datetimepicker({
       format: 'L'
     });
      $('#datetimepicker7').datetimepicker({
       format: 'L'
     });
    });
  });
</script>
@stop


@section('styles')
<link rel="stylesheet" href="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css")}}" />
@show
