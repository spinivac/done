<?php  


if($_POST){



include("baglanti.php");
$ilid = $_POST["il"];
$query00 = $baglan->prepare("SELECT * FROM ilce where ilce_no=".$ilid."  ");
$query00->execute();
while ($cikti = $query00->fetch(PDO::FETCH_ASSOC)) {
	$id = $cikti["ilce_no"];
	$name = $cikti["isim"];
	echo "<option value='".$id."' >".$name."</option>";
	echo "<optoin>".$ilid."</option>";
}
}

else{
	header("Location: list.php");
}

?>