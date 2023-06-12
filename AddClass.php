<html lang="en">
<head>
    <link rel = "stylesheet" href = "style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary School Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <hr>
    <hr>
    <h1 style="text-align: center; color: #323232;">Rishton Primary School</h1>
    <hr>
    <hr>
    <div class="navbar">
      <a href="index.html">Home</a>
      <div class="dropdown">
          <button class="dropbtn">View
              <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
              <a href="ViewStudent.php">Pupils</a>
              <a href="ViewParent.php">Parent</a>
              <a href="ViewTeacher.php">Teacher</a>
              <a href="ViewClass.php">Class</a>
          </div>
      </div>
      <div class="dropdown">
          <button class="dropbtn">Add
              <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
              <a href="AddStudent.php">Pupils</a>
              <a href="AddParent.php">Parent</a>
              <a href="AddTeacher.php">Teacher</a>
              <a href="AddClass.php">Class</a>
          </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  
  <hr>
	
	<h3>Add a New Class</h3>

	<form method="post" action="AddClass.php">
		<label>Year:</label>
		<input type="number" name="year">
		<br>
	
		<label>Capacity:</label>
		<input type="number" name="capacity">
    <br>

    <label>Select Teacher:</label>
    <select name="teacherID">
        <?php
        $link = mysqli_connect("localhost", "root", "root", "School3");
        // Check connection
        if ($link === false) {
            die("Connection failed: ");
        }
        $sql = mysqli_query($link, "SELECT * FROM Teacher");
        while ($row = $sql->fetch_assoc()){
        echo "<option value='{$row['TeacherID']}'>{$row['TeacherName']}</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" name="submit">
	</form>
	
	<?php
	
	if (isset($_POST['submit'])) {
	
		$year = $_POST['year'];
		$capacity = $_POST['capacity'];
    $teacherID = $_POST['teacherID'];
		
		$sql = "INSERT INTO `Class`(`ClassID`, `ClassYear`, `ClassCapacity`, `TeacherID`) VALUES (NULL, $year, $capacity, $teacherID)";
		if (mysqli_query($link, $sql)) {
		echo "New record created successfully";
		} else {
		echo "Error adding record ";
		}
	
	}
	
	$link->close();
	?>

<hr>
</body>
</html>