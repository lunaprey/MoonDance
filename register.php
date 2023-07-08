<?php
//Creds moved outside of this file for security, but code should still work

// Establishing a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    
    // Validate and sanitize the input
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    // Validate the email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email error
    }

    // Query to check if the user already exists
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // User already exists, redirect back to index.php
        header("Location: index.php");
        exit();
    } else {
        // User does not exist, insert them into the database
        $insert_query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

        if ($conn->query($insert_query) === TRUE) {
            // User inserted successfully, redirect back to index.php
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        <?php include 'https://raw.githubusercontent.com/lunaprey/MoonDance/main/style.css'; ?>
    </style>
</head>
<body>
    <header>
        <?php include 'https://raw.githubusercontent.com/lunaprey/MoonDance/main/header.php'; ?>
    </header>
     
    <div id="container">
        <h2>User Registration</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="black-background" type="text" placeholder="Username" name="username" required><br><br>
            <input class="black-background" type="password" placeholder="Password" name="password" required><br><br>
            <input class="black-background" type="email" placeholder="Email" name="email" required><br><br>
            <input class="black-background" type="submit" value="Register">
        </form>
    </div>

    <footer>
    <p>An opensource project. See <a href="https://github.com/lunaprey/MoonDance">https://github.com/lunaprey/MoonDance</a> to contribute.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
