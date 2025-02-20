<?php

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $email = $password = $message = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Validate credentials

    // Prepare a select statement
    $sql = "SELECT id, username, email, password FROM users WHERE username = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        // Set parameters
        $param_username = $username;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Store result
            mysqli_stmt_store_result($stmt);

            // Check if username exists, if yes then verify password
            if (mysqli_stmt_num_rows($stmt) == 1) {
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $id, $username, $email, $h_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if ($password == $h_password) {
                        // Password is correct Display a message that it's OK
                        $message = "Welcome back!";

                    } else {
                        // Display an error message if password is not valid
                        $message = "The password you entered was not valid.";
                    }
                }
            } else {
                // Display an error message if username doesn't exist
                $message = "No account found with that username.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<html>

<head>
    <title>Login</title>
</head>

<body>
    <?php echo $message; ?>
</body>

</html>