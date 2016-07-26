<div class="modal fade" id="modal_pribadi" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form class="form-horizontal" method="POST" action="{{ URL::route('profil_pribadi') }}" 
      enctype="multipart/form-data" id="form-registrasi">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Data Pribadi</h4>
      </div>
      <div class="modal-body">
        <div class="row">

         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="form-group">
          <label class="col-md-3" for="Name" >

          Nama Lengkap</label>
          <div  class="col-md-9">
            <input  type="text" id="name" name="name" class="form-control" value="{{$pribadi->nama}}" required autofocus>
          </div>
        </div>
        <div class="form-group">

          <label  class="col-md-3" for="ttl" >Tempat/Tanggal Lahir</label>
          <div  class="col-md-9">

            <div  class="col-md-6">
              <input  type="text" id="place_birth"  name="place_birth" class="form-control"  placeholder="tempat lahir" value=" {{$pribadi->tempat_lahir}}" required>
            </div>


            <div  class="col-md-6">
             <div class='input-group date' id='datetimepicker1'>
              <input type='text' class="form_control" name="date_birth" id="date-birth"  placeholder="tanggal lahir" value="{{$pribadi->tanggal_lahir}}" />
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
          </div>

        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3" for="Name" >Nomor KTP</label>
        <div  class="col-md-9">
          <input  type="text" id="ktp" name="ktp" class="form-control" value="{{$pribadi->no_ktp}}" required >
        </div>
      </div>  
      <div class="form-group">
        <label class="col-md-3" for="Name" >Nomor NPWP</label>
        <div  class="col-md-9">
          <input  type="text" id="npwp" name="npwp" class="form-control" value="{{$pribadi->npwp}}" required >
        </div>
      </div> 
      <div class="form-group">
        <label class="col-md-3" for="Name" >No Registrasi</label>
        <div  class="col-md-9">
          <input  type="text" id="no_registrasi" name="no_registrasi" class="form-control" value="{{$pribadi->no_registrasi}}" required >
        </div>
      </div> 
      <div class="form-group">
        <label class="col-md-3" for="Name" >Jenis Kelamin</label>
        <div  class="col-md-9">
          <div class="radio">
            <label><input type="radio" value="Pria" name="jk"
              @if($pribadi->jenis_kelamin=="Pria")
              checked="true"
              @endif

              >Pria</input></label>
            </div>
            <div class="radio">

              <label><input type="radio" value="Wanita" name="jk"
               @if($pribadi->jenis_kelamin=="Wanita")
               checked="true"
               @endif
               >Wanita</input></label>
             </div>
           </div> 
         </div>
         <div class="form-group">
          <label class="col-md-3" for="Name" >Agama</label>
          <div  class="col-md-9">
           {{
           Form::select('agama',
           ['Islam'=>'Islam','Kristen'=>'Kristen','Katolik'=>'Katolik','Hindu'=>'Hindu','Budha'=>'Budha',
           'Lainnya'=>'Lainnya'] ,
           $pribadi->agama, array('class' => 'form-control'))
         }}
       </div>
     </div>
     <div class="form-group">

      <label class="col-md-3" for="Name" >Alamat Rumah</label>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="Provinsi" >Provinsi</label>
      <div  class="col-md-9">
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
       $pribadi->alamat_provinsi, array('class' => 'form-control'))
     }}
   </div>
 </div>
 <div class="form-group">
  <label class="col-md-3" for="alamat" >Alamat Lengkap</label>
  <div  class="col-md-9">
    <textarea class="form-control" id="alamat"  name="alamat">{{$pribadi->alamat}}</textarea>

  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="pos" >RT</label>
  <div  class="col-md-9">
    <input  type="text" id="rt" name="rt" value="{{$pribadi->rt}}" class="form-control"  >

  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="pos" >RW</label>
  <div  class="col-md-9">
    <input  type="text" id="rw" name="rw" value="{{$pribadi->rw}}" class="form-control"  >

  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="pos" >Kelurahan</label>
  <div  class="col-md-9">
    <input  type="text" id="kelurahan" name="kelurahan" value="{{$pribadi->kelurahan}}" class="form-control"  >

  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="pos" >Kecamatan</label>
  <div  class="col-md-9">
    <input  type="text" id="kecamatan" name="kecamatan" value="{{$pribadi->kecamatan}}" class="form-control"  >

  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="pos" >Kode Pos</label>
  <div  class="col-md-9">
    <input  type="text" id="pos" name="pos" class="form-control" value="{{$pribadi->alamat_pos}}" required >

  </div>
