<?php

if(isset($_POST['log_out'])){  
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

// echo "session destroyed"; 
// Redirect to login page
header("Location: http://localhost/rohit/dikshaAcademy%20final/form/form.php");

exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error </title>
</head>
<body>
    
    <h1>Error: 404</h1>
    <h2>Page Not Found</h2>

</body>
</html>