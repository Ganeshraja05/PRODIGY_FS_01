
# Secure User Authentication System

This project is a simple and secure user authentication system built with PHP and MySQL. It allows users to register, log in, and access a dashboard after authentication. The system includes features like secure password storage and session management for logged-in users.

## Features

- User Registration
- User Login
- User Logout
- Session Management
- Dashboard for authenticated users

## Project Structure

The following are the key files included in this project:

- **dashboard.php**: The main dashboard page accessible only to authenticated users.
- **db.sql**: The SQL file to set up the required database and tables for the user authentication system.
- **login.php**: Handles user login functionality.
- **logout.php**: Handles user logout functionality.
- **register.php**: Allows users to register for an account.

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:

- PHP >= 7.0
- MySQL
- Apache or any other local server (e.g., XAMPP, WAMP, etc.)

## Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/yourusername/secure-user-authentication.git
```

### 2. Database Setup

- Create a new MySQL database.
- Import the `db.sql` file into your database:

```bash
mysql -u yourusername -p yourpassword your_database_name < db.sql
```

### 3. Configure Database Connection

Edit the `login.php`, `register.php`, and `dashboard.php` files to include your database connection credentials.

```php
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "your_database_name";
```

### 4. Start the Application

- Move the project files to your web server directory (e.g., `htdocs` for XAMPP).
- Open your web browser and navigate to `http://localhost/your-project-directory`.

### 5. Usage

- **Register**: Go to the registration page and create a new user account.
- **Login**: Use the login form to access the dashboard.
- **Logout**: Click the logout button to end your session.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.
