<?php
    ##### RESULT DATABASE CONTAINS RESULTS CARDS DATA #####
    ##### ALSO ALL FORM SUBMISSIONS ARE IN RESULT DATABASE #####
    include 'resultDatabase.php';

    $slideshow_image_data = mysqli_query($con,"select * from slideshow");
?>    

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
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body onload="preloader()" style="overflow:visible">

    <!-- ======= MAIN_CONTAINER ====== -->
    <div class="container">

        <!-- ======= NAVBAR ====== -->
        <?php include 'navbar.php'?>
        <!-- ----- END_OF_NAVBAR ----- -->


        <!-- ======= HERO_SECTION ====== -->
        <section>    
            
            <!-- CONTENT -->
            <div class="content contentInHome">
                <h1>DIKSHA ACADEMY</h1>
                <h3>Education is not preparation for life, Education is life itself.</h3>
            </div>

            <!-- SLIDESHOW -->
            <div class="slideshow"> 
                <div class="slideshow-container">
                    <?php
                        $galleryItems = 0;
                        while($rows_slideshow_image=mysqli_fetch_assoc($slideshow_image_data)){ 
                        $galleryItems++;             
                    ?>
                        <div class="mySlides fade">
                            <div class="numbertext"><?php echo $galleryItems; ?></div>
                            <img src="images/slideshow_Photos/<?php echo $rows_slideshow_image['filename'];?>" style="width:100%">
                        </div>
                    <?php }?>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>
                <div style="text-align:center">
                <?php 
                    $i = 1;
                    while($i <= $galleryItems){ 
                ?>
                    <span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span> 
                <?php $i++; }?>
                </div>
            </div>        

        </section>
        <!-- ----- END_OF_HERO_SECTION ----- -->


        <!-- ======= RESULTS ====== -->
        <div class="results">
            <div class="testimonials">
                <h1>Our Results</h1>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <!-- SWIPER_CARDS -->
                    <?php for ($y = 0; $y < $noOfResultCards; $y++) { ?>                
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="layer"></div>
                                <div class="content">
                                    <p><?php for ($x = 0; $x < 6; $x++) {
                                        if($x < (sizeof($results[$y]) - 1)){
                                            if($x == 0){
                                                echo $results[$y][$x];
                                            }
                                            else{
                                                // echo "<br>".$results[$y][$x][0]." - ".$results[$y][$x][1]." ".$results[$y][$x][2];
                                                echo "<br>".$results[$y][$x];
                                            }
                                        } 
                                        else{
                                            echo "<br>";
                                        }
                                    }echo "<br>"?></p>
                                    <div class="imgBox">
                                        <img src="images/<?php echo $results[$y][sizeof($results[$y])-1][0] ?>" >
                                    </div>
                                    <div class="details">
                                        <h2><?php echo $results[$y][sizeof($results[$y])-1][1]."<br><span>".$results[$y][sizeof($results[$y])-1][2]."</span>" ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>    
                    </div>
                </div>        
            </div> 
        </div>
        <!-- ----- END_OF_RESULTS ----- -->


        <!-- ======= ABOUT ====== -->
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
        <!-- ----- END_OF_ABOUT ----- -->


        <!-- ======= TESTIMONIALS ====== -->
        <div class="feedback">
            <h1>What our students have to say:</h1>
            <div class="cardbox">
                <!-- EACH_TESTIMONIALS -->
                <div class="card">
                    <div class="imgBox"><img src="images/testimonial/profile1.jpg"></div>
                    <div class="content testimonialContent">
                        <p>	I got my admission in 8th grade at DIKSHA IIT ACADEMY and my journey for pursuing knowledge started at that moment. Yadav Sir's vast experience and guidance had a great role in helping me into IIT. Not only regarding the academics, but also he inculcated in us the values and his mindful teachings and inspiration will always help me work with confidence for my better future. I've got immense resources and valuable guidance from DIKSHA IIT ACADEMY and Yadav Sir always. And I am really grateful towards Yadav Sir and DIKSHA IIT ACADEMY.</p>
                        <h4>Shashank Adkeshwar<br><span>IIT BHU</span></h4>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox"><img src="images/testimonial/profile2.jpg"></div>
                    <div class="content testimonialContent">
                        <p>From knowing the full form of IIT in 2009 to completing IIT from Roper (Punjab) was an enchanting journey for me many hurdles come in my way during the journey It's DIKSHA IIT Academy and its director Yadav Sir who gave me confidence. Riding on the confidence, I overcome all the hurdles. Yadav Sir played a pivotal role in the process of cracking an exam like IIT JEE and that too staying in Nanded.<br>I owe a lot to DIKSHA IIT and Yadav Sir.</p>
                        <h4>Sneha Kolbudhe<br><span>Dy Manager Power Grid Corporation of India</span></h4>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox"><img src="images/testimonial/profile3.jpg"></div>
                    <div class="content testimonialContent">
                        <p>I am Rohit bhagat, Joined Diksha iit Academy when I was in 11th grade under the two year classroom program.
                            The teachers are great in teaching. They made me understand each concepts deeply. Also, they motivated me many times towards study which boost my preparation and confidence. The class tests they conduct consist of variety of questions and there doubt session  helped me alot.<br>I really want to thank  Diksha Academy specially yadav sir for making me such a successful person.</p>
                        <h4>Rohit bhagat<br><span>IIT MADRAS</span></h4>
                    </div>
                </div>            
                <div class="card">
                    <div class="imgBox"><img src="images/testimonial/profile4.jpg"></div>
                    <div class="content testimonialContent">
                        <p>'Surround yourself with good people and good things will happen'<br>It's very true sentence with environment of Diksha Academy. I studied in diksha from 8th to 12th , the foundation helps me a lot. Whatever am I is only due to teachers of diksha, they not only make me a student but better person too. I am incredibly grateful to diksha.</p>
                        <h4>Sejal Lade <br><span>Nit bhopal</span></h4>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox"><img src="images/testimonial/profile6.jpg"></div>
                    <div class="content testimonialContent">
                        <p>Studied at Diksha Academy, Currently pursuing Batchelor of technology in Indian institute of technology Indore.<br>"Diksha is the best coaching institute for jee preparation. I feel really lucky to be a part of such a great institute. They always motivated me and all other students to work hard and stay focused, that's why I became more disciplined towards my studies.<br>Teachers told us the way to do homework and way to attempt paper so that we can use knowledge effectively.My time at Diksha Academy has been through knowledge, skill, competition, interactions with one of the wisest persons of my life and above all a great experience that made me worthy of getting into IIT.<br>I strongly recommend Diksha Academy for preparation of jee which have excellent teaching."<br>Thank you...</p>
                        <h4>Aboli Dhawale<br><span>IIT Indore</span></h4>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox"><img src="images/testimonial/profile7.jpeg"></div>
                    <div class="content testimonialContent">
                        <p>Studied at Diksha Academy, Currently persuing Batchelor of technology in Indian institute of technology Dhanbad.<br>I am proud that I am a student of Diksha Academy.<br>From the above line you can pretty assume my review about Diksha Academy.I heard about Diksha Academy from my Sanskrit Teacher in 10 th, the coaching which made a small city like this a topic to talk on by producing  toppers  in various national level examinations. I have studied from Diksha Academy in  2017-2019.It had a very big role in my selection in IIT JEE.They had one of the best teachers. They used to focus on each and every student .They helped a lot to students even after the class were off.<br>We could always meet with our teachers to discuss our doubts and troubles. They have doubt counters running from morning to evening.Even Once the student is at Diksha Academy, they takes care of all the students with some features like Regular Attendance Monitoring, Doubt Counters, Mentorship Programme like Regular Test for self analysis and many more facilities.Summing all it all depends how much you are eager to have your goal completed. For the one with very strong dedication Diksha Academy will serve the purpose best.<br>Thank you....</p>
                        <h4>Aachal Dhole<br><span>IIT Dhanbad</span></h4>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox"><img src="images/testimonial/profile5.jpeg"></div>
                    <div class="content testimonialContent">
                        <p>At Diksha Acadmy, teachers are always available for help and clearing doubts. The best thing is that you can study at Diksha before and after classes. The way of teaching is helpful to cope with CBSE also.</p>
                        <h4>Kedar Pathade<br><span>IIT BHUBANESHWAR</span></h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= CONTACT_SECTION ====== -->
        <?php include 'contactBox.php'?>

    </div>
    <!-- ----- END_OF_MAIN_CONTAINER ----- -->

    <!-- WHATSAPP_ICON -->
    <a class="image" href="https://api.whatsapp.com/send?phone=+918318494801&text=Hello+sir,+I+saw+Diksha+Academy+website+and+want+to+know+more+about+it&source=&data=&app_absent="><img src="images/whatsappimg.png"></a>       


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>   
    <script src="skrollr.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript">
	    var s = skrollr.init();
	</script>
    </body>
</html>

