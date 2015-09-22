<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>QuotingDojo</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="container">
		<h1>Welcome to QuotingDojo</h1>
<?php 
		if(isset($_SESSION['message'])) {
			echo "<p style='color:red'>" . $_SESSION['message'] . "</p>";
		}
		unset($_SESSION['message']);
?>

		<form action="process.php" method="post">
			<input type="hidden" name="action" value="quote_form">
			<label>Your Name: <input type="text" name="name"></label><br>
			<label>Your Quote: <textarea name="quote" rows="10" cols="30"></textarea></label><br>
			<input type="submit" name="submit" value="Add My Quote">
		</form>
		<form action="main.php" method="post">
			<input type="submit" value="Skip to Quotes">
		</form>
	</div>
</body>
</html>