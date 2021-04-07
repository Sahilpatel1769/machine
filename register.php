<?php
include('conn.php');

if(isset($_POST['register']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $birthdate=$_POST['birthdate'];
    $address=$_POST['address'];

    $query="insert into register (fname,lname,email,mobile,birthdate,address) values ('$fname','$lname','$email','$mobile','$birthdate','$address')";
    $result=mysqli_query($conn,$query);
    if($result==false)
    {
        echo "no";
    }
if($result==true){

    echo "<script>
alert('Thank you for Registration')</script>";
header("refresh:1;url=index.php");
}
	
}
?>
<!DOCTYPE html>
<html>
<head>
        <body bgcolor="cyan"> 
	<title>REGISTRATION FORM</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
	 
 
	<center>
	<h1>REGISTRATION FORM</h1>
	</center>
   
	<div style="width: 30%; background-color: lightblue; border: 2px solid gray; border-radius: 10px; margin-left: 535px; padding: 30px; font-weight: 700;">
    <form method="POST" action="" enctype="multipart/form-data">
     
  		
      
      <div class="form-group">
    		<label>FIRST NAME</label>
    		<input type="text" class="form-control" placeholder="Enter Firstname*" name="fname" required="required" >
  		</div>
  		<div class="form-group">
    		<label>LAST NAME</label>
    		<input type="text" class="form-control" placeholder="Enter Lastname*" name="lname" required="required">
  		</div>
  		<div class="form-group">
    		<label>EMAIL</label>
    		<input type="text" class="form-control" placeholder="Enter Email*" name="email" required="required">
  		</div>

          <div class="form-group">
    		<label>MOBILE</label>
    		<input type="text" class="form-control" placeholder="Enter Mobile*" name="mobile" required="required" >
  		</div>

        <div class="form-group">
    		<label>BIRTHDATE</label>
    		<input type="date" class="form-control" placeholder="Enter Birthdate*" name="birthdate" required="required">
  		</div>
  		<div class="form-group">
    		<label>ADDRESS</label>
    		<input type="text" class="form-control" placeholder="Enter Address*" name="address" required="required">
  		</div>
  		
      <input type="submit" name="register" value="REGISTER">
	</form>
	</div>
	
</body>
</html>