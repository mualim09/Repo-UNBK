<?php ini_set('max_execution_time',0); 
	include "../../config/ipserver.php";
	$PCSERVER = $host_name;
?>
<?php
	include "../../config/server.php";
	$sql10 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from server_sekolah");
	$xadm5 = mysqli_fetch_array($sql10);
	$serverid= $xadm5['XServerId'];
?>

<br> 
	<table border="0" width="250px" cellpadding="20px" cellspacing="20px">
		<tr><td> 	&nbsp;	<?php echo "<a href='#myTam' id='custId' data-toggle='modal' data-id=''>"; ?>
							<button type="button" class="btn btn-danger" >START SYNC</button>
							<?php echo "</a>";?>
			</td>
			<td>	<a href="#" data-toggle='modal' data-target='#myInfoz'>
						<button class="btn btn-info">Refresh Status</button>
					</a>
        </td></tr>
	</table>
	
<style>
.an ul {	list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden; }

.an li {	float: left;
			width:50%; list-style:none; }
</style>

<script>
    setTimeout(myFunction, 9000)
</script>
        
 <div class="modal fade" id="myTam" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
        <!-- MEMBUAT FORM -->
			<form method="post" enctype="multipart/form-data" action="<?php echo "?modul=sinkronsatu"; ?>">
				<div class="form-group">
					<div style="width:100%; background-color:#28b2bc; color:#FFFFFF; padding:10px; margin-top:10px; font-size:22px">Sinkron Data</div>
					<label></label>
				</div>
				<table>
					<tr><td width="10%"></td>
						<td width="30%">
							<div class="form-group">
								<input type="checkbox" value="1" checked="checked" name="data_siswa"> <label>Data 1 : Data Siswa</label>
							</div>
						</td>
						<td width="30%">
							<div class="form-group">
								<input type="checkbox" value="1" checked="checked" name="data_mapel"> <label>Data 5 : Data Mapel</label>
							</div>
						</td>
					</tr>
					<tr><td width="10%"></td>
						<td width="30%">
							<div class="form-group">
								<input type="checkbox" value="1" checked="checked" name="data_kelas"> <label>Data 2 : Data Kelas</label>
							</div>
						</td>
						<td width="30%">
							<div class="form-group">
								<input type="checkbox" value="1" checked="checked" name="data_gambar"> <label>Data 6 : Data Gambar</label>
							</div>
						</td>
					</tr>
					<tr><td width="10%"></td>
						<td width="30%">
							<div class="form-group">
								<input type="checkbox" value="1" checked="checked" name="paket_soal"> <label>Data 3 : Paket Soal</label>
							</div>
						</td>
						<td width="30%">
							<div class="form-group">
								<input type="checkbox" value="1" checked="checked" name="data_audio"> <label>Data 7 : Data Audio</label>
							</div>
						</td>
					</tr>
					<tr><td width="10%"></td>
						<td width="30%">
							<div class="form-group">
								<input type="checkbox" value="1" checked="checked" name="data_soal"> <label>Data 4 : Data Soal</label>
							</div>
						</td>
						<td width="30%">
							<div class="form-group">
								<input type="checkbox" value="1" checked="checked" name="data_video"> <label>Data 8 : Data Video</label>
							</div>
						</td>
					</tr>
				</table>
				<center><input name="upload" type="submit" value="START SYNC"  class="btn btn-danger" style="margin-top:0px">
					<br><br><button type="submit" class="btn btn-default btn-sm" data-dismiss="modal">
								<i class="glyphicon glyphicon-minus-sign"></i> Close
							</button>
				</center>
			</form>                
            <div class="fetched-data2"></div>
            </div>
        </div>
    </div>
</div>          
<!-- Sinkron Siswa-->                        
<div style="width:75%; background-color:#28b2bc; color:#FFFFFF; padding:15px; margin-top:10px; font-size:22px">Sync Progress Status</div>
<!-- Progress bar holder -->
<div style="margin-top:10px;width:77%;"><ul class="an"><li style="margin-left:-40px;">DATA 1 : Data Siswa</li><li style="text-align:right; display:none" id="statusdata">Selesai</li></ul></div>
<br>
<div id="progress" style="width:75%; border:1px solid #ccc; padding:5px; margin-top:10px; height:33px"></div>
<!-- Progress information -->
<div id="information1" style="width"></div>

