<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          background-size: cover;
          background-repeat: no-repeat;
        }
        header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
        }
        h1 {
			font-size: 36px;
			margin: 0;
		}
        .navbar {
            background-color: #666;
			color: #fff;
			padding: 10px;
			text-align: center;
        }
        .navbar a, button {
            color: #fff;
			text-decoration: none;
			padding: 10px;
			font-size: 24px;
			font-weight: bold;
			margin: 0 10px;
        }
        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: rgb(32, 30, 30);
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
          z-index: 1;
        
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        section {
			padding: 20px;
			margin: 20px;
			background-color: #eee;
		}
        h2 {
			font-size: 28px;
			margin: 0;
		}
		h3{
			text-align: center;
			color: #333;
		}
        p {
			font-size: 18px;
			line-height: 1.4;
		}
        footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
			position: absolute;
			bottom: 0;
			width: 100%;
		}

		footer p {
			font-size: 16px;
			margin: 0;
		}
        </style>
    </head>
<body> 
<header>
            <h1>Welcome to <br>Rishton Academy Primary School</h1>
        </header>
        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
				<a href="ViewStudent.php">Student</a>
                    <a href="ViewParent.php">Parent</a>
                    <a href="ViewTeacher.php">Teacher</a>
                    <a href="ViewClass.php">Class</a>
                    <a href="ViewActivity.php">Activity</a>
                    <a href="ViewAccommodation.php">Accommodation</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent1.php">Student</a>
                    <a href="AddParent1.php">Parent</a>
                    <a href="AddTeacher1.php">Teacher</a>
                    <a href="AddClass1.php">Class</a>
                    <a href="AddActivity1.php">Activity</a>
                    <a href="AddAccommodation1.php">Accommodation</a>
                </div>
            </div>
            <a href="Contact.html">Contact Us</a>
	</div>	


<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student87-35303133bf82", "ua92-studentAc", "student87-35303133bf82");

if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students details</h3>
	
		<table>
		
			<tr>
				<th width="250px">Student Id<br><hr></th>
				<th width="250px">Name<br><hr></th>
				
                <th width="250px">Address<br><hr></th>
				<th width="250px">Contact No<br><hr></th>
				<th width="250px">Class <br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT StudentId, Name, Address, ContactNo, ClassId  FROM Students");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['StudentId']}</th>
				<th>{$row['Name']}</th>
				
				<th>{$row['Address']}</th>
				<th>{$row['ContactNo']}</th>
				<th>{$row['ClassId']}</th>
                
			</tr>";
			}
			?>
            </table>
			<footer>
            <p>&copy; Rishton Academy Primary School 2023</p>
            </footer>
        </body>
        </html>


