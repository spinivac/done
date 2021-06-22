<!DOCTYPE html>
<html>

<head>
	<title>Notlar</title>
	<?php
	error_reporting(E_ALL & ~E_NOTICE);
	?>
	<!--MD BOOTSTRAP cdn-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script>
	<!--MD BOOTSTRAP cdn-->
	<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

	<!--Bootstrap CDN -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.min.js"></script>
	<!--Bootstrap cdn-->


	<style type="text/css">
		body {
			font-family: 'Roboto', sans-serif;
			background-color: #e8ecef;
		}

		.ck {
			height: 420px;
		}

		.form-outline {
			border: 1px solid grey !important;
			border-radius: 5px;
			background-color: #fff
		}

		.form-label {
			background-color: #fff;
		}

		#logo {
			display: none;
		}

		.add-plus {
			font-size: 14pt !important;
			padding: 10px !important;
			background-color: red;
		}

		#inputState {
			width: 10%;
			float: right;
			border: 1px solid grey;
		}

		.container-select {
			padding: 20px 10px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			background-color: #c9c7c7;

		}

		.container-settings {
			padding: 20px 20px;
			background-color: #c9c7c7;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
		}

		#query_alert {
			padding: 10px 10px;
			background-color: #d9534f;
			color: #fff;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
		}

		.fa-times {
			float: right;
			margin: 0 20px 0 0;
			font-size: 27px;
			cursor: pointer;
		}

		.fas {
			font-size: 23px;
			padding: 0 5px;
			cursor: pointer;
		}

		a {
			color: #111;
		}

		th {
			text-align: center;
		}

		.change_data {
			text-align: center;
		}

		@media screen and (min-width: 676px) {
			.modal-dialog {
				max-width: 1500px;
				/* New width for default modal */
			}
		}

		table {
			border: 1px solid #111 !important;
		}

		.il .ilce {
			display: none !important;
		}
	</style>

	<script language="JavaScript" type="text/javascript">
		function checkDelete() {
			return confirm('Are you sure?');
		}
	</script>

</head>

<body>

	<!-- Footer -->
	<!--
	<footer class="bg-dark text-center text-white" style="padding: 20px 40px;position: absolute;bottom: 0px;width: 100%">
		<div class="container">
			Maksisoft 2021 © Tüm haklar saklıdır.
		</div>
	</footer>-->
	<!-- Footer -->





	<?php

	include("conn.php");



	include("baglanti.php");
	$sorgu33 = $baglan->prepare("SELECT * FROM il");
	$sorgu33->execute();




	?>

	<!-- nav -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Kayit Et</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="list.php">Kayitlar</a>
				</li>
			</ul>
			<form method="post" id="ilselect" class="form-inline">
				<!--
			<select class="form-select" style="width: 202px;float: left;margin-right:20px" id="iller" name="il"> 
				<option selected>il</option>
				<?php

				while ($cikti33 = $sorgu33->fetch(PDO::FETCH_ASSOC)) {
					$id = $cikti33["il_no"];
					$name = $cikti33["isim"];
					echo '<option value="' . $id . '">' . $name . '</option>';
				}

				?>
			</select>
			</form>