</div>


<div class="form-group">
  <label class="col-md-3" for="email" >Email</label>
  <div  class="col-md-9">
    <input  type="text" id="email" name="email" class="form-control"  value="{{$pribadi->email}}" >
  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="telp" >Telepon Rumah</label>
  <div  class="col-md-9">
    <input  type="text" id="telp" name="telp" class="form-control"  value="{{$pribadi->telp}}"  >
  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="email" >Fax Rumah</label>
  <div  class="col-md-9">
    <input  type="text" id="email" name="email" class="form-control"  value="{{$pribadi->fax}}"  >
  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="telp" >Handphone</label>
  <div  class="col-md-9">
    <input  type="text" id="telp" name="telp" class="form-control"  value="{{$pribadi->hp}}" >
  </div>
</div>



</div>
</div>
<div class="modal-footer">
 <button type="submit" class="btn btn-primary" >Simpan</button>
 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</form>
</div>
</div>

</div>

<div class="modal fade" id="modal_pekerjaan" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Data Pekerjaan</h4>
      </div>
      <form class="form-horizontal" method="POST" action="{{ URL::route('profil_pekerjaan') }}" 
      enctype="multipart/form-data" id="form-registrasi">
      <div class="modal-body">
        <div class="row">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">

         <div class="form-group">
          <label class="col-md-3" for="hp" >Nama Perusahaan/Institusi </label>
          <div  class="col-md-9">
            <input  type="text" id="perusahaan" name="perusahaan" class="form-control" value="{{$pribadi->perusahaan}}" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3" for="hp" >Jabatan</label>
          <div  class="col-md-9">
            <input  type="text" id="jabatan-perusahaan" name="jabatan-perusahaan" class="form-control" value="{{$pribadi->perusahaan_jabatan}}" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3" for="hp" >Alamat Perusahaan</label>
          <div  class="col-md-9">
            <input  type="text" id="alamat-perusahaan" name="alamat-perusahaan" class="form-control" value="{{$pribadi->perusahaan_alamat}}" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3" for="alamat" >Alamat Korespondensi</label>
          <div  class="col-md-9">
           <div class="radio">
            <label><input type="radio" name="korespondensi_perusahaan" 
             @if($pribadi->perusahaan_korespondensi=="Kantor")
             checked="true"
             @endif
             >Kantor</input></label>
           </div>
           <div class="radio">
            <label><input type="radio" name="korespondensi_perusahaan"
             @if($pribadi->perusahaan_korespondensi=="Rumah")
             checked="true"
             @endif
             >Rumah</input></label>
           </div>
         </div>
       </div>
       <div class="form-group">
        <label class="col-md-3" for="telp" >Nomor Telepon</label>
        <div  class="col-md-9">
          <input  type="text" id="telepon_perusahaan" name="telepon_perusahaan" class="form-control" value="{{$pribadi->perusahaan_telp}}" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3" for="hp" >Extension</label>
        <div  class="col-md-9">
          <input  type="text" id="extension_perusahaan" name="extension_perusahaan" class="form-control" value=" {{$pribadi->perusahaan_extensi}}" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3" for="hp" >Nomor Fax</label>
        <div  class="col-md-9">
          <input  type="text" id="fax_perusahaan" name="fax_perusahaan" class="form-control" value="{{$pribadi->perusahaan_fax}}" >
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
         'Top Management'=>'Top Management'
         ] ,
         $pribadi->perusahaan_level, array('class' => 'form-control'))
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
      'Lainnya'=>'Lainnya'
      ] ,
      $pribadi->perusahaan_kategori, array('class' => 'form-control'))
    }}
  </div>
