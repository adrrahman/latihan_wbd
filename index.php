<?php
include 'db_connection.php';

$conn = OpenCon();
echo "Connected Succesfully";

CloseCon($conn);
?>