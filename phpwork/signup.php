<?php
if(isset($_POST["submit"]))
{
  $host_name="localhost";
  $db_username="root";
  $db_password="";
    $db_name="data";
  
   $F_name=$_POST["firtName"];
   $L_name=$_POST["lastname"];
   $age=$_POST["age"];
   $dateofbirth=$_POST["dob"];
   $gender=$_POST["gender"];
   $Phone=$_POST["phone"];
    
  
  
  $conn =mysqli_connect( $host_name,$db_username,$db_password,$db_name);
  
  if(mysqli_connect_error()){
    
    die("Database connection failed.");
    
  }
  
  
  $query=  "INSERT INTO col(firstname, lastname, age, dateofbirth, gender, phonenumber)
  VALUES('$F_name','$L_name','$age','$dateofbirth',
        '$gender','$Phone')";
        
        
        $result = mysqli_query($conn,$query);
    if(!$result)
    {
      die( "<br>Query execution failed: " 
            . mysqli_error($conn));
    }
    else {
      echo "Data successfuly saved";
      
    }
    
      mysqli_close($conn);
   }//end of else 



?>


<!DOCTYPE html>
<html>
	<head>
		<script>
	function Validate(form)
	{
		
		if(form.F&Lname.value=="")
		{
			document.getElementById("F&Lname_error").innerHTML="Please Enter your Product ID";
			return false;
		}
		if(form.login_password.value=="")
		{
			document.getElementById("password_error").innerHTML="Please Enter Product Name";
			return false;
		}
      return true;
		}
	</script>
		<meta charset="utf-8">
		<title>sign up form</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div><h2>Enter Your Information Data Here...</h2></div>
			<div class="row" style="margin-top: 8px">
               <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		           <div style="border-color: #fce8f1">
			         <div class="bg-info">
				          <form action="" method="post" name="myform">
					        <div class="form-group">
						     <label for="myName"><h4>First Name *</h4></label>
						     <input id="myName" name="firtName" class="form-control" type="text" data-validation="required" placeholder="Enter Your First Name" style=" background-color:#eaeae1" >
						     <span id="error_name" class="text-danger"></span>
					        </div>
					        <div class="form-group">
						     <label for="lastname"><h4>Last Name *</h4></label>
						     <input id="lastname" name="lastname" class="form-control" type="text" data-validation="email" placeholder="Enter Your Last Name" style=" background-color:#eaeae1">
						     <span id="error_lastname" class="text-danger"></span>
					        </div>
					        <div class="form-group">
						     <label for="age"><h4>Age *</h4></label>
						     <input id="age" name="age"  class="form-control" type="number" min="18" placeholder="Enter Your Age" style=" background-color:#eaeae1">
						     <span id="error_age" class="text-danger"></span>
					        </div>
					        <div class="form-group">
						     <label for="dob"><h4>Date Of Birth *</h4></label>
						     <input type="date" name="dob" id="dob" class="form-control" style=" background-color:#eaeae1">
						     <span id="error_dob" class="text-danger"></span>
					        </div>
					        <div class="form-group">
						     <label for="gender"><h4>Gender</h4></label>
						     <select name="gender" id="gender" class="form-control" style=" background-color:#eaeae1">
							  <option selected>Male</option>
							  <option>Female</option>
							  <option>Other</option>
						     </select>
						     <span id="error_gender" class="text-danger"></span>
					        </div>
					        <div class="form-group">
						     <label for="phone"><h4>Phone Number *</h4></label>
						     <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number" style=" background-color:#eaeae1" >
						     <span id="error_phone" class="text-danger"></span>
					        </div>
					
					        <button name="submit" id="submit" type="submit" value="submit" class="btn center btn-lg btn-block" style="background-color: #0080ff">Submit</button>
				          </form>
				        </div>
				    </div>
		        </div>
	        </div>
        </div>
	</div>
		
	
</body>
</html>