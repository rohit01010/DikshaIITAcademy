<?php 

$con = mysqli_connect("localhost","root","");  
$db = mysqli_select_db($con,"results_database");  

$query_selection = "select * from resultinfo";
$data = mysqli_query($con,$query_selection);
$query_selection_image = "select * from images";
$data_image = mysqli_query($con,$query_selection_image);      
$results = array();

while(($rows_data=mysqli_fetch_assoc($data)) && ($rows_data_image=mysqli_fetch_assoc($data_image))){          
    $lastData = $rows_data['other'];
    $lastDataArray = explode("%",$lastData);
    
    // $lastItemInlist = ;
    
    $givenData = array($rows_data['jeeadvair'],$rows_data['jeeadvcate'],$rows_data['jeemainair'],$rows_data['jeemaincate'],$rows_data['mhtcet'],$rows_data['hsc'],3);

    $listItems = array(["JEE ADV - AIR ".$rows_data['jeeadvair']],["JEE ADV - ".$rows_data['category']." ".$rows_data['jeeadvcate']],["JEE MAIN - AIR ".$rows_data['jeemainair']],["JEE MAIN - ".$rows_data['category']." ".$rows_data['jeemaincate']],["MHT-CET - ".$rows_data['mhtcet']."%"],["HSC BOARD - ".$rows_data['hsc']."%"],array(array($rows_data_image['filename'],$lastDataArray[0],$lastDataArray[1])));

    $resultItem = array();
    for($i=0;$i<7;$i++){
        if($givenData[$i] != 0){
            $resultItem = array_merge($resultItem,$listItems[$i]);
        }
    }
    $resultItem = array($resultItem);
    $results = array_merge($results,$resultItem);
}

// print_r($result);

// $results = [
//     ["JEE ADV - AIR 2644","JEE ADV - OBC 365","JEE MAIN - AIR 3216","JEE MAIN - OBC 515","MHT-CET - 99.94%","HSC BOARD - 99.83%",["images/profile1.jpg","SHASHANK ADKESHWAR","IIT BHU"]],
    
//     ["JEE ADV - AIR 3589","JEE ADV - SC 42","JEE MAIN - AIR 4587","JEE MAIN - SC 63","MHT-CET - 99.83%","HSC BOARD - 84.77%",["images/profile2.jpg","ROHIT BHAGAT","IIT MADRAS"]],
    
//     ["JEE ADV - AIR 5420","JEE MAIN - AIR 4669","MHT-CET - 98.99%","HSC BOARD - 80%",["images/profile3.jpeg","KEDAR PATHADE","IIT BHUBANESHWAR"]],

//     ["JEE ADV - SC 1155","JEE MAIN - SC 1009","MHT-CET - 97.40%","HSC BOARD - 79.23%",["images/profile4.jpg","NAGSEN WAGHMARE","IIT BHUBANESHWAR"]]    
// ];

$noOfResultCards = sizeof($results);

// echo $noOfResultCards;


//RECORD OPERATIONS ....


//inserting new records
if(isset($_POST['submitTOinsert'])){    

    //establishing connection to database
    // $conn = mysqli_connect('localhost','root','');
    // mysqli_select_db($conn,'results_database');

    
    //checking connection
    if($con){
        echo "sucess";    
    }else{
        echo "failed";
    }

    //taking input from form 
    $jeeadvair = empty($_POST['jeeadvair']) ? 0 : $_POST['jeeadvair'];
    $jeemainair = empty($_POST['jeemainair']) ? 0 : $_POST['jeemainair'];  
    $mhtcet = empty($_POST['mhtcet']) ? "" : floatval($_POST['mhtcet'])."%";
    $hsc = empty($_POST['hsc']) ? "" : floatval($_POST['hsc'])."%";
    $category = empty($_POST['category']) ? "" : $_POST['category'];
    if($category != "OPEN"){
        $jeeadvcate = $_POST['jeeadvcate'];
        $jeemaincate =$_POST['jeemaincate'];
    }
    else{
        $jeeadvcate = 0;
        $jeemaincate = 0;
    }
    $other = (empty($_POST['name']) || empty($_POST['college'])) ? "" : $_POST['name']."%".$_POST['college'];


	$filename = $_FILES["image"]["name"]; 
	$tempname = $_FILES["image"]["tmp_name"];	 
	$folder = "images/".$filename; 	


    //creating query
    $query = " insert into resultinfo (jeeadvair,jeeadvcate,jeemainair,jeemaincate,mhtcet,hsc,other,category) values ('$jeeadvair','$jeeadvcate','$jeemainair','$jeemaincate','$mhtcet','$hsc','$other','$category')";

    //firing query
    mysqli_query($con,$query);
    
    mysqli_query($con,"insert into images (filename) values ('$filename')");

	// Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)) { 
        echo "Image uploaded successfully"; 
    }else{ 
        echo "Failed to upload image"; 
    } 
  
    header("Location: http://localhost/rohit/dikshaAcademy%20final/admin.php");
} 

