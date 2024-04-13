<?php
// Assuming you have a connection to your database
$conn = mysqli_connect("localhost","root","","registrationdb");




// Check connection


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security (to prevent SQL injection)
    $name = $conn->real_escape_string($_POST['Name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['Number']);
    $dob = $conn->real_escape_string($_POST['birthday']);
//    $course = $conn->$_POST['course'];

    // SQL query to insert data into the 'course_enrolled' table
    $sql = "INSERT INTO course_enrolled (`name`, `email`, `phone`, `dob`)
            VALUES ('$name', '$email', '$phone', '$dob')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {

        header("Location: registration%20(3).php");
        echo "<div class='btn btn-primary'>Record added successfully</div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>