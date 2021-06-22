<?php  

include("baglanti.php");
if($_POST){


$il = $_POST["il"];
$sorgu1 = $baglan->prepare("SELECT * FROM ilce where il_no=".$il."  ");
$sorgu1->execute();

while ($cikti1 = $sorgu1->fetch(PDO::FETCH_ASSOC)) {
	$isim = $cikti1["isim"];
	echo '<option name="ilce" value="'.$isim.'">'.$isim.'</option>';
}
}

else{
	header("Location: list.php");
}

?>