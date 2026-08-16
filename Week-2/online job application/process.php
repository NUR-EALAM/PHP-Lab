<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $applicant_id = $_POST["applicant_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $job = $_POST["job"];
    $qualification = $_POST["qualification"];
    $address = $_POST["address"];

    $error = "";

    if (empty($applicant_id)) {
        $error = $error . "Applicant ID is required.<br>";
    }

    if (empty($name)) {
        $error = $error . "Name is required.<br>";
    }

    if (empty($email)) {
        $error = $error . "Email is required.<br>";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = $error . "Email is not valid.<br>";
    }

    if (empty($phone)) {
        $error = $error . "Phone number is required.<br>";
    }
    else if (strlen($phone) != 11) {
        $error = $error . "Phone number must contain 11 digits.<br>";
    }

    if (empty($password)) {
        $error = $error . "Password is required.<br>";
    }
    else if (strlen($password) < 6) {
        $error = $error . "Password must contain at least 6 characters.<br>";
    }

    if (empty($gender)) {
        $error = $error . "Please select your gender.<br>";
    }

    if (empty($job)) {
        $error = $error . "Please select a job position.<br>";
    }

    if (empty($qualification)) {
        $error = $error . "Qualification is required.<br>";
    }

    if (empty($address)) {
        $error = $error . "Address is required.<br>";
    }

    if (!isset($_FILES["cv"]) || $_FILES["cv"]["error"] != 0) {

        $error = $error . "Please upload your CV.<br>";

    }
    else {

        $cv_name = $_FILES["cv"]["name"];
        $cv_size = $_FILES["cv"]["size"];
        $cv_tmp = $_FILES["cv"]["tmp_name"];

        $extension = strtolower(pathinfo($cv_name, PATHINFO_EXTENSION));

        if ($extension != "pdf" &&
            $extension != "doc" &&
            $extension != "docx") {

            $error = $error . "Only PDF, DOC and DOCX files are allowed.<br>";
        }

        if ($cv_size > 2 * 1024 * 1024) {

            $error = $error . "CV file size must be less than 2 MB.<br>";
        }
    }

    if ($error != "") {

        echo "<h2>Application Failed!</h2>";
        echo $error;

    }
    else {

        $upload_path = "uploads/" . $cv_name;

        move_uploaded_file($cv_tmp, $upload_path);

        header("Location: result.php?id=" . urlencode($applicant_id) .
               "&name=" . urlencode($name) .
               "&cv=" . urlencode($cv_name));

        exit();
    }
}

?>