<?php 

if (isset($_POST['submit'])) {


	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];

	
	$dat1 = strtotime($date1);
	$dat2 = strtotime($date2);

	
	$diff = ($dat2- $dat1)/60/60/24;
	echo $diff.' days';

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>dates</title>
</head>
<body>

	<form action="" method="POST">
		
		<input type="date" name="date1">
		<input type="date" name="date2">

		 
		 <button type="submit" name="submit"> Calculate difference now</button>

	</form>
	
	
</body>
</html>