//deleting records corresponding to id
if(isset($_POST['submitTOdelete'])){    

    // $con = mysqli_connect('localhost','root','');
    // mysqli_select_db($con,'results_database');   
    
    $id = $_POST['id']; 

    $ItemTodelete = mysqli_fetch_assoc(mysqli_query($con,"SELECT `id`, `filename` FROM `images` WHERE `images`.`id`= $id"));

    $delQuery = " DELETE FROM `resultinfo` WHERE `resultinfo`.`id` = $id";
    $delImageQuery = " DELETE FROM `images` WHERE `images`.`id` = $id";
   
    mysqli_query($con,$delQuery);
    mysqli_query($con,$delImageQuery);    

    // PHP program to delete image 
    $file_path = "images/".$ItemTodelete['filename']; 
    unlink($file_path);      

    header("Location: http://localhost/rohit/dikshaAcademy%20final/admin.php");
}

//uploading Slideshow images
if(isset($_POST['submitTOupload'])){    
    
    //checking connection
    if($con){
        echo "sucess";    
    }else{
        echo "failed";
    }

    //taking input from form 
	$filename = $_FILES["slideshow_image"]["name"]; 
	$tempname = $_FILES["slideshow_image"]["tmp_name"];	 
	$folder = "images/slideshow_Photos/".$filename; 	
    
    mysqli_query($con,"insert into slideshow (filename) values ('$filename')");
    // echo $filename;

	// Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)) { 
        echo "Image uploaded successfully"; 
    }else{ 
        echo "Failed to upload image"; 
    } 
  
    header("Location: http://localhost/rohit/dikshaAcademy%20final/admin.php");
} 

//Updating slideshow images ...
if(isset($_POST['submitTOupdateimage'])){    
    
    //checking connection
    if($con){
        echo "sucess";    
    }else{
        echo "failed";
    }

    //taking input from form 
    $id = $_POST['imageid'];
	$filename = $_FILES["slideshow_image"]["name"]; 
	$tempname = $_FILES["slideshow_image"]["tmp_name"];	 
	$folder = "images/slideshow_Photos/".$filename; 	
    
    $resultQue = mysqli_query($con,"UPDATE slideshow SET filename='$filename' WHERE id='$id'");
    
    if($resultQue){
        echo "sucess ".$resultQue;
    }
    else{
        echo "failed ".$con->error;
    }

	// Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)) { 
        echo "Image uploaded successfully"; 
    }else{ 
        echo "Failed to upload image"; 
    } 
  
    header("Location: http://localhost/rohit/dikshaAcademy%20final/admin.php");
} 

//deleting slideshow images corresponding to id
if(isset($_POST['submitTOdeleteimage'])){    

    // $con = mysqli_connect('localhost','root','');
    // mysqli_select_db($con,'results_database');
        
    $id = $_POST['imageidTodelete']; 

    $ItemTodelete = mysqli_fetch_assoc(mysqli_query($con,"SELECT `id`, `filename` FROM `slideshow` WHERE `slideshow`.`id`= $id"));
    

    $delImageQuery = "DELETE FROM `slideshow` WHERE `slideshow`.`id` = $id";
   
    mysqli_query($con,$delImageQuery);    
    // PHP program to delete image 
    $file_path = "images/slideshow_Photos/".$ItemTodelete['filename']; 
    unlink($file_path);  

    header("Location: http://localhost/rohit/dikshaAcademy%20final/admin.php");
}

