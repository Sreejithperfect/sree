<?php
 include("config/db.php");
 @$get=$_GET['id'];

?>
<head>
<title>View story</title>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/style.css" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body class="main">
<div class="container"  style="background:white"> 
    <div class="row">
	 <div class="col-md-8">
	 <h2 class="heading">INFiNiTi<span class="active">Traveling Solutions</span> </h2>
	 
	 </div>
	 </div>
	<div class="container"  style="background:white"> 
<nav class="navbar navbar-inverse " style="background-color:#012454">
  <div class="container-fluid">
       	<ul class="nav navbar-header  ">
		 <li><a href="login.php "> &nbsp Admin &nbsp;&nbsp; &nbsp;&nbsp;</a></li>
      <li class="active"><a href="index.php">&nbsp Home &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          <li><a href="about.php">&nbsp About us&nbsp;&nbsp; &nbsp;&nbsp;</a></li>
     <li><a href="contacts.php "> &nbsp Contact us &nbsp;&nbsp; &nbsp;&nbsp;</a></li>
    
    </ul>
	</div>
	</nav>
	</div>
	
		<div class="post">
		 
			<?php
			if($get)
			{	
				
				$select="select * from news where id='$get'";
			}
			
			
			$select_run=mysqli_query($con,$select);
			$count=mysqli_num_rows($select_run);
			if($count>0)
			{
			 while($row=mysqli_fetch_array($select_run))
				 
				 {
					
					$id=$row['id'];
					$name=$row['Name'];
					$text=$row['Text'];
					$date=$row['Date'];
					$img=$row['img'];
					
					 
			?>
			
			<div class="row">
	<div class="col-md-8" style="border:0px solid">  
			<h3 style="font-weight: bold;
			color:black;
				text-align:center;
			"><?php echo $name;?></h3>
			
				<img src="img/<?php echo $img;?>" class="img img-thumbnail" />
			
			
			<h6 style="float:right;">Date : <?php echo $date;?></h6>
			<br/><br/><br/><br/>
			<p style="text-align:justify;">
			<?php echo $text;?>
			</p>
			
<a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a> &nbsp;
<a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>&nbsp;
<a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>&nbsp;
<a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>&nbsp;
			</div>
			</div>
			
			<?php
			}}
			
			
			else{
				echo "<h3><center>NO post available</center></h3>";
			}
			?>
		<br/>
		<br/>
		</div>
			</div>	
	 <br>
	  <br>
	
			<div class="footer">
  <p>Copyright @ 2k19</p>
</div>
</div>
</div>
</body>
</html>