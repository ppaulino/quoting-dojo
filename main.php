<?php
	session_start();
	require_once('new-connection.php');
	$query = "SELECT * FROM quotes ORDER BY created_at DESC";
	$quotes = fetch($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>QuotingDojo</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="container">
	<h1>Here are the awesome quotes!</h1>
<?php
	foreach($quotes as $quote) {
		$date_added = date("g:ia F d, Y", strtotime($quote['created_at']));
		echo "<p>&quot;" . $quote['quote'] . "&quot;</p>";
		echo "<p> - " . $quote['name'] . " at " . $date_added . "</p><br>";
	}
?>
</div>
</body>
</html>