<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
  h1, h3 {
      text-align: center;
    }
    .blue-square-container {
      text-align: center;
    }
    .blue-square {
      display: inline-block;
    }
</style>
	<meta charset="UTF-8"/>
	<title>Danh sach hoc sinh</title>
</head>

<body>
<form name="f1" method="" value="">
  <div class="blue-square-container">
    <div class="blue-square">
	<h2>Danh sach hoc sinh:</h2>
	
	<?php
	
		for($i = 1; $i <= sizeof($studentList); $i++)
		{
			echo  "<p>" .$i .". <a href='?stid=" .$studentList[$i]->id ."'>" .$studentList[$i]->name ."</a></p>";
			//echo "<p> Age: " .$studentList[$i]->age .", School: " .$studentList[$i]->university .".</p><br>";
		}
		
	?>
	
	<br>
	<p><a href="http://localhost/bt3/index.php">Home page</a></p>
</div>
</div>
</form>
</body>
</html>