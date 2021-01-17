<?php  
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: http://localhost/rohit/dikshaAcademy%20final/form/form.php");
    exit;
}

$con = mysqli_connect("localhost","root","");  
$db = mysqli_select_db($con,"results_database");  

$query = "select * from resultinfo";
$data = mysqli_query($con,$query);
$image_data = mysqli_query($con,"select * from images");
$slideshow_image_data = mysqli_query($con,"select * from slideshow");

?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Admin</title>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        /* border: 1px solid #fff; */
      }
      body{
        padding: 50px 10px;
        width: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        background-color: #222;
        color: #fff;
      }
      hr{
        background-color: #555;
        height: 4px;
        border-radius: 4px;   
      }
      .table{
        display: block;
        overflow-x: scroll;
        scroll-behavior: smooth;
        width: 100%;
      }
      .table::-webkit-scrollbar {
        /* width: 13px; */
        height: 8px;
        padding: 2px 0;
        background-color: transparent;
      }
      .table::-webkit-scrollbar-button{
        /* width: 20px; */
        width: 1px;
        background-color: transparent;
      }
      .table::-webkit-scrollbar-track{
        /* width: 50px; */
        background-color: transparent;
      }
      .table::-webkit-scrollbar-track-piece{
        /* width: 0px; */
        background-color: transparent;
      }
      .table::-webkit-scrollbar-thumb{
        /* width: 5px; */
        height: 5px;
        background-color: #323232;
        border-radius: 7px;
        border: 0.5px solid rgba(225, 225, 225, 0.4);
        border-bottom: none;
        border-right: none;
        box-shadow: 0 0 2px rgba(225, 225, 225, 0.3);
      }
      .table::-webkit-scrollbar-corner{
        display: none;
      }
      h1,h2{
        text-align: center;
        margin: 30px;
      }
      label{
        font-size: 14px;
        font-weight: 600;
        margin-left: 10px;
      }
      form{
        position: relative;
        max-width: 600px; 
        left: 50%;
        transform: translateX(-50%); 
      }
      select{
        color: #000;
      }
      option{
        color: #000;
      }
      .logOut{
        display: flex;
        justify-content: center;
      }
      .slideshow{
        position: relative;
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: 70vh;
        overflow-y: scroll;
        justify-content: center;
        align-items: center;
        background-color: #333;
        box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.4),
                    0 0 20px rgba(225, 225, 225, 0.4),;
      }
      .slideshow p{
        position: absolute;
        top: 10px;
        left: 15px;
        color: #fff;
        z-index: 3;
      }
      .slideshow img{
        position: relative;
        width: 400px;
        margin: 10px;
      }
      </style>
  </head>
  <body>
    <h1>Welcome Admin!!</h1>
    <form class="logOut" action="form/logout.php" method="post">
      <input class="btn btn-primary" name="log_out" type="submit" value="Log Out">
    </form>
    <hr>
    <div class="result_section">
      <h2>Initial records of Results Section</h2>
      <table class="table table-dark table-striped table-bordered">
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>CATEGORY</th>
          <th>JEE ADV AIR</th>
          <th>JEE ADV (CATEGORY RANK)</th>
          <th>JEE MAINS AIR</th>
          <th>JEE MAINS (CATEGORY RANK)</th>
          <th>MHT-CET PERCENTILE</th>
          <th>HSC</th>
          <th>COLLEGE</th>
          <th>IMAGE</th>
        </tr>
        <?php
          while(($rows=mysqli_fetch_assoc($data)) && ($rows_image=mysqli_fetch_assoc($image_data))){          
            $lastData = $rows['other'];
            $lastDataArray = explode("%",$lastData);
        ?>
        <tr>
          <td><?php echo $rows['id']; ?></td>
          <td><?php echo $lastDataArray[0] ?></td>
          <td><?php echo $rows['category']; ?></td>
          <td><?php echo $rows['jeeadvair']; ?></td>
          <td><?php echo $rows['jeeadvcate']; ?></td>
          <td><?php echo $rows['jeemainair']; ?></td>
          <td><?php echo $rows['jeemaincate']; ?></td>
          <td><?php echo $rows['mhtcet']; ?></td>
          <td><?php echo $rows['hsc']; ?></td>
          <td><?php echo $lastDataArray[1] ?></td>
          <td><img src="images/<?php echo $rows_image['filename'];?>" width="100"/></td>
        </tr>
        <?php } ?>
      </table>
      <form class="formContainer" method="post" action="resultDatabase.php" enctype="multipart/form-data" autocomplete="off">
        <h1>Add new record</h1>

        <div class="input form-group">
          <label>Name</label><br>
          <input class="form-control" name="name" type="text"  required/>
        </div>
        
        <div class="input form-group">
          <label>JEE ADV AIR</label><br>
          <input class="form-control" name="jeeadvair" type="number" min="1"/>
        </div>
        
        <div class="input form-group">
        <label>Category</label><br>
        <select class="form-control" name="category" required>
          <option ><--SELECT--></option>
          <option value="OPEN">OPEN</option>
          <option value="OBC">OBC</option>
          <option value="SC">SC</option>
          <option value="ST">ST</option>
        </select>
        </div>
        
        <div class="input form-group">
          <label>JEE ADV Category Rank</label><br>
          <input class="form-control" name="jeeadvcate" type="number" min="1"/>
        </div>
        
        <div class="input form-group">
          <label>JEE MAIN AIR</label><br>
          <input class="form-control" name="jeemainair" type="number" min="1" />
        </div>
        
        <div class="input form-group">
          <label>JEE MAIN Category Rank</label><br>
          <input class="form-control" name="jeemaincate" type="number" min="1" />
        </div>
        
        <div class="input form-group">
          <label>MHT-CET Percentile</label><br>
          <input class="form-control" name="mhtcet" type="text" />
        </div>
        
        <div class="input form-group">
          <label>HSC Percentage</label><br>
          <input class="form-control" name="hsc" type="text" />
        </div>

        <div class="input form-group">
          <label>Image</label><br>
          <div class="custom-file" style="transform: translateX(-5px);">
            <label class="custom-file-label">Choose Image</label>
            <input type="file" class="custom-file-input" name="image" id="customFile" required />
          </div>
        </div>
        
        <div class="input form-group">
          <label>College</label><br>
          <input class="form-control" name="college" type="text" required/>
        </div>
        
        <input type="submit" name="submitTOinsert" class="btn btn-primary" value="INSERT" />
      </form>

      <form action="resultDatabase.php" method="post" onsubmit="if(!confirm('Are you sure you want to delete this record?')){return false;}">
        <h1>Delete record</h1>
        <div class="input form-group">
          <label>ID</label><br>
          <input class="form-control" name="id" type="number" min="1" />
        </div>
        <input type="submit" name="submitTOdelete" class="btn btn-primary" value="DELETE" />
      </form>
    </div>
    <br><br><hr>
    <!-- Slide show  -->
    <div class="slideshow_section">
      <h1>Slideshow Images</h1>
      <div class="slideshow">
        <?php
          while($rows_slideshow_image=mysqli_fetch_assoc($slideshow_image_data)){          
        ?>
          <div style="position: relative;">
            <p><?php echo $rows_slideshow_image['id']; ?></p>
            <img src="images/slideshow_Photos/<?php echo $rows_slideshow_image['filename'];?>">
          </div>           
        <?php } ?>
      </div>  
      <!-- Add new image -->
      <form class="formContainer" method="post" action="resultDatabase.php" enctype="multipart/form-data" autocomplete="off">
        <h1>Add new image</h1>
          <div class="input form-group">
            <label>Image</label><br>
            <div class="custom-file" style="transform: translateX(-5px);">
              <label class="custom-file-label">Choose Image</label>
              <input type="file" class="custom-file-input" name="slideshow_image" id="customFile" required />
            </div>
          </div>        
        <input type="submit" name="submitTOupload" class="btn btn-primary" value="UPLOAD" />
      </form>
      <!-- Update image -->
      <form class="formContainer" method="post" action="resultDatabase.php" enctype="multipart/form-data" autocomplete="off">
        <h1>Update image</h1>
        <div class="input form-group">
          <label>ID</label><br>
          <input class="form-control" name="imageid" type="number" min="1" required/>
        </div>        
        <div class="input form-group">
          <label>Image</label><br>
          <div class="custom-file" style="transform: translateX(-5px);">
            <label class="custom-file-label">Choose Image</label>
            <input type="file" class="custom-file-input" name="slideshow_image" id="customFile" required />
          </div>
        </div>
        <input type="submit" name="submitTOupdateimage" class="btn btn-primary" value="UPDATE" />
      </form>
      <!-- Delete image -->
      <form class="formContainer" method="post" action="resultDatabase.php" enctype="multipart/form-data" autocomplete="off" onsubmit="if(!confirm('Are you sure you want to delete this image?')){return false;}">
        <h1>Delete image</h1>
        <div class="input form-group">
          <label>ID</label><br>
          <input class="form-control" name="imageidTodelete" type="number" min="1" required/>
        </div>
        <input type="submit" name="submitTOdeleteimage" class="btn btn-primary" value="DELETE" />
      </form>
    </div>
    <hr>
    <!-- Gallery Section -->
    <div class="gallery_section slideshow_section">
      <h1>Gallery Images</h1>
      <div class="slideshow" style="overflow-y: hidden;">
      <iframe width="100%" height="100%" src="http://localhost/rohit/dikshaAcademy%20final/gallery.php" title="W3Schools Free Online Web Tutorials">
      </iframe>
      </div>  
      <form class="formContainer" method="post" action="resultDatabase.php" enctype="multipart/form-data" autocomplete="off">
          <h1>Insert images</h1>
          <div class="input form-group">
              <label>Folder name</label><br>
              <input class="form-control" name="folder" type="text" required/>
          </div>        
          <div class="input form-group">
              <label>Image (MAX 15 images allowed)</label><br>
              <div class="custom-file" style="transform: translateX(-5px);">
                  <label class="custom-file-label">Choose Image</label>
                  <input type="file" class="custom-file-input" name="files[]" id="customFile" multiple required />
              </div>
          </div>
          <input type="submit" name="submitTOgallery" class="btn btn-primary" value="UPLOAD" />
      </form>
      <!-- Delete image -->
      <form class="formContainer" method="post" action="resultDatabase.php" enctype="multipart/form-data" autocomplete="off" onsubmit="if(!confirm('Are you sure you want to delete this record?')){return false;}">
        <h1>Delete image</h1>
        <div class="input form-group">
          <label>Year</label><br>
          <input class="form-control" name="yearTodeletegallery" type="number" min="1" required/>
        </div>
        <input type="submit" name="submitTOdeletegallery" class="btn btn-primary" value="DELETE" />
      </form>
    </div>
    <hr>
<script>

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

</script>
</body>
</html>
