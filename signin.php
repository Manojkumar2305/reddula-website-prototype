<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // Prepare and execute the query
        $query = "SELECT * FROM users WHERE email = ? LIMIT 1";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            
            // Verify password
            if (password_verify($password, $user_data['password'])) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            } else {
                echo "Incorrect email or password!";
            }
        } else {
            echo "Incorrect email or password!";
        }
    } else {
        echo "Please enter email and password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=10.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url(bg.jpg);">
    <!-- Sign In Modal -->
    <div class="modal show d-block" style="align-content: top;" id="signinModal" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-success">
                    <h5 class="modal-title bold" id="signinModalLabel">Sign In</h5>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="signinEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signinEmail" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="signinPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signinPassword" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-success">Sign In</button>
                    </form>
                    <div class="mt-3">
                        Don't have an account? <a href="signup.php" class="btn btn-success">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
