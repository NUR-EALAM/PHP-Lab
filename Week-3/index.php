<?php

$name = "";
$id = "";
$email = "";
$department = "";
$error = "";
$message = "";

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $id = $_POST["id"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if (empty($name)) {
        $error = $error . "Student Name is required.<br>";
    }
    else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $error = $error . "Student Name should contain only letters and spaces.<br>";
    }

    if (empty($id)) {
        $error = $error . "Student ID is required.<br>";
    }
    else if (strlen($id) < 4) {
        $error = $error . "Student ID must contain at least 4 characters.<br>";
    }

    if (empty($email)) {
        $error = $error . "Email is required.<br>";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = $error . "Please enter a valid email address.<br>";
    }

    if (empty($department)) {
        $error = $error . "Please select a department.<br>";
    }

    if (empty($password)) {
        $error = $error . "Password is required.<br>";
    }
    else if (strlen($password) < 6) {
        $error = $error . "Password must contain at least 6 characters.<br>";
    }

    if ($password != $confirm_password) {
        $error = $error . "Passwords do not match.<br>";
    }

    if ($error == "") {

        setcookie("student_name", $name, time() + 3600);
        setcookie("student_id", $id, time() + 3600);

        $message = "Registration successful!";
    }
}

if (isset($_POST["clear"])) {

    setcookie("student_name", "", time() - 3600);
    setcookie("student_id", "", time() - 3600);

    $message = "Cookie deleted successfully.";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Registration</title>
</head>

<body>

<h2>Student Registration Form</h2>

<?php

if ($error != "") {
    echo "<p>$error</p>";
}

if ($message != "") {
    echo "<p>$message</p>";
}

?>

<form method="POST" action="">

    Student Name:
    <input type="text" name="name">
    <br><br>

    Student ID:
    <input type="text" name="id">
    <br><br>

    Email:
    <input type="text" name="email">
    <br><br>

    Department:
    <select name="department">
        <option value="">Select Department</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
        <option value="COE">COE</option>
    </select>
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    Confirm Password:
    <input type="password" name="confirm_password">
    <br><br>

    <input type="submit" name="submit" value="Register">

    <input type="submit" name="clear" value="Clear Cookie">

</form>

<br>

<?php

if (isset($_COOKIE["student_name"]) && isset($_COOKIE["student_id"])) {

    echo "<h2>Welcome Back!</h2>";
    echo "Student Name: " . $_COOKIE["student_name"];
    echo "<br>";
    echo "Student ID: " . $_COOKIE["student_id"];

}
else {

    echo "No saved student information found.";

}

?>

</body>
</html>