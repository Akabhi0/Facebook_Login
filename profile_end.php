<?php session_start(); ?>
<!DOCTYPE html>
<html>

  <head>
  
     <title> Profile End </title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="css/bootstrap.css" rel="stylesheet">
	 <link href = "css/costom2.css" rel="stylesheet">

  </head>
    
  <body>
  
	    <div class="rt">
		<br>
		<div>
		<h1> Rt Camp </h1>
		
		<div class="zoo">
        <img class="pic" align="center" id="profile" src="<?php if(isset($_SESSION['FBID']) && $_SESSION['FBID']){ echo "https://graph.facebook.com/".$_SESSION['FBID']."/picture"; } else{ echo "image/pic2.jpg"; } ?>" alt="...">
	    <img class="pic1" align="center" id="profile1" src="<?php if(isset($_SESSION['FBID']) && $_SESSION['FBID']){ echo "https://graph.facebook.com/".$_SESSION['FBID']."/picture"; } else{ echo "image/pic2.jpg"; } ?>" alt="...">
		</div>
	
		<div class="box">
		<?php 
		if (isset($_SESSION['FBID']) && $_SESSION['FBID']) 
		{ ?>
		<div class="well" id="nice">
		<h5> Welcome: <?php echo $_SESSION['FULLNAME']; ?> </h5><br>
		<h5> Facebook ID: <?php echo $_SESSION['FBID']; ?> </h5><br>
		<div class="logout"><a href="logout.php"  ><button type="button"  id="btn1" class="btn btn-default">Logout</button></a></div>
		</div>
		<?php 
		} ?>
		</div>
		</div>
		</div>
		<br>
		
		
	     <form method="post" action="profile_end.php">
		 
		 <div class='woo'>
		 <input type="submit" class="btn btn-default" name="1" value="Facebook Album" id='no1'> 
		 <img  class="f" src="image/f.png" alt="f.png">
		 </div></form> 
		                   
        <div class='woo1'>
		<a href="album.php" > <input type="button" class="btn btn-default"  value="Regulars Album" id='no'>
		<img  class="f" src="image/a.png" alt="a.png"></a>
	    </div>
		
		<?php 
           if(isset($_POST['1'])){
               echo "<h1> there is somthing worrg ";
            }	
            else if(isset($_POST['2'])){
			    ?>
				<div id ="album">
               <?php  include('album.php'); } ?>
				</div>
	         
			 <?php include('plugin.php'); ?>

	 <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>							     
     <script src="js/bootstrap.min.js"></script>

	    
       <footer id="foot">
         &copy: copyright 2016 @ A.K ABHI Ptv Ltd.
       </footer>

</body>
</html>