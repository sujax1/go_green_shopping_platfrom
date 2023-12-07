<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "cosignup";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Add your authentication logic here, e.g., querying the database
    // to check if the provided username and password are valid.

    // Example: (This is just a placeholder; replace it with your actual authentication logic)
    $sql_query = "SELECT * FROM signupform WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql_query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "Welcome, $username!";
    } else {
        echo "Invalid username or password.";
    }
    header("LOCATION:index.html");
}
mysqli_close($conn);
?>
