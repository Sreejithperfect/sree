<?php
include("config/db.php");
?>
<html>
<head>
<title>Register</title>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/style.css" type="text/css">

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
          <li><a href="about.php">&nbsp About us &nbsp;&nbsp; &nbsp;&nbsp;</a></li>
     <li><a href="contacts.php "> &nbsp Contact us &nbsp;&nbsp; &nbsp;&nbsp;</a></li>
    
    </ul>
	</div>
	</nav>
	</div> 
	<div class="row">
	 <div class="col-md-8">
 <center> 
 
 <h1 style="font-weight: bold"> Admin <span style="color: tomato"> Register</span> </h1>
 <br>

<form method="post" enctype="multipart/form-data">
<center><h3>User Name</h3></center></td>


<input type="text" name="username" placeholder="" style="width:400px"/>
<br>
<center><h4>Password</h4></center>
<input type="password" name="password" placeholder="" style="width:400px"/>
<br>
<br>
<center><input type="submit" name="Register" value="Register"  /></center>


</form>
</div>
</body>
</html>
<?php
if(isset($_POST['Register'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query2="insert into admin (username,password) values('$username','$password')";
	$runquery2=mysqli_query($con,$query2);
	if($runquery2){
		echo'<script>alert("Account has been register")</script>';
		header('location:login.php');
		$_SESSION['username']=$username;
		
	}
}


?>