<?php
// Initialize the session
session_start();

$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["name"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["name"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
      if($password == "Diksha102030" && $username == "Diksha"){
        session_start();
          
        $_SESSION["loggedin"] = true;
          
        header("Location: http://localhost/rohit/dikshaAcademy%20final/admin.php");          
      } 
      else{
        $password_err = "Invalid username or password";
      }
    } 
    else{
      $username_err = "No account found with that username.";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <div class="container" id="login">
      <div class="login">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Login</h1><br>
            <div>
                <input type="text" name="name" placeholder="Username" required>
                <span style="color: red;font-size: 12px;font-weight:800;"><?php echo $username_err; ?></span>
            </div>    
            <div>
                <input type="password" name="password" placeholder="Password" required>
                <span style="color: red;font-size: 12px;font-weight:800;"><?php echo $password_err; ?></span>
            </div>  
            <div>
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
      </div>
    </div>
  </body>
</html>
