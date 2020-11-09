
<!DOCTYPE html>
<html>
<head>
	<title>Diksha Academy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="loaderstyle.css">
    <link rel="stylesheet" type="text/css" href="btnstyle.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>   
    <link rel="icon" href="images/favicon/favicon-16x16.png" type="images/png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body onload="preloader()" style="overflow:visible">
<section class="preloaderBox"></section>
<div class="container">
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
    <section>    
        <div class="content">
            <h1>DIKSHA ACADEMY</h1>
            <h3>Education is not preparation for life, Education is life itself.</h3>
        </div>
        <div class="slideshow">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="images/slideshow_Photos/1.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/slideshow_Photos/2.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/slideshow_Photos/3.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/slideshow_Photos/4.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/slideshow_Photos/5.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/slideshow_Photos/6.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/slideshow_Photos/7.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/slideshow_Photos/1.jpg" style="width:100%">
                </div>      
            </div>    
        </div>
    </section>
    <div class="results">
        <div class="testimonials">
            <h1>Our Results</h1>
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
    <div class="about">
        <h1>Diksha IIT Academy</h1>
        <p>A shared vision of excellence in the ignited minds of experienced faculty member led to DIKSHA IIT ACADEMY came into existence on 20th January 2008. Driven by a shared pursuit of results, the founders of DIKSHA IIT ACADEMY are determined to be the trend setters in the field of JEE (Main + Advanced), VITEEE, BIT SAT preparation.<br>Faculty at DIKSHA IIT ACADEMY are from reputed Institutes of Delhi & Kota and they are highly experienced in teaching methodology, optimizing time, maximizing performance which is followed by the reputed Institutes of Delhi & Kota, which led to more than thousand selections in JEE (Main Advanced) every year.</p>
        <span class="btn">
            <a href="about.php">
                <span class="left"></span>
                <span class="top"></span>   
                <span class="right"></span>
                <span class="bottom"></span>
                READ MORE
            </a>
        </span>    
    </div>
    <div class="feedback">
        <h1>What our students have to say:</h1>
        <div class="cardbox">
            <div class="card">
                <div class="imgBox"><img src="images/testimonial/profile1.jpg"></div>
                <div class="content">
                    <p>	I got my admission in 8th grade at DIKSHA IIT ACADEMY and my journey for pursuing knowledge started at that moment. Yadav Sir's vast experience and guidance had a great role in helping me into IIT. Not only regarding the academics, but also he inculcated in us the values and his mindful teachings and inspiration will always help me work with confidence for my better future. I've got immense resources and valuable guidance from DIKSHA IIT ACADEMY and Yadav Sir always. And I am really grateful towards Yadav Sir and DIKSHA IIT ACADEMY.</p>
                    <h4>Shashank Adkeshwar<br><span>IIT BHU</span></h4>
                </div>
            </div>
            <div class="card">
                <div class="imgBox"><img src="images/testimonial/profile2.jpg"></div>
                <div class="content">
                    <p>From knowing the full form of IIT in 2009 to completing IIT from Roper (Punjab) was an enchanting journey for me many hurdles come in my way during the journey It's DIKSHA IIT Academy and its director Yadav Sir who gave me confidence. Riding on the confidence, I overcome all the hurdles. Yadav Sir played a pivotal role in the process of cracking an exam like IIT JEE and that too staying in Nanded.<br>I owe a lot to DIKSHA IIT and Yadav Sir.</p>
                    <h4>Sneha Kolbudhe<br><span>Dy Manager Power Grid Corporation of India</span></h4>
                </div>
            </div>
            <div class="card">
                <div class="imgBox"><img src="images/testimonial/profile3.jpg"></div>
                <div class="content">
                    <p>I am Rohit bhagat, Joined Diksha iit Academy when I was in 11th grade under the two year classroom program.
                        The teachers are great in teaching. They made me understand each concepts deeply. Also, they motivated me many times towards study which boost my preparation and confidence. The class tests they conduct consist of variety of questions and there doubt session  helped me alot.<br>I really want to thank  Diksha Academy specially yadav sir for making me such a successful person.</p>
                    <h4>Rohit bhagat<br><span>IIT MADRAS</span></h4>
                </div>
            </div>            
            <div class="card">
                <div class="imgBox"><img src="images/testimonial/profile4.jpg"></div>
                <div class="content">
                    <p>'Surround yourself with good people and good things will happen'<br>It's very true sentence with environment of Diksha Academy. I studied in diksha from 8th to 12th , the foundation helps me a lot. Whatever am I is only due to teachers of diksha, they not only make me a student but better person too. I am incredibly grateful to diksha.</p>
                    <h4>Sejal Lade <br><span>Nit bhopal</span></h4>
                </div>
            </div>
            <div class="card">
                <div class="imgBox"><img src="images/testimonial/profile6.jpg"></div>
                <div class="content">
                    <p>Studied at Diksha Academy, Currently pursuing Batchelor of technology in Indian institute of technology Indore.<br>"Diksha is the best coaching institute for jee preparation. I feel really lucky to be a part of such a great institute. They always motivated me and all other students to work hard and stay focused, that's why I became more disciplined towards my studies.<br>Teachers told us the way to do homework and way to attempt paper so that we can use knowledge effectively.My time at Diksha Academy has been through knowledge, skill, competition, interactions with one of the wisest persons of my life and above all a great experience that made me worthy of getting into IIT.<br>I strongly recommend Diksha Academy for preparation of jee which have excellent teaching."<br>Thank you...</p>
                    <h4>Aboli Dhawale<br><span>IIT Indore</span></h4>
                </div>
            </div>
            <div class="card">
                <div class="imgBox"><img src="images/testimonial/profile7.jpeg"></div>
                <div class="content">
                    <p>Studied at Diksha Academy, Currently persuing Batchelor of technology in Indian institute of technology Dhanbad.<br>I am proud that I am a student of Diksha Academy.<br>From the above line you can pretty assume my review about Diksha Academy.I heard about Diksha Academy from my Sanskrit Teacher in 10 th, the coaching which made a small city like this a topic to talk on by producing  toppers  in various national level examinations. I have studied from Diksha Academy in  2017-2019.It had a very big role in my selection in IIT JEE.They had one of the best teachers. They used to focus on each and every student .They helped a lot to students even after the class were off.<br>We could always meet with our teachers to discuss our doubts and troubles. They have doubt counters running from morning to evening.Even Once the student is at Diksha Academy, they takes care of all the students with some features like Regular Attendance Monitoring, Doubt Counters, Mentorship Programme like Regular Test for self analysis and many more facilities.Summing all it all depends how much you are eager to have your goal completed. For the one with very strong dedication Diksha Academy will serve the purpose best.<br>Thank you....</p>
                    <h4>Aachal Dhole<br><span>IIT Dhanbad</span></h4>
                </div>
            </div>
            <div class="card">
                <div class="imgBox"><img src="images/testimonial/profile5.jpeg"></div>
                <div class="content">
                    <p>At Diksha Acadmy, teachers are always available for help and clearing doubts. The best thing is that you can study at Diksha before and after classes. The way of teaching is helpful to cope with CBSE also.</p>
                    <h4>Kedar Pathade<br><span>IIT BHUBANESHWAR</span></h4>
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
</div>
<a class="image" href="https://api.whatsapp.com/send?phone=8318494801&text=&source=&data=&app_absent="><img src="images/whatsappimg.png"></a>       
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>   
<script src="script.js"></script>
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
