<?php  

include("conn.php");
if($_GET){


extract($_GET);
echo $id;
echo $firma_adi;

 
	
	try {

  // sql to delete a record
  $sql = "DELETE FROM $firma_adi WHERE id=$id";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
	try {

  // sql to delete a record
  $sql1 = "ALTER TABLE $firma_adi AUTO_INCREMENT = 0 ";

  // use exec() because no results are returned
  $conn->exec($sql1);
  echo "Record deleted successfully";
   header("Location: list.php");
} catch(PDOException $e1) {
  echo $sql1 . "<br>" . $e1->getMessage();
}


}

else{
  header("Location: list.php");
}


?>