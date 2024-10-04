<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_authentication";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing password

    // Insert query
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header('Location: login.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <style>
        /* Styling body for full-screen gradient background */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
        }

        /* Container for the registration form */
        .page {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        /* Styling form and its elements */
        form {
            display: flex;
            flex-direction: column;
        }

        h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #74ebd5;
            box-shadow: 0px 0px 10px rgba(116, 235, 213, 0.2);
            outline: none;
        }

        .button {
            padding: 12px;
            background-color: #74ebd5;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #ACB6E5;
        }

        /* Adding some responsive design */
        @media (max-width: 600px) {
            .page {
                padding: 20px;
            }

            h3 {
                font-size: 20px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                font-size: 14px;
            }

            .button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <center>
            <form action="register.php" method="POST">
                <h3>Sign up</h3><br>
                <label>Name:</label><br>
                <input type="text" name="name" placeholder="Enter name" required><br>
                <label>Email:</label><br>
                <input type="email" name="email" placeholder="Enter email" required><br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="Enter password" required><br>
                <input type="submit" value="Sign up" class="button">
            </form>
        </center>
    </div>
</body>
</html>
