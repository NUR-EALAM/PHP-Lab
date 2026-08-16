<?php

$id = $_GET["id"];
$name = $_GET["name"];
$cv = $_GET["cv"];

$request_id = $_REQUEST["id"];
$request_name = $_REQUEST["name"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Result</title>
</head>

<body>

<h2>=================================</h2>
<h2>APPLICATION SUCCESSFUL</h2>
<h2>=================================</h2>

Applicant ID: <?php echo $request_id; ?>
<br><br>

Name: <?php echo $request_name; ?>
<br><br>

Uploaded CV: <?php echo $cv; ?>
<br><br>

Application submitted successfully.

</body>
</html>