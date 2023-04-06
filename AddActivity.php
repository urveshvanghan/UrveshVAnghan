<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student87-35303133bf82", "ua92-studentAc", "student87-35303133bf82");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $StudentId = $_POST['StudentId'];
    $Activity = $_POST['Activity'];
    $Membership = $_POST['Membership'];
    $Schedule = $_POST['Schedule'];
   

    $sql = "INSERT INTO Activities (StudentId,Activity,Membership,Schedule) VALUES ('$StudentId','$Activity','$Membership','$Schedule')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>