<?php
 ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student87-35303133bf82", "ua92-studentAc", "student87-35303133bf82");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}  



if (isset($_POST['submit'])) {
    
    $StudentId = $_POST['StudentId'];
    $Accommodation = $_POST['Accommodation'];
    $Membership = $_POST['Membership'];
   

    $sql = "INSERT INTO Accommodations (StudentId,Accommodation,Membership) VALUES ('$StudentId','$Accommodation','$Membership')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>