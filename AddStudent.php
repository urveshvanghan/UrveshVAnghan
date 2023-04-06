<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student87-35303133bf82", "ua92-studentAc", "student87-35303133bf82");

if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $ContactNo = $_POST['ContactNo'];
    $ClassId = $_POST['ClassId'];
   

    $sql = "INSERT INTO Students (Name,Address,ContactNo,ClassId) VALUES ('$Name','$Address','$ContactNo','$ClassId')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>