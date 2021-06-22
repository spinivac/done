<!DOCTYPE html>
<html>
<head>
	<title>Notlar</title>
	<?php
	error_reporting(E_ALL & ~E_NOTICE);
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--MD BOOTSTRAP cdn-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet"/>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script>
	<!--MD BOOTSTRAP cdn-->
	<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
	<!--Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.min.js"></script>

	<!--Bootstrap cdn-->

	
	<style type="text/css">
		a[style*="padding:10px 25px;"]{
			display: none;
		} 

		body{
			font-family: 'Roboto', sans-serif;
		}
		.ck{
			height: 420px;
		}
		.form-outline{
			border: 1px solid grey !important;
			border-radius: 5px;
			background-color: #fff
		}
		.form-label{
			background-color: #fff;
		}
		#logo{
			display: none;
		}
		.add-plus{
			font-size: 14pt !important;
			padding: 10px !important;
			background-color: red;
		}
		#inputState{
			width: 10%;float: right;border: 1px solid grey;
		}
		

	</style>

</head>
<body>

	<?php 

	include("conn.php");

	?>

	<!-- nav -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Kayit et</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="list.php">Kayitlar</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- nav -->

	<br><br>

	<?php  

	include("baglanti.php");
	$sorgu = $baglan->prepare("SELECT * FROM il");
	$sorgu->execute();

	 
	?>

	<!-- form -->
	<form method="post" autocomplete="off" id="notes" name="notes">
		<div class="container">

			<div class="form-outline">
				<input type="text" id="firma_adi" class="form-control" name="firma_adi"  required> <!-- firma_adi -->
				<label class="form-label" for="firma_adi">Firma Adi:</label>

			</div><br>

			<select class="form-select" style="width: 20%;float: left;" id="iller" name="il"> <!-- il -->
				<option selected>il</option>
				<?php  

				while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
					$id = $cikti["il_no"];
					$name = $cikti["isim"];
					echo '<option value="'.$id.'">'.$name.'</option>';
				}

				?>
			</select>



			<select class="form-select" style="width: 20%;float: left;" id="ilceler" name="ilce"> <!-- ilce -->
				<option>Ilce</option>
			</select>

			<select class="form-select" style="width: 20%;float: left;" name="id_selector"> <!-- ilce -->
				<option value="1" disabled selected>Firma ID</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
			</select>

			<br><br><br>


			<select class="form-select" name="satis_temsilcisi"> <!-- satis_temsilcisi -->
				<option value="Seckin PAYZINER">Seckin PAYZINER</option>
				<option value="Selahaddin KADE">Selahaddin KADE</option>
				<option value="Ebru">Ebru</option>
				<option value="Fehmi">Fehmi</option>
				<option value="Melik Mustafa AKOZ">Melik Mustafa AKOZEL</option>
			</select>


			<br>


			<select class="form-select" name="verilen_urun"> <!-- verilen_urun -->
				<option value="Kart Okuyucu">Kart Okuyucu</option>
				<option value="SD Kart">SD Kart</option>
				<option value="Kart">Kart</option>
				<option value="QR">QR</option>
				<option value="Bileklik">Bileklik</option>
				<option value="Dolap">Dolap</option>
				<option value="Standart Turnike">Standart Turnike</option>
				<option value="Kompakt Turnike">Kompakt Turnike</option>
				<option value="Atlas Turnike">Atlas Turnike</option>
				<option value="VIP Turkine">VIP Turkine</option>
				<option value="Monitorlu Donusum">Monitorlu Donusum</option>
				<option value="Dokunmatik Kiosk">Dokunmatik Kiosk</option>
				<option value="Normal Kiosk">Normal Kiosk</option>
				<option value="Yazilim">Yazilim</option>
				<option value="Sunucu">Sunucu</option>
				<option value="Kapi Sistemleri">Kapi Sistemleri</option>
			</select>


			<br>


			<div class="form-outline">
				<input type="number" id="urun_adet" class="form-control" name="urun_adet" min="0" oninput="this.value = Math.abs(this.value)" required><!-- urun_adet -->
				<label class="form-label" for="urun_adet">Urun Adet:</label>
			</div>


			<br>


			<div class="form-outline">
				<input type="date" id="kurulum_tarihi" class="form-control" name="kurulum_tarihi"    required><!-- kurulum_tarihi -->
				<label class="form-label" for="kurulum_tarihi">Kurulum Tarihi:</label>
			</div>

			<br>
			
			
			<div class="form-outline">
				<input type="number" id="odeme_tutari" class="form-control" name="odeme_tutari" min="1" oninput="this.value = Math.abs(this.value)" required><!-- odeme_tutari -->
				<label class="form-label" for="odeme_tutari">Odeme Tutari:</label>
			</div>

			<br>


			<div class="form-outline">
				<input type="number" id="odenen_tutar" class="form-control" name="odenen_tutar"   oninput="this.value = Math.abs(this.value)" required><!-- odenen_tutar -->
				<label class="form-label" for="odenen_tutar">Odenen Tutar:</label>
			</div>

			<br>


			<button type="submit" class="btn btn-success">Kaydet</button>

		</div>
	</form>	



	<script type="text/javascript">

   		 	$(document).ready(function(){
   		 		$("#iller").change(function(){
   		 			var deger = $(this).val();
   		 			$.post("post.php",{il:deger},function(a){
   		 				$('#ilceler').append("<option>Merkez</option>");	
   		 				$('#ilceler').append(a);
   		 			})
   		 		});

   		 		document.getElementById("kurulum_tarihi").value = "2021-07-09";
   		 	});


   		 	$("#odenen_tutar").change(function(){
   		 		var odenen_tutar = $('#odenen_tutar').val();
   		 		var odeme_tutari = $('#odeme_tutari').val();
   		 		if (odenen_tutar > odeme_tutari) {
   		 			$("#odenen_tutar").val("0");
   		 		}
   		 		else{
   		 			$("#odenen_tutar").val(odenen_tutar);
   		 			$("#odeme_tutari").val(odeme_tutari);
   		 		}


   		 	});


   		 </script>



	<?php  
	include("conn.php");


	

 	$table = "maksioffline2";
 


	if ($_POST) {
 		
		echo $yeni;

	}


  
