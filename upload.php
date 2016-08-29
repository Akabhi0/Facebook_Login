<html>
<head>
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href = "css/coston4.css" rel="stylesheet">
   <link href="css/fant.css" rel="stylesheet">
   <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>							     
   <script src="js/bootstrap.min.js"></script>
   <script src="js/fancybox.js"></script>
<head>
<body>
</body>
<html>

<?php
include('db.php');

   if(isset($_POST['submit'])){
       
	   $name = $_FILES['file']['name'];
	   $tmp_name =$_FILES['file']['tmp_name'];
	   $localtion = 'uploads/';
	   $target = 'uploads/'.$name;
   
   if(move_uploaded_file($tmp_name,$localtion.$name)){
      
	  
	  $nam = $_POST['name'];
	  $query = mysqli_query($con , "INSERT INTO picture(p_img,p_title) VALUES('".$target."','$nam')");
	  
    }else {
	echo "file not upload";
	}
    }
	else if(isset($_POST['Delete']))
	{
	   $id = $_POST['id'];
	   $query = mysqli_query($con ,"Delete from picture where id = '$id' ");
	}
	  
	   //download code
	   if(isset($_GET['file']) && basename($_GET['file']) == $_GET['file'] ){
	   
	     $filename = $_GET['file'];
         $path = 'uploads/'.$filename;

         if( file_exists($path) && is_readable($path))
         {		 
	       $size = filesize($path);
		   header('content-Type: application/octet-stream');
	       header('content-length:'.$size);
		   header('content-Disposition: attachment; filename='.$filename);
		   header('Content-Transpher-Encoding: Binary');
		 
		 $file = @ fopen($path,'r');
		 if($file){
		  fpassthru($file);
		  exit;
		  }   
	     }
	   }
       $result = mysqli_query($con,"SELECT * FROM picture");
	   
	   while($row=mysqli_fetch_array($result))
	    
		echo "<span class='span'><a href='album.php?file=".$row['p_title']."' title='".$row['p_title']."'>".
		"<img src=".$row['p_img']." &nbsp; class='fancybox-effects-d' id='rocket'>'
		<span class='glyphicon glyphicon-download-alt' <h4> ".$row['id']."</a></span>";
?>
       



