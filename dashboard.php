<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
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

        /* Container for the dashboard content */
        .page {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        /* Centering content */
        h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
        }

        /* Welcome message styling */
        .welcome-message {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Logout button styling */
        .button {
            padding: 12px;
            background-color: #74ebd5;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #ACB6E5;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .page {
                padding: 20px;
            }

            h3 {
                font-size: 20px;
            }

            p {
                font-size: 14px;
            }

            .welcome-message {
                font-size: 16px;
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
            <h3>Dashboard</h3><br>
            <div class="welcome-message">
                <?php
                echo "Welcome, you are logged in!";
                ?>
            </div>
            <p>You are logged in.</p>
            <a href="logout.php" class="button">Logout</a>
        </center>
    </div>
</body>
</html>
