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
         <p><strong>Konfirmasi pendaftaran anggota</strong></p>
         <p> </p>

         
Kami mengirimkan tautan untuk melakukan konfirmasi pembayaran ke email Anda. Mohon cek juga folder 'junk' apabila di dalam inbox email Anda tidak ada email dari kami.

           <div class="panel-group" id="print_form">
            <div class="panel panel-default">
              <div class="panel-heading" >
                <h4 class="panel-title">
                  <a data-toggle="collapse" > <span style="display: block;">Data Pribadi</span></a>
                </h4>
              </div>
              <div id="collapseOne" >
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
 


 </div>
</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading" >
    <h4 class="panel-title">
    <a data-toggle="collapse"  > <span style="display: block;">Pekerjaan Saat Ini</span></a>
    </h4>
  </div>
  <div id="collapseTwo" >
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

</div>

</div>

</div>

</div>
<div class="row">
<div class="col-md-12">
<h2 class="center">
Biaya Pendaftaraan Keanggotaan IKPI
</h2>
<table class="table">
  <tr>
<td><strong>Keterangan Transaksi</strong></td>
<td><strong>Jumlah</strong></td>
  </tr>
  <tr>
  <td>Pembayaran pendaftaran anggota IAI</td>
  <td>Rp. 125.000</td>

  </tr>
    <tr>
  <td>Total</td>
  <td><strong>Rp. 125.000</strong></td>
  
  </tr>
    <tr>
  <td>Terbilang</td>
  <td>Seratus dua puluh lima ribu rupiah</td>
  
  </tr>
</table>
</div>
</div>
</div>

<div class="row">

<div class="col-md-11">
  <button  type="button"  class="btn btn-primary pull-right"  onclick="PrintElem('#print_form')">Cetak</button>
  </div>
</div>

</div>


</div>

</div>
</div>

@endsection
