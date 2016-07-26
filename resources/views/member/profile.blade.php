@extends('layouts.app')

@section('content')
<script>
    // global app configuration object
    var config = {
        routes: "{{ URL::route('getprofil') }}",
    };
</script>
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
@include('layouts.errors')
@include('layouts.success')
        <!--  <ul class="nav nav-pills nav-wizard wrap">
            <li class="active"><a href="#" data-toggle="tab">Pendaftaran</a><div class="nav-arrow"></div></li>
            <li><div class="nav-wedge"></div><a href="#" data-toggle="tab">Konfirmasi Pendaftaran</a><div class="nav-arrow"></div></li>
            <li><div class="nav-wedge"></div><a href="#" data-toggle="tab">Anggota</a><div class="nav-arrow"></div></li>
            <li><div class="nav-wedge"></div><a href="#" data-toggle="tab">Pendaftaran</a><div class="nav-arrow"></div></li>

            <li><div class="nav-wedge"></div><a href="#" data-toggle="tab">Konfirmasi Data</a><div class="nav-arrow"></div></li>
            <li><div class="nav-wedge"></div><a href="#" data-toggle="tab">Konfirmasi Pembayaran</a><div class="nav-arrow"></div></li>

            <li><div class="nav-wedge"></div><a href="#" data-toggle="tab">Waiting Progress</a><div class="nav-arrow"></div></li>
            <li><div class="nav-wedge"></div><a href="#" data-toggle="tab">Approved</a></li>

          </ul> -->


          <h1>Profil Anggota </h1>
          <div class="col-md-3">


            <div class="row">

              <div class="col-md-12 profile-menu">
                <img src="{{URL::asset("image/".$pribadi->foto)}}" width="100%" height="200px">
              </div>

              <div class="col-md-12 profile-menu">
                <h5>Anggota</h5>
                <h5>Utama</h5>
                <h5>Sampai <strong>{{Auth::user()->valid_date}}</strong></h5>
              </div>
              <div class="col-md-12 profile-menu">
                <span class="btn btn-success btn-block" >Sudah Registrasi Ulang</span>
              </div>
              <div class="col-md-12 profile-menu">
               <button type="button" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#modal_skp"><i class="fa fa-list" aria-hidden="true"></i> Klaim SKP</button>
             </div>
             <div class="col-md-12 profile-menu">
               <button type="button" class="btn btn-secondary btn-block"data-toggle="modal" data-target="#modal_password"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Ganti Password</button>
             </div>
             <div class="col-md-12 profile-menu">

               <button type="button" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#modal_foto"><i class="fa fa-picture-o" aria-hidden="true"></i> Ubah Foto Profil</button>
             </div>

             <div class="col-md-12 profile-menu">
               <button type="button" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#modal_upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Re-Upload Dokumen</button>
             </div>
             <div class="col-md-12 profile-menu">
              <button class="btn btn-secondary btn-block"><i class="fa fa-credit-card" aria-hidden="true"></i> Validasi Pembayaran</button>
            </div>

          </div>
        </div>
        <div class="col-md-9">
         <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading" >
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" > <span style="display: block;">Data Pribadi</span></a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
               <table class="table  table-striped">
                 <tr>
                   <td>
                    No. Anggota
                  </td>
                  <td>
                   {{$pribadi->no_anggota}}
                 </td>
               </tr>
               <tr>
                <td>
                  Nama Lengkap 
                </td>
                <td>
                  {{$pribadi->nama}}
                </td>
              </tr>
              <tr>
                <td>
                  Tempat, Tanggal Lahir
                </td>
                <td>
                 {{$pribadi->tempat_lahir}},  {{$pribadi->tanggal_lahir}}
               </td>

             </tr>
             <tr>
              <td>
                Nomor KTP
              </td>
              <td>
               {{$pribadi->no_ktp}}
             </td>
           </tr>
           <tr>
            <td>
              Nomor Registrasi
            </td>
            <td>
{{$pribadi->no_registrasi}}
            </td>
          </tr>
          <tr>
            <td>
              Nomor NPWP
            </td>
            <td>
{{$pribadi->npwp}}
            </td>
          </tr>
          <tr>
            <td>
              Jenis kelamin
            </td>
            <td>
             {{$pribadi->jenis_kelamin}}
           </td>
         </tr>
         <tr>
          <td>
            Agama
          </td>
          <td>
           {{$pribadi->agama}}
         </td>
       </tr>
       <tr>
        <td>
          Alamat
        </td>
        <td>
         {{$pribadi->alamat}},  {{$pribadi->alamat_provinsi}}
       </td>
     </tr>
     <tr>
      <td>
        Nomor Telepon
      </td>
      <td>
       {{$pribadi->telp}}
     </td>
   </tr>


 </table>
 <button  type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#modal_pribadi">Ubah Data Pribadi</button>