</div>
<div class="form-group">
  <label class="col-md-3" for="hp" >Tipe Instansi/Perusahaan</label>
  <div  class="col-md-9">
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
    $pribadi->perusahaan_tipe, array('class' => 'form-control'))
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
   $pribadi->perusahaan_bisnis, array('class' => 'form-control'))
 }}
</div>
</div>


</div>
</div>
<div class="modal-footer">
 <button type="submit" class="btn btn-primary" >Simpan</button>
 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</form>
</div>
</div>

</div>

<div class="modal fade" id="modal_pendidikan" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Data Pendidikan</h4>
      </div>
      <form class="form-horizontal" method="POST" action="{{ URL::route('profil_pendidikan') }}" 
      enctype="multipart/form-data" id="form-registrasi">
      <div class="modal-body">
        <div class="row">


         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="hidden" name="id_pend" id="id_pend" value="">
         <div class="form-group">
          <label class="col-md-3" for="hp" >Tanggal Ijazah</label>
          <div  class="col-md-9">
           <div class='input-group date' id='datetimepicker2'>
            <input type='text' class="form-control" name="date_certificate" id="date_certificate" required />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-3" for="hp" >Sekolah/Perguruan Tinggi</label>
        <div  class="col-md-9">
          <input  type="text" id="sekolah" name="sekolah" class="form-control" required >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3" for="alamat" >Program Studi</label>
        <div  class="col-md-9">
          <input  type="text" id="prodi" name="prodi" class="form-control" required  >
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="telp" >Jenjang Pendidikan</label>
      <div  class="col-md-9">
       {{
       Form::select('jenjang',
       [
       'SMA atau sederajat'=>'SMA atau sederajat',
       'DIII'=>'DIII',
       'DIV'=>'DIV',
       'PPA'=>'PPA',
       'S1'=>'S1',
       'S2'=>'S2',
       'S3'=>'S3',
       'Profesor'=>'Profesor',
       ] ,'SMA atau sederajat',
       array('class' => 'form-control','id'=>'jenjang'))
     }}

   </div>
 </div>

 <div class="form-group">
  <label class="col-md-3" for="hp" >Kota</label>
  <div  class="col-md-9">
    <input  type="text" id="kota" name="kota" class="form-control"  >
  </div>
</div>




</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-primary" >Simpan</button>
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</form>
</div>
</div>

</div>

<div class="modal fade" id="modal_riwayat_pekerjaan" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Riwayat Pekerjaan</h4>
      </div>
      <form class="form-horizontal" method="POST" action="{{ URL::route('profil_riwayat_pekerjaan') }}" 
      enctype="multipart/form-data" id="form-registrasi">
      <div class="modal-body">
        <div class="row">
        
<input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="hidden" name="r_id_pek" id="r_id_pek" value="">

           <div class="form-group">
            <label class="col-md-3" for="hp" >Perusahaan</label>
            <div  class="col-md-9">
              <input  type="text" id="r_perusahaan" name="r_perusahaan" class="form-control" required >
            </div>
            <div class="form-group">
            <label class="col-md-3" for="hp" >Divisi</label>
              <div  class="col-md-9">
                <input  type="text" id="r_divisi" name="r_divisi" class="form-control"  required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3" for="hp" >Jabatan</label>
              <div  class="col-md-9">
                <input  type="text" id="r_jabatan" name="r_jabatan" class="form-control"  >
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3" for="hp" >Mulai Bekerja</label>
              <div  class="col-md-9">
               <div class='input-group date' id='datetimepicker3'>
                <input type='text' class="form-control" name="r_mulai"  id="r_mulai" required/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3" for="alamat" >Berakhir Bekerja</label>
            <div  class="col-md-9">
              <div class='input-group date' id='datetimepicker4'>
                <input type='text' class="form-control" name="r_akhir"  id="r_akhir" required />
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3" for="telp" >Lama Bekerja</label>
          <div  class="col-md-9">
           <input  type="text" id="r_lama" name="r_lama" class="form-control"  >
         </div>
       </div>
       <div class="form-group">
        <label class="col-md-3" for="hp" >Uraian</label>
        <div  class="col-md-9">
          <input  type="text" id="r_uraian" name="r_uraian" class="form-control"  >
        </div>
      </div>





  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary" >Simpan</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
    </form>