<!-- Sinkron Kelas -->
<!-- Progress bar holder -->
<hr style="width:75%; text-align:left; margin-left:0px; padding:0px">
<div style="margin-top:10px;width:77%;"><ul class="an"><li style="margin-left:-40px;">DATA 2 : Data Kelas</li><li style="text-align:right; display:none" id="statusdata2">Selesai</li></ul></div>
<br>
<div id="progress2" style="width:75%; border:1px solid #ccc; padding:5px; margin-top:10px; height:33px"></div>
<!-- Progress information -->
<div id="information2" style="width"></div>

<!-- Sinkron Paket Soal -->
<!-- Progress bar holder -->
<hr style="width:75%; text-align:left; margin-left:0px; padding:0px">
<div style="margin-top:10px;width:77%;"><ul class="an"><li style="margin-left:-40px;">DATA 3 : Paket Soal</li><li style="text-align:right; display:none" id="statusdata3">Selesai</li></ul></div>
<br>
<div id="progress3" style="width:75%; border:1px solid #ccc; padding:5px; margin-top:10px; height:33px"></div>
<!-- Progress information -->
<div id="information3" style="width"></div>

<!-- Sinkron Soal -->
<!-- Progress bar holder -->
<hr style="width:75%; text-align:left; margin-left:0px; padding:0px">
<div style="margin-top:10px;width:77%;"><ul class="an"><li style="margin-left:-40px;">DATA 4 : Data Soal</li><li style="text-align:right; display:none" id="statusdata4">Selesai</li></ul></div>
<br>
<div id="progress4" style="width:75%; border:1px solid #ccc; padding:5px; margin-top:10px; height:33px"></div>
<!-- Progress information -->
<div id="information4" style="width"></div>

<!-- Sinkron Mapel -->
<hr style="width:75%; text-align:left; margin-left:0px">
<div style="margin-top:10px;width:77%;"><ul class="an"><li style="margin-left:-40px;">DATA 5 Data Mapel</li><li style="text-align:right; display:none" id="statusdata5">Selesai</li></ul></div>
<br>
<div id="progress5" style="width:75%; border:1px solid #ccc; padding:5px; margin-top:10px; height:33px"></div>
<!-- Progress information -->
<div id="information5" style="width"></div>

<!-- Sinkron Gambar -->
<hr style="width:75%; text-align:left; margin-left:0px">
<!-- Progress bar holder -->
<div style="margin-top:10px;width:77%;"><ul class="an"><li style="margin-left:-40px;">DATA 6 : Data Gambar</li><li style="text-align:right; display:none" id="statusdataG">Selesai</li></ul></div>
<br>
<div id="progressG" style="width:75%; border:1px solid #ccc; padding:5px; margin-top:10px; height:33px"></div>
<!-- Progress information -->
<div id="informationG" style="width"></div>

<!-- Sinkron Audio-->                        
<!-- Progress bar holder -->
<hr style="width:75%; text-align:left; margin-left:0px">

<div style="margin-top:10px;width:77%;"><ul class="an"><li style="margin-left:-40px;">DATA 7 : Data Audio</li><li style="text-align:right; display:none" id="statusdataA">Selesai</li></ul></div>
<br>
<div id="progressA" style="width:75%; border:1px solid #ccc; padding:5px; margin-top:10px; height:33px"></div>
<!-- Progress information -->
<div id="informationA" style="width"></div>

<!-- Sinkron Video-->                        
<!-- Progress bar holder -->
<hr style="width:75%; text-align:left; margin-left:0px">

<div style="margin-top:10px;width:77%;"><ul class="an"><li style="margin-left:-40px;">DATA 8 : Data Video</li><li style="text-align:right; display:none" id="statusdataV">Selesai</li></ul></div>
<br>
<div id="progressV" style="width:75%; border:1px solid #ccc; padding:5px; margin-top:10px; height:33px"></div>
<!-- Progress information -->
<div id="informationV" style="width"></div>

<hr style="width:75%; text-align:left; margin-left:0px">

