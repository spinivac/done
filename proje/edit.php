<?php  
	extract($_GET);
	echo $id."<br>";
	echo $firma_adi."<br>";
	echo $edit_satis_temsilcisi."<br>";
	echo $edit_verilen_urun."<br>";
	echo $edit_kurulum_tarihi."<br>";
	echo $edit_urun_adet."<br>";
	echo $edit_odeme_tutari."<br>";
	echo $edit_odenen_tutar."<br>";
	include("conn.php");
  

    $ekle =$conn->exec("UPDATE $firma_adi SET satis_temsilcisi='$edit_satis_temsilcisi', verilen_urun='$edit_verilen_urun' , urun_adet='$edit_urun_adet', kurulum_tarihi='$edit_kurulum_tarihi', odeme_tutari='$edit_odeme_tutari', odenen_tutar='$edit_odenen_tutar' WHERE id=$id");

   if($ekle){
    header("Location: list.php");
    }
    else{
    header("Location: list.php");
   } 

?>