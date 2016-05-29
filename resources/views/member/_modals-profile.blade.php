<div class="modal fade" id="modal_pribadi" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data Pribadi</h4>
        </div>
        <div class="modal-body">
        <div class="row">
     <form class="form">
                 
           
                  <div class="form-group">
                    <label class="col-md-3" for="Name" >Nama Lengkap</label>
                    <div  class="col-md-9">
                        <input  type="text" id="name" name="name" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
             
                    <label  class="col-md-3" for="ttl" >Tempat/Tanggal Lahir</label>
                    <div  class="col-md-9">
                    <div class="row">
                    <div  class="col-md-12">
                        <input  type="text" id="place-birth"  name="place-birth" class="form-control"  placeholder="tempat lahir" required>
                    </div>
                    </div>
                      <div class="row">
                    <div  class="col-md-12">
                     <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="date-birth" id="date-birth"  placeholder="tanggal lahir" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
              </div>
                    </div>
                        
                    </div>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-md-3" for="Name" >Nomor KTP</label>
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
        <input  type="text" id="email" name="email" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="telp" >Telepon Rumah</label>
    <div  class="col-md-9">
        <input  type="text" id="telp" name="telp" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="email" >Fax Rumah</label>
    <div  class="col-md-9">
        <input  type="text" id="email" name="email" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="telp" >Handphone</label>
    <div  class="col-md-9">
        <input  type="text" id="telp" name="telp" class="form-control"  >
    </div>
</div>


                </form>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
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
        <div class="modal-body">
        <div class="row">
     <form class="form">
                 
           
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

                </form>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
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
        <div class="modal-body">
        <div class="row">
     <form class="form">
                 
           
                 <div class="form-group">
    <label class="col-md-3" for="hp" >Tanggal Ijazah</label>
    <div  class="col-md-9">
       <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" name="date-certificate" id="date-certificate"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
              </div>
    </div>
</div>


<div class="form-group">
    <label class="col-md-3" for="hp" >Sekolah/Perguruan Tinggi</label>
    <div  class="col-md-9">
        <input  type="text" id="sekolah" name="sekolah" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="alamat" >Program Studi</label>
 <div  class="col-md-9">
        <input  type="text" id="prodi" name="prodi" class="form-control"  >
    </div>
</div>
</div>
<div class="form-group">
    <label class="col-md-3" for="telp" >Jenjang Pendidikan</label>
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
    <label class="col-md-3" for="hp" >Extension</label>
    <div  class="col-md-9">
        <input  type="text" id="extension-perusahaan" name="extension-perusahaan" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="hp" >Kota</label>
    <div  class="col-md-9">
        <input  type="text" id="kota" name="kota" class="form-control"  >
    </div>
</div>


                </form>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
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
        <div class="modal-body">
        <div class="row">
     <form class="form">
                 
           
                 <div class="form-group">
    <label class="col-md-3" for="hp" >Perusahaan</label>
    <div  class="col-md-9">
          <input  type="text" id="perusahaan" name="perusahaan" class="form-control"  >
</div>

<div class="form-group">
    <label class="col-md-3" for="hp" >Jabatan</label>
    <div  class="col-md-9">
        <input  type="text" id="jabatan" name="jabatan" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="hp" >Mulai Bekerja</label>
    <div  class="col-md-9">
         <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" name="mulai"  id="mulai" />
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
                    <input type='text' class="form-control" name="akhir"  id="akhir" />
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
     <input  type="text" id="lama" name="lama" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="hp" >Uraian</label>
    <div  class="col-md-9">
        <input  type="text" id="uraian" name="uraian" class="form-control"  >
    </div>
</div>



                </form>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
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
        <div class="modal-body">
        <div class="row">
     <form class="form">
                 
           
                 <div class="form-group">

<div class="form-group">
    <label class="col-md-3" for="hp" >Tanggal Sertifikasi</label>
    <div  class="col-md-9">
         <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" name="tanggal"  id="tanggal" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
              </div>
    </div>
</div>

</div>
<div class="form-group">
    <label class="col-md-3" for="telp" >Nama Sertifikasi</label>
    <div  class="col-md-9">
     <input  type="text" id="nama" name="nama" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="hp" >Nomor Sertifikasi</label>
    <div  class="col-md-9">
        <input  type="text" id="nomor" name="nomor" class="form-control"  >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3" for="hp" >Penyelenggara</label>
    <div  class="col-md-9">
        <input  type="text" id="penyelenggara" name="penyelenggara" class="form-control"  >
    </div>
</div>


                </form>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
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
                      <input type='text' class="form-control" name="mulai"  id="mulai" />
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
                      <input type='text' class="form-control" name="akhir"  id="akhir" />
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
     <input  type="text" id="aktifitas" name="aktifitas" class="form-control"  >
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
     <form class="form">
                 
     <div class="form-group">      
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
</div>




                </form>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Upload</button>
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