<?php
if($_REQUEST['modul']=="sinkronsatu"){
if(isset($_REQUEST['data_siswa'])){

/* === DATA SISWA DATA 1== */
include "../../config/server.php";
$sql = mysqli_query($GLOBALS["___mysqli_ston"], "truncate table cbt_siswa");
$i = 1;
//document.getElementById("information").innerHTML="  Sikronisasi : DATA 1 ... <b>'.$i.'</b> dari <b>'. $baris.'</b> Selesai.";
		include "../../config/server_pusat.php";
		$sqlcek = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_siswa WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
		$baris = mysqli_num_rows($sqlcek);
		//echo "jumlah total paket data : $baris";
		
		while($r=mysqli_fetch_array($sqlcek)){
		//for ($i=1; $i<=$baris; $i++){
					include "../../config/server.php";
					$sql = mysqli_query($GLOBALS["___mysqli_ston"], "insert into cbt_siswa 
					(XNomerUjian,XNIK,XKodeJurusan,XNamaSiswa,XKodeKelas,XKodeLevel,XJenisKelamin,XPassword,XFoto,XAgama,XSetId,XSesi,XRuang,XKodeSekolah,XPilihan) values 			
					('$r[XNomerUjian]','$r[XNIK]','$r[XKodeJurusan]','$r[XNamaSiswa]','$r[XKodeKelas]',			
					'$r[XKodeLevel]','$r[XJenisKelamin]','$r[XPassword]','$r[XFoto]',
					'$r[XAgama]','$r[XSetId]','$r[XSesi]','$r[XRuang]','$r[XKodeSekolah]','$r[XPilihan]')");
		
		$percent = intval($i/$baris * 100)."%";
			// Javascript for updating the progress bar and information
			echo '<script language="javascript">
			document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-image:url(images/pbar-ani1.gif);\">&nbsp;</div>";
		    document.getElementById("information1").innerHTML="  Download Berkas Daftar Siswa <b>'.$i.'</b> row(s) of <b>'. $baris.'</b> ... '.$percent.'  Completed.";			
			</script>';
		// This is for the buffer achieve the minimum size in order to flush data
			echo str_repeat(' ',1024*64);
		// Send output to browser immediately
			flush();
		// Tell user that the process is completed
		$i++;
		}
		}
		?>
		<script>document.getElementById("statusdata").style.display="block";
        setTimeout(myFunction, 9000)
        </script>
		
<?php

/* === KELAS DATA 2== */
if(isset($_REQUEST['data_kelas'])){
include "../../config/server.php";
$sql = mysqli_query($GLOBALS["___mysqli_ston"], "truncate table cbt_kelas");
$i = 1;

//document.getElementById("information").innerHTML="  Sikronisasi : DATA 2 ... <b>'.$i.'</b> dari <b>'. $baris.'</b> Selesai.";
		include "../../config/server_pusat.php";
		$sqlcek = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_kelas WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
		$baris = mysqli_num_rows($sqlcek);
		//echo "jumlah total paket data : $baris";
		
		while($r=mysqli_fetch_array($sqlcek)){
		//for ($i=1; $i<=$baris; $i++){
					include "../../config/server.php";
					$sql = mysqli_query($GLOBALS["___mysqli_ston"], "insert into cbt_kelas 
					(XKodeLevel,XNamaKelas,XKodeJurusan,XKodeKelas,XStatusKelas,XKodeSekolah) values 			
					('$r[XKodeLevel]','$r[XNamaKelas]','$r[XKodeJurusan]','$r[XKodeKelas]','$r[XStatusKelas]','$r[XKodeSekolah]')");

		$percent = intval($i/$baris * 100)."%";
			// Javascript for updating the progress bar and information
			echo '<script language="javascript">
			document.getElementById("progress2").innerHTML="<div style=\"width:'.$percent.';background-image:url(images/pbar-ani1.gif);\">&nbsp;</div>";
		    document.getElementById("information2").innerHTML="  Download Berkas Kelas <b>'.$i.'</b> row(s) of <b>'. $baris.'</b> ... '.$percent.'  Completed.";			
			</script>';
		// This is for the buffer achieve the minimum size in order to flush data
			echo str_repeat(' ',1024*64);
		// Send output to browser immediately
			flush();
		// Tell user that the process is completed
		  
		
		$i++;
		} }
		?>
		<script>document.getElementById("statusdata2").style.display="block";
        setTimeout(myFunction, 9000)
        </script>
        
<?php 	

/* === PAKET SOAL DATA 3== */
if(isset($_REQUEST['paket_soal'])){
include "../../config/server.php";
$sql = mysqli_query($GLOBALS["___mysqli_ston"], "truncate table cbt_paketsoal");
$i = 1;

//document.getElementById("information").innerHTML="  Sikronisasi : DATA 3 ... <b>'.$i.'</b> dari <b>'. $baris.'</b> Selesai.";
		include "../../config/server_pusat.php";
		$sqlcek = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_paketsoal WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
		$baris = mysqli_num_rows($sqlcek);
		//echo "jumlah total paket data : $baris";
		
		while($r=mysqli_fetch_array($sqlcek)){
		//for ($i=1; $i<=$baris; $i++){
					include "../../config/server.php";
					$sql = mysqli_query($GLOBALS["___mysqli_ston"], "insert into cbt_paketsoal 
					(XKodeSekolah,XKodeMapel,XLevel,XKodeSoal,XJumPilihan,XTglBuat,XGuru,XKodeKelas,XKodeJurusan,XJumSoal,XPilGanda,XEsai,XPersenPil,XPersenEsai,XStatusSoal) values 			
					('$r[XKodeSekolah]','$r[XKodeMapel]','$r[XLevel]','$r[XKodeSoal]','$r[XJumPilihan]','$r[XTglBuat]',			
					'$r[XGuru]','$r[XKodeKelas]','$r[XKodeJurusan]','$r[XJumSoal]',
					'$r[XPilGanda]','$r[XEsai]','$r[XPersenPil]','$r[XPersenEsai]','$r[XStatusSoal]')");

		$percent = intval($i/$baris * 100)."%";
			// Javascript for updating the progress bar and information
			echo '<script language="javascript">
			document.getElementById("progress3").innerHTML="<div style=\"width:'.$percent.';background-image:url(images/pbar-ani1.gif);\">&nbsp;</div>";
		    document.getElementById("information3").innerHTML="  Download Berkas Paket Soal <b>'.$i.'</b> row(s) of <b>'. $baris.'</b> ... '.$percent.'  Completed.";			
			</script>';
		// This is for the buffer achieve the minimum size in order to flush data
			echo str_repeat(' ',1024*64);
		// Send output to browser immediately
			flush();
		// Tell user that the process is completed
		  
		
		$i++;
		}} ?>
		<script>document.getElementById("statusdata3").style.display="block";
        setTimeout(myFunction, 9000)
        </script>
        
<?php 	

/* === CBT SOAL DATA 4== */
if(isset($_REQUEST['data_soal'])){	
include "../../config/server.php";
$sql = mysqli_query($GLOBALS["___mysqli_ston"], "truncate table cbt_soal");
$i = 1;

		include "../../config/server_pusat.php";
		$sqlcek = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_soal order by Urut");
		$baris = mysqli_num_rows($sqlcek);
				
		while($r=mysqli_fetch_array($sqlcek)){
					include "../../config/server.php";
							 $hasil= mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO cbt_soal (XNomerSoal, XKodeMapel, XKodeSoal, XTanya, XJawab1, XGambarJawab1, XJawab2,XGambarJawab2, 
							 XJawab3,XGambarJawab3, XJawab4,XGambarJawab4, XJawab5,XGambarJawab5, XAudioTanya, XVideoTanya, XGambarTanya, XKunciJawaban,XJenisSoal,XAcakSoal,
							 XAcakOpsi,XKategori,XAgama) 
							 VALUES ('$r[XNomerSoal]','$r[XKodeMapel]','$r[XKodeSoal]','$r[XTanya]','$r[XJawab1]','$r[XGambarJawab1]','$r[XJawab2]','$r[XGambarJawab2]',
							'$r[XJawab3]','$r[XGambarJawab3]','$r[XJawab4]','$r[XGambarJawab4]','$r[XJawab5]','$r[XGambarJawab5]','$r[XAudioTanya]',
							 '$r[XVideoTanya]','$r[XGambarTanya]','$r[XKunciJawaban]','$r[XJenisSoal]','$r[XAcakSoal]','$r[XAcakOpsi]','$r[XKategori]','$r[XAgama]')");
 
			// Calculate the percentation
			$percent = intval($i/$baris * 100)."%";

//		$percent = intval($i/$baris * 100)."%";
//			document.getElementById("information2").innerHTML="  Sikronisasi : DATA 4 ... <b>'.$i.'</b> dari <b>'. $baris.'</b> Selesai.";			

			// Javascript for updating the progress bar and information
			echo '<script language="javascript">
			document.getElementById("progress4").innerHTML="<div style=\"width:'.$percent.';background-image:url(images/pbar-ani1.gif);\">&nbsp;</div>";
		    document.getElementById("information4").innerHTML="  Download Berkas Soal <b>'.$i.'</b> row(s) of <b>'. $baris.'</b> ... '.$percent.'  completed.";			
			</script>';
		// This is for the buffer achieve the minimum size in order to flush data
			echo str_repeat(' ',1024*64);
		// Send output to browser immediately
			flush();
		// Tell user that the process is completed

		//}
				
		$i++;
		}}
		?>
		<script>document.getElementById("statusdata4").style.display="block";
        setTimeout(myFunction, 9000)
        </script>

  
<?php 		

/* === CBT MAPEL DATA 5== */

include "../../config/server.php";
if(isset($_REQUEST['data_mapel'])){
$sql = mysqli_query($GLOBALS["___mysqli_ston"], "truncate table cbt_mapel");
$i = 1;

		include "../../config/server_pusat.php";
		$sqlcek = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_mapel WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
		$baris = mysqli_num_rows($sqlcek);
		//echo "jumlah total paket data : $baris";
		
		while($r=mysqli_fetch_array($sqlcek)){
		//for ($i=1; $i<=$baris; $i++){
					include "../../config/server.php";
					//$query =  mysql_query("INSERT INTO cbt_mapel ( XKodeMapel, XNamaMapel,XPersenUH,XPersenUTS,XPersenUAS,XKKM,XMapelAgama) VALUES ('$r[XKodeMapel]', '$r[XNamaMapel]', '$r[XPersenUH]', '$r[XPersenUTS]', '$r[XPersenUAS]', '$r[XKKM]', '$r[XMapelAgama]')");
					$query =  mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO cbt_mapel ( XKodeMapel, XNamaMapel,XPersenUH,XPersenUTS,XPersenUAS,XKKM,XMapelAgama,XKodeSekolah) VALUES ('$r[XKodeMapel]', '$r[XNamaMapel]', '$r[XPersenUH]', '$r[XPersenUTS]', '$r[XPersenUAS]', '$r[XKKM]','$r[XMapelAgama]','$r[XKodeSekolah]')");
					
			$percent = intval($i/$baris * 100)."%";
//			document.getElementById("information2").innerHTML="  Sikronisasi : DATA 5 ... <b>'.$i.'</b> dari <b>'. $baris.'</b> Selesai.";			

			// Javascript for updating the progress bar and information
			echo '<script language="javascript">
			document.getElementById("progress5").innerHTML="<div style=\"width:'.$percent.';background-image:url(images/pbar-ani1.gif);\">&nbsp;</div>";
		    document.getElementById("information5").innerHTML="  Download Berkas Mata Pelajaran <b>'.$i.'</b> row(s) of <b>'. $baris.'</b> ... '.$percent.'  completed.";			
			</script>';
		// This is for the buffer achieve the minimum size in order to flush data
			echo str_repeat(' ',1024*64);
		// Send output to browser immediately
			flush();
		// Tell user that the process is completed
		
		$i++;
		}}	?>
		<script>document.getElementById("statusdata5").style.display="block";
        setTimeout(myFunction, 9000)
        </script>
	

<script src="../../../js/jquery.js"></script>


<?php
//////////////////////////////
/* Untuk sinkron harus diperhatikan ALAMAT pada $url = 'http://'.$PCSERVER.'/pusat/pictures/'.$filese;
/////////////////////////////

*/////// === DATA 6 : GAMBAR == /////////
if(isset($_REQUEST['data_gambar'])){
include "../../config/server.php";
$sql = mysqli_query($GLOBALS["___mysqli_ston"], "truncate table cbt_upload_file");
$i = 1;

		include "../../config/server_pusat.php";
		$sqlcek = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file order by Urut");
		$baris = mysqli_num_rows($sqlcek);
		//echo "jumlah total paket data : $baris";
		
		while($r=mysqli_fetch_array($sqlcek)){
		//for ($i=1; $i<=$baris; $i++){
					
					include "../../config/server.php";
							 $hasil= mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO cbt_upload_file (Urut, XNamaFile, XFolder) 
							 VALUES ('$r[Urut]','$r[XNamaFile]','$r[XFolder]')");
 
				
		$i++;
		}
	
include "../../config/server_pusat.php";
$sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file where XFolder ='pictures' group by XNamaFile");
$jum1 = mysqli_num_rows($sql1);
$i = 0;
while($r=mysqli_fetch_array($sql1)){
	if(!$r['XNamaFile']==''){
	$filese = "$r[XNamaFile]";	
$i++;
//echo "$i. file |$filese|<br>";
//$url = 'http://SMP-BINAKARYA/beesmart2/pictures/'.$filese; // working
//$file = fopen(dirname(__FILE__) . '/images/'.$filese, 'w+');
//$url = 'http://demo.cbtbeesmart.com/pictures/'.$filese; online
//$file = fopen('../../pictures/'.$filese, 'w+');

$url = 'http://'.$PCSERVER.'/pusat/pictures/'.$filese; // working
$file = fopen('../../pictures/'.$filese, 'w+');
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_TIMEOUT, 0); 
// Update as of PHP 5.4 array() can be written []
curl_setopt_array($curl, [
    CURLOPT_URL            => $url,
//  CURLOPT_BINARYTRANSFER => 1, --- No effect from PHP 5.1.3
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FILE           => $file,
    CURLOPT_TIMEOUT        => 50,
    CURLOPT_USERAGENT      => 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)'
]);

$response = curl_exec($curl);

if($response === false) {
    // Update as of PHP 5.3 use of Namespaces Exception() becomes \Exception()
    throw new \Exception('Curl error: ' . curl_error($curl));
}

$response; // Do something with the response.
$percent = intval($i/$jum1 * 100)."%";
// Javascript for updating the progress bar and information
			echo '<script language="javascript">
			document.getElementById("progressG").innerHTML="<div style=\"width:'.$percent.';background-image:url(images/pbar-ani1.gif);\">&nbsp;</div>";
		    document.getElementById("informationG").innerHTML="  Download Berkas Gambar Soal <b>'.$i.'</b> row(s) of <b>'. $jum1.'</b> ... '.$percent.'  completed.";			
			</script>';
		// This is for the buffer achieve the minimum size in order to flush data
			echo str_repeat(' ',1024*64);
		// Send output to browser immediately
			flush();

	}
}
}
		?>
		<script>document.getElementById("statusdataG").style.display="block";
        setTimeout(myFunction, 9000)
        </script>

       
<?php 	
//////////////////////////////
/* Untuk sinkron harus diperhatikan ALAMAT pada $url = 'http://'.$PCSERVER.'/pusat/pictures/'.$filese;
/////////////////////////////

*/////// === DATA 7 : AUDIO == /////////
	
if(isset($_REQUEST['data_audio'])){

include "../../config/server_pusat.php";	
$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file where XFolder ='audio' group by XNamaFile");
$jum2 = mysqli_num_rows($sql2);

$i = 0;
while($r=mysqli_fetch_array($sql2)){
	if(!$r['XNamaFile']==''){
	$filese = "$r[XNamaFile]";		
	
$i++;
//echo "$i. file |$filese|<br>";

//$filese = "soal1.jpg";
//$url = 'http://SMP-BINAKARYA/beesmart2/pictures/'.$filese; // working
//$file = fopen(dirname(__FILE__) . '/images/'.$filese, 'w+');
$url = 'http://'.$PCSERVER.'/pusat/audio/'.$filese; // working
$file = fopen('../../audio/'.$filese, 'w+');
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_TIMEOUT, 0); 
// Update as of PHP 5.4 array() can be written []
curl_setopt_array($curl, [
    CURLOPT_URL            => $url,
//  CURLOPT_BINARYTRANSFER => 1, --- No effect from PHP 5.1.3
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FILE           => $file,
    CURLOPT_TIMEOUT        => 50,
    CURLOPT_USERAGENT      => 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)'
]);

$response = curl_exec($curl);

if($response === false) {
    // Update as of PHP 5.3 use of Namespaces Exception() becomes \Exception()
    throw new \Exception('Curl error: ' . curl_error($curl));
}

$response; // Do something with the response.
$percent = intval($i/$jum2 * 100)."%";
// Javascript for updating the progress bar and information
			echo '<script language="javascript">
			document.getElementById("progressA").innerHTML="<div style=\"width:'.$percent.';background-image:url(images/pbar-ani1.gif);\">&nbsp;</div>";
		    document.getElementById("informationA").innerHTML="  Download Berkas Audio Soal <b>'.$i.'</b> row(s) of <b>'. $jum2.'</b> ... '.$percent.'  completed.";			
			</script>';
		// This is for the buffer achieve the minimum size in order to flush data
			echo str_repeat(' ',1024*64);
		// Send output to browser immediately
			flush();

	}
}
}
		?>
		<script>document.getElementById("statusdataA").style.display="block";
        setTimeout(myFunction, 9000)
        </script>

       