-->

				<form class="form-inline" method="post">
					<input class="form-control mr-sm-2" type="search" placeholder="ara" aria-label="ara" name="ara">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
		</div>
	</nav>
	<!-- nav -->

	<div class="container-fluid">
		<div class="jumbotron">
			<?php
			include("conn.php");


			$result = $conn->query("SHOW TABLES");

			while ($row = $result->fetch(PDO::FETCH_NUM)) {
				$all_tables =  $row[0];
				$metin = str_replace("_", " ", $all_tables);
				$metin = preg_replace('/[0-9]+/', '', $metin);
				if (!$_POST) {
					echo '
				<table class="table ' . $all_tables . ' ">
				<thead class="thead-dark">
				<tr>
				<th scope="col" colspan="9"><b style="margin-top:30px !important">' . strtoupper($metin) . '</b>

				</th>
				</tr>
				<tr>
				<th scope="col">il / ilce</th>
				<th scope="col">Urun</th>
				<th scope="col">Urun Adet</th>
				<th scope="col">Satis Temsilcisi</th>
				<th scope="col">Kurulum Tarihi</th>
				<th scope="col">Odeme Tutari</th>
				<th scope="col">Odenen Tutar</th>
				<th scope="col">Kalan Tutar</th>
				<th scope="col">Duzenle</th>
				</tr>
				</thead>			
				';
				}
				$db = $conn->query("SELECT * FROM $all_tables");

				$oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi
				foreach ($oku as $row1) {
					extract($row1);
					$kalan_tutar = $odeme_tutari - $odenen_tutar;
					include("baglanti.php");
					$konu = $baglan->prepare("SELECT * FROM il WHERE il_no=" . $il . "");
					$konu->execute(array());
					$x = $konu->fetchALL(PDO::FETCH_ASSOC);

					foreach ($x as $m) {
						$yeni_il = $m["isim"];





						if ($_POST) {
							extract($_POST);

							if (isset($il)) {
								/* here */
							}





							if (isset($ara)) {


								if (preg_match('~[0-9]+~', $ara)) {/* if sayi */
									/*
										$words = explode("_", $text);
										echo $lastnum = (int)array_pop($words);*/

									$QUERY = $conn->prepare("show tables like '%" . $ara . "%'");
									$QUERY->execute();

									while ($output = $QUERY->fetch(PDO::FETCH_ASSOC)) {
										extract($output);

										$new_r = implode($output);
										$metin1 = str_replace("_", " ", $new_r);
										$metin1 = preg_replace('/[0-9]+/', '', $metin);

										$words = explode("_", $new_r);
										$numdata = $lastnum = (int)array_pop($words);

										if ($numdata == $ara) {
											$metin12 = str_replace("_", " ", $new_r);
											$metin123 = preg_replace('/[0-9]+/', '', $metin12);

											echo '<table class="table ' . $new_r . ' ">
													<thead class="thead-dark">
													<tr>
													<th scope="col" colspan="9"><b style="margin-top:30px !important"></b>
													' . strtoupper($metin123) . '
													</th>
													</tr>
													<tr>
													<th scope="col">il / ilce</th>
													<th scope="col">Urun</th>
													<th scope="col">Urun Adet</th>
													<th scope="col">Satis Temsilcisi</th>
													<th scope="col">Kurulum Tarihi</th>
													<th scope="col">Odeme Tutari</th>
													<th scope="col">Odenen Tutar</th>
													<th scope="col">Kalan Tutar</th>
													<th scope="col">Duzenle</th>
													</tr>
													</thead>';
											$sorma = $conn->prepare("SELECT * FROM $new_r");
											$sorma->execute();





											while ($cikma = $sorma->fetch(PDO::FETCH_ASSOC)) {
												extract($cikma);

												$onu = $baglan->prepare("SELECT * FROM il WHERE il_no=" . $il . "");
												$onu->execute(array());
												$ex = $onu->fetchALL(PDO::FETCH_ASSOC);

												foreach ($ex as $em) {
													$yeni_ill = $em["isim"];

													echo '
									
												<tbody>
												<tr>
												<th scope="col">' . $yeni_ill . ' / ' . $ilce . ' </th>
												<th scope="col">' . $verilen_urun . '  </th>
												<th scope="col">' . $urun_adet . '</th>
												<th scope="col">' . $satis_temsilcisi . '</th>
												<th scope="col">' . $kurulum_tarihi . '</th>
												<th scope="col">' . $odeme_tutari . ' ₺</th>
												<th scope="col">' . $odenen_tutar . ' ₺</th>
												<th scope="col">12₺</th>
												<th scope="col" style="border: 1px solid #111;text-align:center">
									
												<i class="fas fa-edit" data-toggle="modal" data-target="#' . $firma_adi . $ID . '"></i>
												<a href= "delete.php?id=' . $ID . '&firma_adi=' . $firma_adi . '" ><i class="fas fa-trash-alt"></i></a>
												</th>
												</tr>
												</tbody>	
									
												';
												}
											}
										}
									}
								} else {/* duz text*/

									$sorgu = $conn->prepare("show tables like '%" . $ara . "%'");
									$sorgu->execute();

									while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
										extract($cikti);
										$new_r = implode($cikti);
										$metin1 = str_replace("_", " ", $new_r);
										$metin1 = preg_replace('/[0-9]+/', '', $metin);

										$metin12 = str_replace("_", " ", $new_r);
										$metin123 = preg_replace('/[0-9]+/', '', $metin12);

										echo '<table class="table ' . $new_r . ' ">
													<thead class="thead-dark">
													<tr>
													<th scope="col" colspan="9"><b style="margin-top:30px !important"></b>
													' . strtoupper($metin123) . '
													</th>
													</tr>
													<tr>
													<th scope="col">il / ilce</th>
													<th scope="col">Urun</th>
													<th scope="col">Urun Adet</th>
													<th scope="col">Satis Temsilcisi</th>
													<th scope="col">Kurulum Tarihi</th>
													<th scope="col">Odeme Tutari</th>
													<th scope="col">Odenen Tutar</th>
													<th scope="col">Kalan Tutar</th>
													<th scope="col">Duzenle</th>
													</tr>
													</thead>';
										$sorma = $conn->prepare("SELECT * FROM $new_r");
										$sorma->execute();

										while ($cikma = $sorma->fetch(PDO::FETCH_ASSOC)) {
											extract($cikma);
											echo '
									
												<tbody>
												<tr>
												<th scope="col">Izmir/karsiyaka</th>
												<th scope="col">' . $verilen_urun . '  </th>
												<th scope="col">' . $urun_adet . '</th>
												<th scope="col">' . $satis_temsilcisi . '</th>
												<th scope="col">' . $kurulum_tarihi . '</th>
												<th scope="col">' . $odeme_tutari . ' ₺</th>
												<th scope="col">' . $odenen_tutar . ' ₺</th>
												<th scope="col">12₺</th>
												<th scope="col" style="border: 1px solid #111;text-align:center">
									
												<i class="fas fa-edit" data-toggle="modal" data-target="#' . $firma_adi . $ID . '"></i>
												<a href= "delete.php?id=' . $ID . '&firma_adi=' . $firma_adi . '" onclick="return confirm("Are you sure?")" ><i class="fas fa-trash-alt"></i></a>
												</th>
												</tr>
												</tbody>	
									
												';
										}
									}
								}
							}
							return;
						}

						$yeni_tarih = date("Y-m-d", strtotime(date("Y-m-d", strtotime($kurulum_tarihi)) . " + 2 year"));
						$today = date("Y-m-d");

						echo '

  							<tbody>
  							<tr>
  							<th scope="col">' . $yeni_il . '/  ' . $ilce . '</th>
  							<th scope="col">' . $verilen_urun . '  </th>
  							<th scope="col">' . $urun_adet . '</th>
  							<th scope="col">' . $satis_temsilcisi . '</th>
  							<th scope="col">';

						if ($today > $yeni_tarih) {
							echo '<b style="color:red">' . $kurulum_tarihi . '</b>';
						} else {
							echo '<b style="color:green">' . $kurulum_tarihi . '</b>';
						}

						echo ' 

							</th>
  							<th scope="col">' . $odeme_tutari . ' ₺</th>
  							<th scope="col">' . $odenen_tutar . ' ₺</th>
  							<th scope="col">'

							. $kalan_tutar .




							'  ₺</th>
  							<th scope="col" style="border: 1px solid #111;text-align:center">

  							<i class="fas fa-edit" data-toggle="modal" data-target="#' . $firma_adi . $ID . '"></i>
  							<a class="delete-link" href= "delete.php?id=' . $ID . '&firma_adi=' . $firma_adi . '" ><i class="fas fa-trash-alt"></i></a>
  							</th>
  							</tr>




  							<!-- Modal -->
  							<div class="modal fade" id="' . $firma_adi . $ID . '" tabindex="-1" role="dialog" aria-labelledby="' . $firma_adi . $ID . '" aria-hidden="true">
  							<div class="modal-dialog" role="document">
  							<div class="modal-content">
  							<div class="modal-header">
  							<h5 class="modal-title" id="' . $firma_adi . $ID . '">Modal title</h5>
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  							<span aria-hidden="true">&times;</span>
  							</button>
  							</div>
  							<div class="modal-body">

  							<form method="get" name="edit_form" action="edit.php">
  							<input type="text" value="' . $firma_adi . '" name="firma_adi" style="visibility:hidden">
  							<input type="text" value="' . $ID . '" name="id" style="visibility:hidden">
  							<select class="form-select" name="edit_satis_temsilcisi"> <!-- satis_temsilcisi -->
  							<option value="Seckin PAYZINER">Seckin PAYZINER</option>
  							<option value="Selahaddin KADE">Selahaddin KADE</option>
  							<option value="Ebru">Ebru</option>
  							<option value="Fehmi">Fehmi</option>
  							<option value="Melik Mustafa AKOZ">Melik Mustafa AKOZEL</option>
  							</select>
  							<div id="help" class="form-text">Satis Temsilcisi or: Melik Mustafa AKOZ</div>
  							<br>


  							<select class="form-select" name="edit_verilen_urun"> <!-- verilen_urun -->
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
  							<div id="help" class="form-text">Verilen Urun or: SD Kart</div>
  							<br>

  							<div class="form-outline">
  							<input type="date" id="edit_kurulum_tarihi" class="form-control" name="edit_kurulum_tarihi" value=' . $kurulum_tarihi . ' required>
  							<label class="form-label" for="edit_kurulum_tarihi">Kurulum Tarihi:</label>
  							</div><br>

  							<div class="form-outline">
  							<input type="number" id="edit_urun_adet" class="form-control" name="edit_urun_adet" value=' . $urun_adet . ' required>
  							<label class="form-label" for="edit_urun_adet">Urun Adet:</label>
  							</div>
  							<br>

  							<div class="form-outline">
  							<input type="number" id="edit_odeme_tutari" class="form-control" name="edit_odeme_tutari" value=' . $odeme_tutari . ' required>
  							<label class="form-label" for="edit_odeme_tutari">Odeme Tutari</label>
  							</div>
  							<br>

  							<div class="form-outline">
  							<input type="number" id="edit_odenen_tutar" class="form-control" name="edit_odenen_tutar" value=' . $odenen_tutar . ' required>
  							<label class="form-label" for="edit_odenen_tutar">Odenen Tutar</label>
  							</div>
  							<br>




  							</div>
  							<div class="modal-footer">
  							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  							<button type="submit" class="btn btn-primary">Degisiklikleri Kaydet</button>
  							</form>
  							</div>
  							</div>
  							</div>
  							</div>



  							';
					}
				}
				echo "<br>";
				$all_tables = preg_replace('/[0-9]+/', '', $all_tables);


				$all_tables = str_replace("_", " ", $all_tables);
			}




			?>



<script type="text/javascript">
    $('.delete-link').on('click', function () {
        return confirm('Silmek Istediginize Emin Misiniz?');
    });
</script>

			<!-- Button trigger modal -->




			</tbody>
			</table>

		</div>
	</div>

	<script type='text/javascript'>
		$(document).ready(function() {
			$('#iller').change(function() {
				// Call submit() method on <form id='myform'>
				$('#ilselect').submit();
			});
		});
	</script>

	<!-- Button trigger modal -->







	<script>
		$(document).ready(function() {
			$('input[type="checkbox"]').click(function() {
				var sayi = $('#myCheck:checked').length;
				$("#count").html(sayi + "  Oge Secildi");
				var deger = $('#myCheck').val();
				alert(deger);

			});
		});
	</script>


	<script>
		$("#checkAl").click(function() {
			$('input:checkbox').not(this).prop('checked', this.checked);
		});
	</script>








</body>

</html>