if ($_POST) {
	extract($_POST);
	$id_selector = 1;
	if (isset($firma_adi)&& isset($il)&& isset($ilce)&& isset($satis_temsilcisi)&& isset($verilen_urun)&& isset($urun_adet)&& isset($kurulum_tarihi)&& isset($odeme_tutari)&& isset($odenen_tutar) ) {
		$new_id = $id_selector;
		$yeni = $firma_adi.$new_id."_".$il;

		$bul = array("+", "-", "/","*","?", "!", ",", ";", ".", ":", "=", "&");
	$new_firma_adi = str_replace($bul, "", $yeni,$say);
	$bul = array(" ");
	$table = str_replace($bul, "_", $new_firma_adi,$say);
		
		$result = $conn->query("SHOW TABLES LIKE '{$table}'");
	if( $result->num_rows == 1 ){
		echo "var";
		return TRUE;
	}
	else{
		echo "yok";
		try {
    			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
    			$sql ="CREATE table $table(
    			ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
    			firma_adi VARCHAR( 50 ) NOT NULL, 
    			il VARCHAR( 50 ) NOT NULL,
    			ilce VARCHAR( 50 ) NOT NULL,
    			satis_temsilcisi VARCHAR( 50 ) NOT NULL,
    			verilen_urun VARCHAR( 50 ) NOT NULL,
    			urun_adet VARCHAR ( 50 ) NOT NULL,
    			kurulum_tarihi DATE  NOT NULL,  
    			odeme_tutari VARCHAR( 50 ) NOT NULL, 
    			odenen_tutar VARCHAR( 50 ) NOT NULL);" ;
    			$conn->exec($sql);
    			print("Created $table Table.\n");
    			$query1 = $conn->prepare("INSERT INTO $table (firma_adi,il,ilce,satis_temsilcisi,verilen_urun,urun_adet,kurulum_tarihi,odeme_tutari,odenen_tutar) VALUES(?,?,?,?,?,?,?,?,?)");
   		 		$query1->bindParam(1, $table, PDO::PARAM_STR);
   		 		$query1->bindParam(2, $il, PDO::PARAM_STR);
   		 		$query1->bindParam(3, $ilce, PDO::PARAM_STR);
   		 		$query1->bindParam(4, $satis_temsilcisi, PDO::PARAM_STR);
   		 		$query1->bindParam(5, $verilen_urun, PDO::PARAM_STR);
   		 		$query1->bindParam(6, $urun_adet, PDO::PARAM_STR);
   		 		$query1->bindParam(7, $kurulum_tarihi, PDO::PARAM_STR);
   		 		$query1->bindParam(8, $odeme_tutari, PDO::PARAM_STR);
   		 		$query1->bindParam(9, $odenen_tutar, PDO::PARAM_STR);
   		 		$query1->execute();
   		 		echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";

    		}
    		catch(PDOException $e) {
   		 		/*echo $e->getMessage();*/     		 		$sorgu = $conn->prepare("INSERT INTO $table (firma_adi,il,ilce,satis_temsilcisi,verilen_urun,urun_adet,kurulum_tarihi,odeme_tutari,odenen_tutar) VALUES(?,?,?,?,?,?,?,?,?)");
   		 		$sorgu->bindParam(1, $table, PDO::PARAM_STR);
   		 		$sorgu->bindParam(2, $il, PDO::PARAM_STR);
   		 		$sorgu->bindParam(3, $ilce, PDO::PARAM_STR);
   		 		$sorgu->bindParam(4, $satis_temsilcisi, PDO::PARAM_STR);
   		 		$sorgu->bindParam(5, $verilen_urun, PDO::PARAM_STR);
   		 		$sorgu->bindParam(6, $urun_adet, PDO::PARAM_STR);
   		 		$sorgu->bindParam(7, $kurulum_tarihi, PDO::PARAM_STR);
   		 		$sorgu->bindParam(8, $odeme_tutari, PDO::PARAM_STR);
   		 		$sorgu->bindParam(9, $odenen_tutar, PDO::PARAM_STR);
   		 		$sorgu->execute();

   		 		echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";
   		 	}
   		 	return FALSE;
   		 }

	}
}


 







   		 ?>




   		 




   		</body>
   		</html>