<?php 		
//////////////////////////////
/* Untuk sinkron harus diperhatikan ALAMAT pada $url = 'http://'.$PCSERVER.'/pusat/pictures/'.$filese;
/////////////////////////////

/////// === DATA 8 : VIDEO == /////////

*/
include "../../config/server_pusat.php";
if(isset($_REQUEST['data_video'])){
$sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file where XFolder ='video' group by XNamaFile");
$jum3 = mysqli_num_rows($sql3);
$i = 0;
while($r=mysqli_fetch_array($sql3)){
	if(!$r['XNamaFile']==''){
	$filese = "$r[XNamaFile]";		
$i++;

//echo "$i. file |$filese|<br>";

//$filese = "soal1.jpg";
//$url = 'http://SMP-BINAKARYA/beesmart2/pictures/'.$filese; // working
//$file = fopen(dirname(__FILE__) . '/images/'.$filese, 'w+');
$url = 'http://'.$PCSERVER.'/pusat/video/'.$filese; // working
$file = fopen('../../video/'.$filese, 'w+');
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_TIMEOUT, 0); 
// Update as of PHP 5.4 array() can be written []
curl_setopt_array($curl, [
    CURLOPT_URL            => $url,
//  CURLOPT_BINARYTRANSFER => 1, --- No effect from PHP 5.1.3
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FILE           => $file,
    CURLOPT_TIMEOUT        => 50,
    CURLOPT_USERAGENT      => 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)'
]);

$response = curl_exec($curl);

if($response === false) {
    // Update as of PHP 5.3 use of Namespaces Exception() becomes \Exception()
    throw new \Exception('Curl error: ' . curl_error($curl));
}

$response; // Do something with the response.
$percent = intval($i/$jum3 * 100)."%";
// Javascript for updating the progress bar and information
			echo '<script language="javascript">
			document.getElementById("progressV").innerHTML="<div style=\"width:'.$percent.';background-image:url(images/pbar-ani1.gif);\">&nbsp;</div>";
		    document.getElementById("informationV").innerHTML="  Download Berkas Audio Soal <b>'.$i.'</b> row(s) of <b>'. $jum3.'</b> ... '.$percent.'  completed.";			
			</script>';
		// This is for the buffer achieve the minimum size in order to flush data
			echo str_repeat(' ',1024*64);
		// Send output to browser immediately
			flush();

	}
}
}
		?>
		<script>document.getElementById("statusdataV").style.display="block";
        setTimeout(myFunction, 9000)
        </script>

       
