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
 
<?php

$link = mysqli_connect("localhost", "root", "root", "School3");
// Check connection
if ($link === false) {
	die("Connection failed: ");
}
?>

<hr>

<h3>View All Students</h3>

<table>

	<tr>
		<th width="150px">Pupil ID<br><hr></th>
		<br>
		<th width="250px">Pupil Name<br><hr></th>
		<br>
		<th width="150px">Pupil Address<br><hr></th>
		<br>
		<th width="150px">Medical Info<br><hr></th>
	</tr>
			
	<?php
	$sql = mysqli_query($link, "SELECT * FROM Pupil");
	while ($row = $sql->fetch_assoc()){
	echo "
	<tr>
		<th>{$row['PupilID']}</th>
		<th>{$row['PupilName']}</th>
		<th>{$row['PupilAddress']}</th>
		<th>{$row['PupilMedical']}</th>
	</tr>";
	}
	?>
	
</table>

<?php
$link->close();
?>

<hr>
</body>
</html>