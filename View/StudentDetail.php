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
	<title>Chi tiet</title>
</head>

<body>
	<form name="f1" method="" value="">
  <div class="blue-square-container">
    <div class="blue-square">
	<h2>Chi tiet:</h2>
	
	<?php
	
		echo  "<p>Name: <b>" .$student->name ."</b></p>";
		echo "<p> Age: " .$student->age ."</p>";
		echo "<p> School: " .$student->university ."</p><br>";
		
	?>
	
	<p><a href="javascript:history.back()">Back</a></p>
</div>
</div>
</form>	
</body>
</html>