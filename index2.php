<?php
include 'crud.php';

//$sql = "insert into mahasiswa(nim,nama) values ('13515024','Abdurrahman')";

//$result = SingleQuery($sql);

$sql = "insert into mahasiswa(nim,nama) values ('13515096','Gilang Ardyamandala');";
$sql .= "insert into mahasiswa(nim,nama) values ('13515069','Hisham Lazuardi');";
 
$result = MultiQuery($sql);

if ($result === true)
{
	echo 'success';
} else {
	echo $result;
}
?>