</div>
</div>

</div>

<div class="modal fade" id="modal_sertifikat" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Riwayat Sertifikasi</h4>
      </div>
       <form class="form-horizontal" method="POST" action="{{ URL::route('profil_sertifikat') }}" 
      enctype="multipart/form-data" id="form-registrasi">
      <div class="modal-body">
        <div class="row">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="hidden" name="id_ser" id="id_ser" value="">

          

            <div class="form-group">
              <label class="col-md-3" for="hp" >Tanggal Sertifikasi</label>
              <div  class="col-md-9">
               <div class='input-group date' id='datetimepicker5'>
                <input type='text' class="form-control" name="tanggal"  id="tanggal" required/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>

        <div class="form-group">
          <label class="col-md-3" for="telp" >Nama Sertifikasi</label>
          <div  class="col-md-9">
           <input  type="text" id="nama" name="nama" class="form-control"  required>
         </div>
       </div>
       <div class="form-group">
        <label class="col-md-3" for="hp" >Nomor Sertifikasi</label>
        <div  class="col-md-9">
          <input  type="text" id="nomor" name="nomor" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3" for="hp" >Penyelenggara</label>
        <div  class="col-md-9">
          <input  type="text" id="penyelenggara" name="penyelenggara" class="form-control" required >
        </div>
      </div>



  </div>
  <div class="modal-footer">
  <button type="submit" class="btn btn-primary" >Simpan</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
    </form>

</div>
</div>

</div>

<div class="modal fade" id="modal_foto" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form class="form-horizontal" method="POST" action="{{url('/profil/ubahfoto')}}" 
    enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Foto</h4>
      </div>
      <div class="modal-body">
        <div class="row">

          <input type="hidden" name="_token" value="{{ csrf_token() }}">




          <div class="form-group" >
            <label class="col-md-3" for="hp" >Pilih Foto</label>
            <div  class="col-md-9">
             <input type="file" name="foto"></div>
           </div>

         </div>




       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Ubah</button>
      </div>
    </div>
  </form>
</div>
</div>

</div>

<div class="modal fade" id="modal_skp" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Klaim SKP</h4>
      </div>
      <div class="modal-body">
        <div class="row">
         <form class="form">

          <div class="form-group">
            <label class="col-md-3" for="telp" >Tipe Aktifitas</label>
            <div  class="col-md-9">
              <select class="form-control" id="tipe-aktifitas" name="tipe-aktifitas">
                <option >Pelatihan</option>
                <option>Kursus</option>
                <option >Lokakarya</option>
                <option >Diskusi Panel</option>
                <option >Seminar</option>
                <option >Konferensi</option>
                <option >Konvensi</option>
                <option >Simposium</option>
                <option >Program Pascasarjana pada bidang studi yang relevan</option>
                <option >Program Belajar Jarak Jauh</option>
                <option >Penulisan artikel, makalah, atau buku dengan materi yang relevan dan dipublikasikan</option>
                <option >Riset profesional atau studi terhadap bidang-bidang yang relevan</option>
                <option >Menjadi anggota Dewan Penguji pada organisasi yang mengharuskan ybs mereview materi teknis</option>
                <option >Menjadi anggota dalam komite teknis yang dibentuk dan/atau diakui oleh IAI</option>
              </select>

            </div>
          </div> 
          <div class="form-group">

            <div class="form-group">
              <label class="col-md-3" for="hp" >Tanggal Mulai</label>
              <div  class="col-md-9">
               <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control" name="mulai"  id="mulai" required/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3" for="hp" >Tanggal Berakhir</label>
            <div  class="col-md-9">
             <div class='input-group date' id='datetimepicker7'>
              <input type='text' class="form-control" name="akhir"  id="akhir" required />
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3" for="telp" >Aktifitas</label>
        <div  class="col-md-9">
         <input  type="text" id="aktifitas" name="aktifitas" class="form-control" required >
       </div>
     </div>
     <div class="form-group">
      <label class="col-md-3" for="hp" >SKP yang diusulkan</label>
      <div  class="col-md-9">
        <input  type="text" id="usulan" name="usulan" class="form-control"  >
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="hp" >Topik</label>
      <div  class="col-md-9">
        <input  type="text" id="topik" name="topik" class="form-control"  >
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3" for="hp" >Penyelenggara</label>
      <div  class="col-md-9">
        <input  type="text" id="penyelenggara" name="penyelenggara" class="form-control"  >
      </div>
    </div>
    <label class="col-md-12" for="hp" >Unggah dokumen pendukung maksimal sebesar 10MB dalam format ZIP, JPG, PNG, DOC, DOCX, atau PDF.</label>
    <input  type="file" id="dokumen" name="dokumen" class="form-control"  >
  </form>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" data-dismiss="modal">Simpan</button>
