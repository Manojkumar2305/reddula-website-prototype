<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];  // Added missing variable
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($first_name) && !empty($last_name) && !empty($age) && !empty($email) && !empty($password)) {
        // Check if email already exists
        $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "Email is already in use!";
        } else {
            // Save to database
            $user_id = random_num(20);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (user_id, firstname, email, password) VALUES ('$user_id', '$first_name', '$email', '$hashed_password')";

            // Execute the query
            $result = mysqli_query($con, $query);

            if ($result) {
                // Query executed successfully
                header("Location: index.php");
                die;
            } else {
                // Error occurred during execution
                echo "Error: " . mysqli_error($con);
            }
        }
    } else {
        echo "Please enter some valid information!";
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url(bg.png);">
    <!-- Sign Up Modal -->
    <div class="modal show d-block" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-success">
                    <h5 class="modal-title bold" id="signupModalLabel">Sign Up</h5>
                </div>
                <div class="modal-body">
                    <form  method="POST">
                      <div class="container row">
                        <div class="mb-3 col-6">
                            <label for="signupFName" class="form-label">First Name</label>
                            <input type="text" class="form-control text-success" id="signupFName" name="first_name" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="signupLName" class="form-label">Last Name</label>
                            <input type="text" class="form-control text-success" id="signupLName" name="last_name" required>
                        </div>
                      </div>
                      <div class="container">
                        <div class="mb-3 col-12">
                            <label for="signupAge" class="form-label">Age</label>
                            <input type="number" class="form-control text-success" id="signupAge" name="age" required>
                        </div>
                      </div>
                        <div class="mb-3">
                            <label for="signupEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control text-success" id="signupEmail" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="signupPassword" class="form-label">Password</label>
                            <input type="password" class="form-control text-success" id="signupPassword" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-success">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
