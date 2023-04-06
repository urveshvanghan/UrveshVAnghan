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
      color: black;
			background-color: #eee;
		}
        h2 {
			font-size: 28px;
			margin: 0;
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
            <a href="Contact.html">Contact Us</a>
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
           </div>
          </div>
              <br><br>
            <section>

        <div>
            <br>
            <form method="post" action="AddParent.php">
            <label for="Name"> Parent Name:</label>
    			  <input type="text" name="Name"><br><br>
              <label>Student:</label>
              <select name="StudentId">
              <?php
              $link = mysqli_connect("sdb-56.hosting.stackcp.net", "student87-35303133bf82", "ua92-studentAc", "student87-35303133bf82");
  
              if ($link === false) {
                  die("Connection failed: ");
              }
               $sql = mysqli_query($link, "SELECT StudentId, Name FROM Students");
              while ($row = $sql->fetch_assoc()){
              echo "<option value='{$row['StudentId']}'>{$row['Name']}</option>";
              }
              ?>
               </select>
    			<br><br>
          <label for="ContactNo">Contact no:</label>
    			<input type="text" name="ContactNo"><br><br>
          <label for="EmailId">Email Id:</label>
    			<input type="text" name="EmailId">

    			<br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
        <footer>
            <p>&copy; Rishton Academy Primary School 2023</p>
        </footer> 
    </body>
</html>
