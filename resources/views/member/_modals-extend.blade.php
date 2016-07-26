

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



         <input type="hidden" name="id_pend" id="id_pend" value="">
         <div class="form-group">
          <label class="col-md-3" for="hp" >Tanggal Ijazah</label>
          <div  class="col-md-9">
           <div class='input-group date' id='datetimepicker2'>
            <input type='text' class="form-control" name="date_certificate" id="date_certificate"  />
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

     
          <input type="hidden" name="r_id_pek" id="r_id_pek" value="">

          <div class="form-group">
            <label class="col-md-3" for="hp" >Perusahaan</label>
            <div  class="col-md-9">
              <input  type="text" id="r_perusahaan" name="r_perusahaan" class="form-control"  >
            </div>
            <div class="form-group">
              <label class="col-md-3" for="hp" >Divisi</label>
              <div  class="col-md-9">
                <input  type="text" id="r_divisi" name="r_divisi" class="form-control"  >
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
                <input type='text' class="form-control" name="r_mulai"  id="r_mulai" />
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
                <input type='text' class="form-control" name="r_akhir"  id="r_akhir" />
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

         
          <input type="hidden" name="id_ser" id="id_ser" value="">

          

          <div class="form-group">
            <label class="col-md-3" for="hp" >Tanggal Sertifikasi</label>
            <div  class="col-md-9">
             <div class='input-group date' id='datetimepicker5'>
              <input type='text' class="form-control" name="tanggal"  id="tanggal" />
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
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



    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" >Simpan</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>


</div>
</div>

</div>




