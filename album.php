<html>

<head>

<title> the gallary </title>

   <link href="css/bootstrap.css" rel="stylesheet">
   <link href = "css/album.css" rel="stylesheet">
 
<head>

<body>
<div id="box">
<?php include('upload.php');?>

<form action="album.php" method="POST" enctype="multipart/form-data" id="im">

   <input type="file" name="file" id="file">
    
   <div class="input-group">	
   <span class="input-group-btn">
   <input type="text" name="name" id="t" class="form-control" >
   </span>
   <input class="btn btn-default" type="submit" name="submit" id="b" value="Select">
   </div>
   
    <div class="input-group">
    <span class="input-group-btn">
    <input type="text" name="id" id="i" class="form-control" placeholder="enter pic id to be deleted" >
    </span>
    <input class="btn btn-default" type="submit" name="Delete" id="c" value="Delete">
   </div>
  
  </div>
</form>

</div>
      
	        <div class="input-group">
            <a href = "profile_end.php"> <input class="btn btn-default" id="btn" type="button" name="back" value="  <<- go back to profile pic"> </a>
            </div>
	           
			   
			   
              <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>							     
              <script src="js/bootstrap.min.js"></script>
              <script src="js/fancybox.js"></script>
	
<body>
<html>