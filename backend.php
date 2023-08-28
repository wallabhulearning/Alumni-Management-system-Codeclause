<?php
// Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "alumni_management";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to insert alumni data
function addAlumni($first_name, $last_name, $email, $graduation_year, $major, $job_title, $company, $address, $phone) {
    global $conn;

    $sql = "INSERT INTO alumni (first_name, last_name, email, graduation_year, major, job_title, company, address, phone)
            VALUES ('$first_name', '$last_name', '$email', '$graduation_year', '$major', '$job_title', '$company', '$address', '$phone')";

    if ($conn->query($sql) === TRUE) {
        return "Alumni data added successfully!";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to fetch alumni data
function getAlumni() {
    global $conn;

    $sql = "SELECT * FROM alumni";
    $result = $conn->query($sql);
    $alumni = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $alumni[] = $row;
        }
    }

    return $alumni;
}

// Close the database connection
$conn->close();
?>
