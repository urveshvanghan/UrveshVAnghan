<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student87-35303133bf82", "ua92-studentAc", "student87-35303133bf82");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Name = $_POST['Name'];
    $Capacity = $_POST['Capacity'];
   

    $sql = "INSERT INTO Classes (Name,Capacity) VALUES ('$Name','$Capacity')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>