<?php 		








//End of Copying		
}


?>
<?php
include "../../config/server_pusat.php";
//DATA 1
$sqlsw = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_siswa WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
$jumsw = mysqli_num_rows($sqlsw);
//DATA 2
$sqlk = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_kelas WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
$jumk = mysqli_num_rows($sqlk);
//DATA 3
$sqlp = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_paketsoal WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
$jump = mysqli_num_rows($sqlp);
//DATA 4
$sqls = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_soal");
$jums = mysqli_num_rows($sqls);
//DATA 5
$sqlm = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_mapel WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
$jumm = mysqli_num_rows($sqlm);
//DATA 6
$sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file where XFolder ='pictures' group by XNamaFile");
$jum1 = mysqli_num_rows($sql1);
//DATA 7
$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file where XFolder ='audio' group by XNamaFile");
$jum2 = mysqli_num_rows($sql2);
//DATA 8
$sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file where XFolder ='video' group by XNamaFile");
$jum3 = mysqli_num_rows($sql3);

$jum3 = mysqli_num_rows($sql3);
?>

<?php
include "../../config/server.php";
//DATA 1
$sqlsw_ = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_siswa WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
$jumsw_ = mysqli_num_rows($sqlsw_);
//DATA 2
$sqlk_ = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_kelas WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
$jumk_ = mysqli_num_rows($sqlk_);
//DATA 3
$sqlp_ = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_paketsoal WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
$jump_ = mysqli_num_rows($sqlp_);
//DATA 4
$sqls_ = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_soal");
$jums_ = mysqli_num_rows($sqls_);
//DATA 5
$sqlm_ = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_mapel WHERE XKodeSekolah='$serverid' or XKodeSekolah='ALL'");
$jumm_ = mysqli_num_rows($sqlm_);
//DATA 6
$sql1_ = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file where XFolder ='pictures' group by XNamaFile");
$jum1_ = mysqli_num_rows($sql1_);
//DATA 7
$sql2_ = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file where XFolder ='audio' group by XNamaFile");
$jum2_ = mysqli_num_rows($sql2_);
//DATA 8
$sql3_ = mysqli_query($GLOBALS["___mysqli_ston"], "select * from cbt_upload_file where XFolder ='video' group by XNamaFile");
$jum3_ = mysqli_num_rows($sql3_);
?>
<div class="modal fade" id="myInfoz" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title page-label" align="left">Data Hasil Sinkron</h1>
                </div>
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="wysiwyg-content">
                        <table width="565">
						<tr>
	                                    <th width="15%" height="40" align="left" style="border-bottom:thin solid #D1CABC">DATA 1 : Siswa</th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jumsw; ?></th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jumsw_?> </th>
                          </tr>
						  <tr>
	                                    <th width="15%" height="40" align="left" style="border-bottom:thin solid #D1CABC">DATA 2 : Kelas</th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jumk; ?></th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jumk_?> </th>
                          </tr>
						<tr>
	                                    <th width="15%" height="40" align="left" style="border-bottom:thin solid #D1CABC">DATA 3 : Paket Soal</th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jump; ?></th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jump_?> </th>
                          </tr>
						<tr>
	                                    <th width="15%" height="40" align="left" style="border-bottom:thin solid #D1CABC">DATA 4 : Soal</th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jums; ?></th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jums_; ?></th>
                          </tr>
						<tr>
	                                    <th width="15%" height="40" align="left" style="border-bottom:thin solid #D1CABC">DATA 5 : Mapel</th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jumm; ?></th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jumm_; ?></th>
                          </tr>
						<tr>
	                                    <th width="15%" height="40" align="left" style="border-bottom:thin solid #D1CABC">DATA 6 : Gambar</th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jum1;?></th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jum1_;?></th>
                          </tr>
						<tr>
	                                    <th width="15%" height="40" align="left" style="border-bottom:thin solid #D1CABC">DATA 7 : Audio</th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jum2;?></th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jum2_;?></th>
                          </tr>
						<tr>
	                                    <th width="15%" height="40" align="left" style="border-bottom:thin solid #D1CABC">DATA 8 : Video</th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jum3;?> </th>
										<th width="15%" height="40" align="center" style="border-bottom:thin solid #D1CABC"><?php echo $jum3_;?> </th>
                          </tr>
						</table>
						</div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-offset-4 col-xs-9">                        
                           <button type="submit" class="btn btn-default btn-sm" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Close</button>
                        </div>
                    </div>
                </div></form>
            </div>
        </div>
    </div>
</div>
<script src="../../../js/jquery.js"></script>


