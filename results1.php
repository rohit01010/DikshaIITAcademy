<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="loaderstyle.css">
    <link rel="stylesheet" type="text/css" href="results_style.css">
    <link rel="stylesheet" type="text/css" href="btnstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="icon" href="images/favicon/favicon-16x16.png" type="images/png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body onload="preloader()">

<section class=".preloaderBox"></section>
    <div class="navbar">
        <div class="logo"><a href="#">DIKSHA</a></div>
        <a class="openBtn" onclick="toggleMenu()"></a>
        <ul>
            <li class="btn">
                <a href="index.php">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    HOME
                </a>
            </li>
            <li class="btn">
                <a href="admission.php">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    ADMISSIONS
                </a>
            </li>
            <li class="btn">
                <a href="results.php">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    RESULTS
                </a>
            </li>
            <li class="btn">
                <a href="gallery.php">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    GALLERY
                </a>
            </li>
            <li class="btn">
                <a href="about.php">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    ABOUT US
                </a>
            </li>
        </ul>
    </div>
    <!-- 
        changes made in list block
        - attached link address
        - change active in each result page
        changes made in tContainer
        - removed additional 2019 present in it 
    -->
<div class="results">
    <h1>Our Results</h1>     
    <div class="list">
        <ul>
            <li class="btn">
                <a href="results.php">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    2020
                </a>
            </li>
            <li class="btn">
                <a href="results1.php" class="active">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    2019
                </a>
            </li>
            <li class="btn">
                <a href="results2.php">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    2018
                </a>
            </li>
        </ul>
    </div>
    <div class="tContainer">
        <div class="testimonials">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="layer"></div>
                            <div class="content">
                                <p>JEE ADV - AIR 2644
                                <br>JEE ADV - OBC 365
                                <br>JEE MAIN - AIR 3216
                                <br>JEE MAIN - OBC 515
                                <br>MHT-CET - 99.94%
                                <br>HSC BOARD - 99.83%</p>
                                <div class="imgBox">
                                    <img src="images/profile1.jpg">
                                </div>
                                <div class="details">
                                    <h2>SHASHANK ADKESHWAR<br><span>IIT BHU</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="layer"></div>
                            <div class="content">
                                <p>JEE ADV - AIR 3589
                                <br>JEE ADV - SC 42
                                <br>JEE MAIN - AIR 4587
                                <br>JEE MAIN - SC 63
                                <br>MHT-CET - 99.83%
                                <br>HSC BOARD - 84.77%</p>
                                <div class="imgBox">
                                    <img src="images/profile2.jpg">
                                </div>
                                <div class="details">
                                    <h2>ROHIT BHAGAT<br><span>IIT MADRAS</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="layer"></div>
                            <div class="content">
                                <p>JEE ADV - AIR 5420
                                <br>JEE MAIN - AIR 4669
                                <br>MHT-CET - 98.99%
                                <br>HSC BOARD - 80%<br><br><br></p>
                                <div class="imgBox">
                                    <img src="images/profile3.jpeg">
                                </div>
                                <div class="details">
                                    <h2>KEDAR PATHADE<br><span>IIT BHUBANESHWAR</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="layer"></div>
                            <div class="content">
                                <p>JEE ADV - SC 1155
                                <br>JEE MAIN - SC 1009
                                <br>MHT-CET - 97.40%
                                <br>HSC BOARD - 79.23%<br><br><br></p>
                                <div class="imgBox">
                                    <img src="images/profile4.jpg">
                                </div>
                                <div class="details">
                                    <h2>NAGSEN WAGHMARE<br><span>IIT BHUBANESHWAR</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div> 

<section class="contactBox">
    <div class="contact">
        <h1>CONTACT US</h1><br>
        <a href="mailto:dikshaiitacademy@gmail.com"><img src="images/mail.png"> - dikshaiitacademy@gmail.com</a><br>
        <a href="tel:8318494801"><img src="images/call.png"> <img src="images/whatsapp.png" style="width: 25px;transform: translateY(3px);"> - 8318494801</a><br>
        <a href="https://goo.gl/maps/9mGWfZKxzHVSYzdX8" target="blank"><img src="images/locate.png"> - Diksha IIT Academy, Somesh colony, Vishnu Nagar, Nanded, Maharashtra 431601</a><br>
    </div>
    <form class="formBox" method="post" action="index.php">
        <h1>Leave a message</h1>
        <div class="input">
            <input name="sender" type="text" required=""><br>
            <label>Name</label>   	   
        </div>
        <div class="input">	
            <input name="senderEmail" type="email" required=""><br>
            <label>Email</label>
        </div>
        <div class="input">	
            <input name="senderPhone" type="tel" required=""><br>
        <label>Phone Number</label>
        </div>
        <div class="input">
            <textarea name="message" rows="8" cols="40" required></textarea><br>
            <label>Message</label>   	    
        </div>
        <input type="submit" name="submit" value="SEND">
    </form>
</section>
<footer>
    <p>Copyright © 2020 Diksha Academy. All Rights Reserved.</p>
    <p>-Developed By <a href="" style="color: #fff; text-decoration: none;">Rohit and Nagsen</a></p>
</footer>
<a class="image" href="https://api.whatsapp.com/send?phone=8318494801&text=&source=&data=&app_absent="><img src="images/whatsappimg.png"></a>       
<script src="script.js"></script>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
    $to = "rohitbhagat01010@gmail.com"; // this is your Email address
    $from = $_POST['senderEmail']; // this is the sender's Email address

    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderPhone=$_POST["senderPhone"];

    $message = $sender . " " . $senderPhone . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo '<script>alert("Mail Sent. Thank you " . $sender . ", we will contact you shortly.")</script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
