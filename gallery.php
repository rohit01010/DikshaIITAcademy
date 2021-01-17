<?php
include 'resultDatabase.php';

$gallery_image_data = mysqli_query($con,"select * from galleryimages");

$gallery_year = array();
$gallery_filename = array();
$total_size = 0;

while($rows_gallery_image=mysqli_fetch_assoc($gallery_image_data)){ 
    array_push($gallery_year,$rows_gallery_image['year']);
    array_push($gallery_filename,$rows_gallery_image['filename']);
    $total_size++;
}               

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loaderstyle.css">
    <link rel="stylesheet" type="text/css" href="btnstyle.css">
	<link rel="stylesheet" type="text/css" href="galleryStyle.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" href="images/favicon/favicon-16x16.png" type="images/png" sizes="16x16">   
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Gallery</title>
</head>
<body onload="preloader()">

<div id="particles-js"></div>
<script src="particles.js"></script>
<script src="app.js"></script>

<!--<section class="preloaderBox"></section>    -->
<div class="preloaderBox">
    <div class='body'>
        <span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        </span>
        <div class='base'>
            <span></span>
            <div class='face'></div>
        </div>
  </div>
  <div class='longfazers'>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <h1>Loading</h1>
</div>

<?php include 'navbar.php'?> 

<section class="galleryContainer">
    <h1>Felicitaion Program Gallery</h1>     
    <div class="list">
        <ul>
        <?php 
            for ($i=($total_size-1); $i >= 0; $i--) { 
        ?>
            <li class="btn" data-filter="<?php echo $total_size-$i; ?>">
                <a href="#" class="<?php if($i == ($total_size-1)){ echo "active"; } ?>">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    <?php echo $gallery_year[$i]; ?>
                </a>
            </li>
        <?php } ?>    
            <!-- <li class="btn" data-filter="2">
                <a href="#">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    2016
                </a>
            </li>
            <li class="btn" data-filter="3">
                <a href="#">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    2015
                </a>
            </li>
            <li class="btn" data-filter="4">
                <a href="#">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    2014    
                </a>
            </li>
            <li class="btn" data-filter="5">
                <a href="#">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    2010
                </a>
            </li>
            <li class="btn" data-filter="6">
                <a href="#">
                    <span class="left"></span>
                    <span class="top"></span>   
                    <span class="right"></span>
                    <span class="bottom"></span>
                    2009
                </a>
            </li> -->
        </ul>
    </div>
    <div class="galleryPhotos">
        <?php 
            for ($i=($total_size-1); $i >= 0; $i--) {
                $imageArray = explode("),(",$gallery_filename[$i]);               
                $imageArray[0] = substr($imageArray[0], 1);
                $imageArray[count($imageArray)-1] = substr($imageArray[count($imageArray)-1], 0, strlen($imageArray[count($imageArray)-1])-1); 
        ?>
        <div class="box <?php if($i==($total_size-1)){ echo "active";} ?> <?php echo ($total_size-$i); ?>">
            <?php
                for ($j=0; $j < count($imageArray); $j++) { 
            ?>
            <div class="imgBox"><img src="images/gallery/<?php echo $gallery_year[$i]."/".$imageArray[$j]; ?>"></div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>

<?php include 'contactBox.php' ?>

<a class="image" href="https://api.whatsapp.com/send?phone=8318494801&text=&source=&data=&app_absent="><img src="images/whatsappimg.png"></a>           
<script>
    $(document).ready(function(){
        $('.btn').click(function(){
            const gallery = $('.galleryPhotos');
            const value = $(this).attr('data-filter');
            $('.box').removeClass('active');
            $('.'+value).addClass('active');
        })
    })
    $(document).ready(function(){
        $('a').click(function(){
            $('a').removeClass('active');
            $(this).addClass('active');
        })
    })
</script>
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
