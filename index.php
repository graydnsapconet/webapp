<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select all the questions from the "question" table
$sql = "SELECT * FROM question";
$result = mysqli_query($conn, $sql);

// Loop through the results and display each question
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h2>" . $row["question"] . "</h2>";
        echo "<p>" . $row["option1"] . "</p>";
        echo "<p>" . $row["option2"] . "</p>";
        echo "<p>" . $row["option3"] . "</p>";
        echo "<p>" . $row["option4"] . "</p>";
        // You could also display the correct answer or other information here
    }
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>