</div>
</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading" >
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" > <span style="display: block;">Pekerjaan Saat Ini</span></a>
    </h4>
  </div>
  <div id="collapseTwo" class="panel-collapse collapse ">
    <div class="panel-body">
     <table class="table  table-striped">
       <tr>
         <td>
          Nama Perusahaan
        </td>
        <td>
         {{$pribadi->perusahaan}}
       </td>
     </tr>
     <tr>
      <td>
        Kategori Bisnis Perusahaan
      </td>
      <td>
       {{$pribadi->perusahaan_tipe}}
     </td>
   </tr>
   <tr>
    <td>
      Jabatan di Perusahaan
    </td>
    <td>
     {{$pribadi->perusahaan_jabatan}}
   </td>

 </tr>
 <tr>
  <td>
   Kategori Pekerjaan
 </td>
 <td>
   {{$pribadi->perusahaan_kategori}}
 </td>
</tr>
<tr>
  <td>
    Alamat Kantor
  </td>
  <td>
   {{$pribadi->perusahaan_alamat}}
 </td>
</tr>
<tr>
  <td>
   No Telepon
 </td>
 <td>
  {{$pribadi->perusahaan_telp}}
</td>
</tr>
<tr>
  <td>
   Extension
 </td>
 <td>
  {{$pribadi->perusahaan_extensi}}
</td>
</tr>
<tr>
  <td>
    No Fax
  </td>
  <td>

    {{$pribadi->perusahaan_fax}}
  </td>
</tr>



</table>
<button  type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#modal_pekerjaan">Ubah Data Pekerjaan</button>

</div>
</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span style="display: block;">Data PPL yang Diikuti</span></a>
    </h4>
  </div>
  <div id="collapseThree" class="panel-collapse collapse">
    <div class="panel-body">
      <p>
        Tidak ada PPL yang sedang diikuti</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span style="display: block;">Data SKP</span></a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table table-bordered table-hover" width="100%">
          <thead>
            <tr>
              <td style ="word-break:break-all;">Tahun</td> 
              <td style ="word-break:break-all;">Jumlah SKP</td> 
              <td style ="word-break:break-all;">Nilai SKP</td>  
              <td style ="word-break:break-all;">Jenis Kegiatan</td> 
              <td style ="word-break:break-all;">Topik Kegiatan</td> 
              <td style ="word-break:break-all;">Penyelenggara</td> 
              <td style ="word-break:break-all;">Lokasi Kegiatan</td> 
              <td style ="word-break:break-all;"></td>
            </tr>
          </thead>
          <tbody>

           @foreach ($skp as $skplist)

           <tr>
            <td>{{$skplist->tahun}}</td>
            <td>{{$skplist->jumlah}}/{{$skplist->batas}}</td>
            <td>{{$skplist->nilai}}</td>
            <td>{{$skplist->jenis_kegiatan}}</td>
            <td>{{$skplist->topik}}</td>
            <td>{{$skplist->penyelenggara}}</td>
            <td> {{$skplist->lokasi}}</td>
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
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span style="display: block;">Riwayat Pendidikan</span></a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">

      <div class="panel-body">
        <button  type="button"  class="btn btn-primary"  data-toggle="modal" onClick="b_pendidikan()" data-target="#modal_pendidikan">Tambah</button>

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
            <td><button class="btn btn-warning btn-sm" onclick="c_pendidikan({{$pendidikanlist->id}})" data-toggle="modal" data-target="#modal_pendidikan">Ubah</button><button class="btn btn-danger btn-sm"onclick="h_pendidikan({{$pendidikanlist->id}})">Hapus</button>
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
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><span style="display: block;">Riwayat Pekerjaan</span></a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
       <button  type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#modal_riwayat_pekerjaan">Tambah</button>

       <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <td style ="word-break:break-all;">Perusahaan</td> 
            <td style ="word-break:break-all;">Jabatan</td> 
           
            <td style ="word-break:break-all;">Mulai Bekerja</td> 
            <td style ="word-break:break-all;">Akhir Bekerja</td> 
            <td style ="word-break:break-all;">Lama Bekerja</td> 
            <td style ="word-break:break-all;">Uraian </td> 
            <td style ="word-break:break-all;"></td> 
          </tr>
        </thead>
        <tbody>
          @foreach ($pekerjaan as $pekerjaanlist)

          <tr>
            <td>{{$pekerjaanlist->nama}}</td>
            <td>{{$pekerjaanlist->jabatan}}</td>
         
            <td>{{$pekerjaanlist->masuk}}</td>
            <td>{{$pekerjaanlist->keluar}}</td>
            <td>{{$pekerjaanlist->durasi}}</td>
            <td>{{$pekerjaanlist->deskripsi}}</td>
            <td><button class="btn btn-warning btn-sm" onclick="c_pekerjaan({{$pekerjaanlist->id}})" data-toggle="modal" data-target="#modal_riwayat_pekerjaan">Ubah</button><button class="btn btn-danger btn-sm" onclick="h_pekerjaan({{$pekerjaanlist->id}})">Hapus</button>
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
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"><span style="display: block;">Riwayat Sertifikasi</span></a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">

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
            <td><button class="btn btn-warning btn-sm" onclick="c_sertifikat({{$sertifikatlist->id}})" data-toggle="modal" data-target="#modal_sertifikat">Ubah</button><button class="btn btn-danger btn-sm"onclick="h_sertifikat({{$sertifikatlist->id}})">Hapus</button>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
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
@endsection

@section('styles')

<link rel="stylesheet" href="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css")}}" />
@endsection
