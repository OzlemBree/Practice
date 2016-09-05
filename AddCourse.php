<html lang="en">
<head>
<meta charset="UTF-8">
 <title>Add Course Form</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="page-header">
<h2> Add Student Course </h2>
</div>
</div>
<?php
/*connecting to a DATABASE*/
$link = mysqli_connect("localhost", "root", "", "Transcript");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$CourseCode = mysqli_real_escape_string($link, $_POST['coursecode']);
$CourseVersion = mysqli_real_escape_string($link, $_POST['courseversion']);//need to work on course version
$CourseName = mysqli_real_escape_string($link, $_POST['coursename']);
$CreditHours = mysqli_real_escape_string($link, $_POST['credithours']);
$CourseYearOffered = mysqli_real_escape_string($link, $_POST['courseyearoffered']);
 
// Insertion query
$sql = "INSERT INTO tblCourses (CourseCode, CourseVersion, CourseName,CreditHours, CourseYearOffered) VALUES ('$CourseCode', '$CourseVersion', '$CourseName','$CreditHours','$CourseYearOffered')";
if(mysqli_query($link, $sql)){
   	echo "<div class='container'><p class='text-justfy' >Course Added Successfully!!</p></div>";
	
} else{
    	echo "<div class='container'><p class='text-justfy'>Course NOT Successfully Added, please contact the administrator!!</p></div>";
}
 
// close connection
mysqli_close($link);
?>
<div class="container">
     <ul class="pager">
    <li class="previous" ><a href="Test.html">Go Back</a></li>
    </ul>
</div>
</body>
</HTML>