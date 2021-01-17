<?php 

    $con = mysqli_connect('localhost','root','');
    
if(isset($_POST['submit'])){    
    mysqli_select_db($con,'id15167121_mydatabase');

    if($con){
        echo "sucess";    
    }else{
        echo "failed";
    }

    $to = "rohitbhagat01010@gmail.com"; // this is your Email address
    $from = $_POST['senderEmail']; // email
    $subject="Form to email message";  //message
    $sender=$_POST["sender"];   //name
    $senderPhone=$_POST["senderPhone"];     //mobile
    $comment = $_POST['message'];

    $message = $sender . " " . $senderPhone . " wrote the following:" . "\n\n" . $comment;
    $query = " insert into userInfoData (user,email,mobile,message) values ('$sender','$from','$senderPhone','$comment')";
    
    // $headers = "From:" . $from;
    // $headers2 = "From:" . $to;
    // mail($to,$subject,$message,$headers);
    
    mysqli_query($con,$query);
    header("Location: http://localhost/rohit/dikshaAcademy%20final/");
}    
//     header('Location : index.php');    
    //You can also use header('Location: thank_you.php'); to redirect to another page.
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