</div>
</div>

</div>
</div>

</div>


<div class="modal fade" id="modal_upload" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Dokumen</h4>
      </div>
      <div class="modal-body">
        <div class="row">
         <form class="form" class="form-vertical" action="a">

           <div class="form-group" >      
            <div class="control-label col-md-6">
              <label>Kopi Sertifikat Akuntan Profesional (jika ada)</label>
            </div>
            <div class="col-md-6">
            <input type="file" name="file-sertifikat" class="form-control"  >
            </div>
            </div>
            <div class="form-group" >      
            <div class="control-label col-md-6">
              <label>Kopi Kartu Anggota</label>
            </div>
            <div class="col-md-6">
            <input type="file" name="file-kartu" class="form-control" required>
            </div>
            </div>
            <div class="form-group" >      
            <div class="control-label col-md-6">
              <label>
              Kopi KTP atau Bukti Domisili Lainnya</label>
            </div>
            <div class="col-md-6">
            <input type="file" name="file-ktp" class="form-control" required> 
            </div>
            </div>
           <div class="form-group" >      
            <div class="control-label col-md-6">
              <label>
              Surat Keterangan atau Bukti Pengalaman Praktik</label>
           </div>
            <div class="col-md-6">
            <input type="file" name="file-surat" class="form-control" required>
            </div>
            </div>
            <div class="form-group" >      
            <div class="control-label col-md-6">
              <label>
              Kopi Ijazah yang Dilegalisir</label>
           </div>
            <div class="col-md-6">
            <input type="file" name="file-ijazah" class="form-control" required>
            </div>
            </div>
           <div class="form-group" >      
            <div class="control-label col-md-6">
              <label>
              2 Buah Pas Foto dengan Latar Belakang Putih 4x6 Terbaru</label>
           </div>
            <div class="col-md-6">
            <input type="file" name="file-foto" class="form-control" required>
            </div>
            </div>
            <div class="form-group" >      
            <div class="control-label col-md-6">
              <label>
              Kopi Piagam Register Negara Akuntan atau Surat Keterangan Terdaftar dalam Register Negara Akuntan</label>
          </div>
            <div class="col-md-6">
            <input type="file" name="file-piagam" class="form-control">
            </div>
            </div>
    



  <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" >Upload</button>
    </div>
       </form>

     </div>
   
  </div>

</div>
</div>

</div>


<div class="modal fade" id="modal_password" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ganti Password</h4>
      </div>
      <div class="modal-body">
        <div class="row">
         <form class="form">


          <div class="form-group">
            <label class="col-md-3" for="telp" >Password Lama</label>
            <div  class="col-md-9">
             <input  type="password" id="lama" name="lama" class="form-control"  >
           </div>
         </div>
         <div class="form-group">
          <label class="col-md-3" for="hp" >Password Baru</label>
          <div  class="col-md-9">
            <input  type="password" id="baru" name="baru" class="form-control"  >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3" for="hp" >Konfirmasi Password</label>
          <div  class="col-md-9">
            <input  type="password" id="konfirmasi" name="konfirmasi" class="form-control"  >
          </div>
        </div>

      </form>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" data-dismiss="modal">Ubah</button>
    </div>
  </div>

</div>
</div>

</div>
