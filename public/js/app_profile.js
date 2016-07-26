var pendidikan;
var pekerjaan;
var sertifikat;

$( document ).ready(function() {
	$.ajax({url:config.routes , success: function(result){
		pendidikan=result.pendidikan;
		pekerjaan=result.pekerjaan;
		sertifikat=result.sertifikat;

	}});
});

function c_pendidikan(id){
	var result = $.grep(pendidikan, function(e){ return e.id == id; });
	if (result.length == 0) {
  // not found
} else if (result.length == 1) {
	
	$("#date_certificate").val(result[0].tanggal);
	$("#sekolah").val(result[0].tanggal);
	$("#prodi").val(result[0].prodi);
	$("#jenjang").val(result[0].jenjang);

	$("#kota").val(result[0].kota);
	$("#id_pend").val(id);
} 
}

function b_pendidikan(id){
	$("#id_pend").val("")
}
function h_pendidikan(id){
	var c=confirm("Apakah anda yakin ingin menghapus?");
	if(c){
		window.location.replace("profil/h_pendidikan/"+id);		
	}
}

function c_pekerjaan(id){
	var result = $.grep(pekerjaan, function(e){ return e.id == id; });
	if (result.length == 0) {
  // not found
} else if (result.length == 1) {
	
	$("#r_perusahaan").val(result[0].nama);
	$("#r_jabatan").val(result[0].jabatan);
	$("#r_divisi").val(result[0].divisi);
	$("#r_mulai").val(result[0].masuk);
	$("#r_akhir").val(result[0].keluar);

	$("#r_lama").val(result[0].durasi);
	$("#r_uraian").val(result[0].deskripsi);
	$("#r_id_pek").val(id);
} 
}

function b_pekerjaan(id){
	$("#r_id_pek").val("")
}
function h_pekerjaan(id){
	var c=confirm("Apakah anda yakin ingin menghapus?");
	if(c){
		window.location.replace("profil/h_pekerjaan/"+id);		
	}
}

function c_sertifikat(id){
	var result = $.grep(sertifikat, function(e){ return e.id == id; });
	if (result.length == 0) {
  // not found

} else if (result.length == 1) {
	
	$("#tanggal").val(result[0].tanggal);
	$("#nama").val(result[0].nama);
	$("#nomor").val(result[0].no);
	$("#penyelenggara").val(result[0].penyelenggara);

	$("#id_ser").val(id);
} 
}

function b_sertifikat(id){
	$("#id_ser").val("")
}
function h_sertifikat(id){
	var c=confirm("Apakah anda yakin ingin menghapus?");
	if(c){
		window.location.replace("profil/h_sertifikat/"+id);		
	}
}

function c_e_pendidikan(id){
	if(id!="")
	{

		var result = $.grep(pendidikan, function(e){ return e.id == id; });
		if (result.length == 0) {
  // not found
} else if (result.length == 1) {
	
	$("#date_certificate").val(result[0].tanggal);
	$("#sekolah").val(result[0].sekolah);
	$("#prodi").val(result[0].prodi);
	$("#jenjang").val(result[0].jenjang);

	$("#kota").val(result[0].kota);
	$("#id_pend").val(id);

}
} 
else{
	$("#date_certificate").val();
	$("#sekolah").val();
	$("#prodi").val();
	$("#jenjang").val();

	$("#kota").val();
	$("#id_pend").val();
}
$('#p_angota').attr('action',routes.pendidikan);
}


function h_e_pendidikan(id){
	var c=confirm("Apakah anda yakin ingin menghapus?");
	if(c){
		window.location.replace("../profil/h_pendidikan/"+id);		
	}
}
function c_e_pekerjaan(id){
	if(id!="")
	{


		var result = $.grep(pekerjaan, function(e){ return e.id == id; });
		if (result.length == 0) {
  // not found
} else if (result.length == 1) {
	
	$("#r_perusahaan").val(result[0].nama);
	$("#r_jabatan").val(result[0].jabatan);
	$("#r_divisi").val(result[0].divisi);
	$("#r_mulai").val(result[0].masuk);
	$("#r_akhir").val(result[0].keluar);

	$("#r_lama").val(result[0].durasi);
	$("#r_uraian").val(result[0].deskripsi);
	$("#r_id_pek").val(id);

}
} 
else
{
	$("#r_perusahaan").val();
	$("#r_jabatan").val();
	$("#r_divisi").val();
	$("#r_mulai").val();
	$("#r_akhir").val();

	$("#r_lama").val();
	$("#r_uraian").val();
	$("#r_id_pek").val();
}


$('#p_angota').attr('action',routes.pekerjaan);
}

function h_e_pekerjaan(id){
	var c=confirm("Apakah anda yakin ingin menghapus?");
	if(c){
		window.location.replace("../profil/h_pekerjaan/"+id);		
	}
}
function c_e_sertifikat(id){
	if (id!="") {
		var result = $.grep(sertifikat, function(e){ return e.id == id; });
		if (result.length == 0) {
  // not found

} else if (result.length == 1) {
	
	$("#tanggal").val(result[0].tanggal);
	$("#nama").val(result[0].nama);
	$("#nomor").val(result[0].no);
	$("#penyelenggara").val(result[0].penyelenggara);

	$("#id_ser").val(id);
} 
}
else{
	$("#tanggal").val();
	$("#nama").val();
	$("#nomor").val();
	$("#penyelenggara").val();
	$("#id_ser").val();
}

$('#p_angota').attr('action',routes.sertifikat);
}


function h_e_sertifikat(id){
	var c=confirm("Apakah anda yakin ingin menghapus?");
	if(c){
		window.location.replace("../profil/h_sertifikat/"+id);		
	}
}

function changeform(){
	$('#p_angota').attr('action',routes.all);
}


function PrintElem(elem)
{
	Popup($(elem).html());
}

function Popup(data) 
{
	var mywindow = window.open('', 'my div', 'height=400,width=600');
	mywindow.document.write('<html><head>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

function a(){
	alert(1)
}