if(isset($_POST['submitTOgallery'])){ 
    
    echo "submit to gallery<br>";  // remove

    $folder = $_POST['folder'];
    
    // $targetDir = "uploads/"; 
    $targetDir = "images/gallery/".$folder; 	
    
    if(!(is_dir($targetDir))){
        mkdir($targetDir);
        $insertOrupdate = false;
    }
    else{
        $year = $folder;
        $insertOrupdate = true;
        
        $resultsTemp = mysqli_query($con,"select id, filename, year from galleryimages where year='$year'");
        if ($resultsTemp->num_rows > 0) {
            while($rowOftemp = mysqli_fetch_assoc($resultsTemp)) {
                $valueofFilename = $rowOftemp["filename"];
            }
          } else {
            echo "0 results<br>";
        }
        
    }


    $allowTypes = array('jpg','png','jpeg','gif','JPG','PNG','JPEG','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    
    $fileNames = array_filter($_FILES['files']['name']); 
    
    
    foreach($_FILES['files']['name'] as $key=>$val){ 
        // File upload path 
        $fileName = basename($_FILES['files']['name'][$key]); 
        $targetFilePath = $targetDir . "/" . $fileName; 
        echo $targetFilePath."<br>";               // remove
        
        // Check whether file type is valid 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server
            echo "allowed<br>"; 
            if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                // Image db insert sql 
                $insertValuesSQL .= "(".$fileName."),";
          
                echo "moved <br>";

            }else{ 
                $errorUpload .= $_FILES['files']['name'][$key].' | '; 
            } 
        }else{ 
            echo "errorUploadType<br>";
            $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
        } 
    } 
     
    if(!empty($insertValuesSQL)){ 
        $insertValuesSQL = trim($insertValuesSQL, ','); 
        // Insert image file name into database 
       
        if($insertOrupdate){
            $temporary = $valueofFilename.",".$insertValuesSQL;
            echo "actual inserted<br>".$temporary."<br>";

            $insert =  mysqli_query($con,"UPDATE `galleryimages` SET `filename`='$temporary' WHERE `galleryimages`.`year` = '$year'");
        }
        else{
            $insert =  mysqli_query($con,"INSERT INTO `galleryimages` (`id`, `filename`,`year`) VALUES (NULL, '$insertValuesSQL', '$folder')");
        }


        echo "inserted<br>".$insertValuesSQL."<br";

        if($insert){ 
            echo "isertion successful<br>";
            $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
            $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
            $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
            $statusMsg = "Files are uploaded successfully.".$errorMsg; 
        }else{ 
            echo "isertion failed<br>";
            $statusMsg = "Sorry, there was an error uploading your file."; 
        } 
    }
    else{
        echo "empty(insertValuesSQL)";
    } 

    echo $statusMsg;    

    header("Location: http://localhost/rohit/dikshaAcademy%20final/admin.php");
}

//deleting slideshow images corresponding to id
if(isset($_POST['submitTOdeletegallery'])){    

    // $con = mysqli_connect('localhost','root','');
    // mysqli_select_db($con,'results_database');
        
    $year = $_POST['yearTodeletegallery']; 

    $delgalleryQuery = "DELETE FROM `galleryimages` WHERE `galleryimages`.`year` = $year";
   
    mysqli_query($con,$delgalleryQuery);    

    // PHP program to delete all 
    // file from a folder and folder too
    $folder_path = "images/gallery/".$year; 
    
    $files = glob($folder_path.'/*');  
    
    // Deleting all the files in the list 
    foreach($files as $file) { 
        if(is_file($file))
            unlink($file);  
    } 

    rmdir($folder_path);


    header("Location: http://localhost/rohit/dikshaAcademy%20final/admin.php");
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
