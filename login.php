<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Creds moved outside of this file for security, but code should still work

// Establishing a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usern = isset($_POST["username"]) ? $_POST["username"] : "";
    $pass = isset($_POST["password"]) ? $_POST["password"] : "";

    // Validate and sanitize the input
    $usern = filter_var($usern, FILTER_SANITIZE_STRING);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    // Prepare the query using prepared statements to prevent SQL injection
    $check_query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("ss", $usern, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, fetch user data and assign session variables
        $user = $result->fetch_assoc();
        $_SESSION['userid'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirect to index.php or perform login logic
        header("Location: index.php");
        exit();
    } else {
        header("Location: index.php?login=failed&user=" . $usern . "&time=" . time());
        exit();
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
