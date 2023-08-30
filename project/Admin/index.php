<?php
if(isset($_SESSION['admin']))
{
    echo"<script>
    window.location='dashboard';
    </script>";
}

?>
<script>
        function validate() {
            var email = document.getElementById("anm").value;
            var password = document.getElementById("apsw").value;

            // Validate if both fields are empty
            if (email === "" || password === "") {
                document.getElementById("errorDiv1").innerText = "username are required.";
                document.getElementById("errorDiv").innerText = "password are required.";
                return false;
            }
            if(!(password.length >=3  && password.length <= 8))
	{ 
            document.getElementById("errorDiv2").innerText ="Please,provide min 3 & max 8 char in pass.";

		//alert('Please,provide min 3 & max 8 char in pass');
		return false;
	}
	

            // Reset error message
            // document.getElementById("errorDiv").innerText = "";

            // // Continue with your login validation
            // if (username === "email" && password === "password") {
            //     alert("Login successful!");
            //     // Here, you can redirect the user or perform other actions.
            // } else {
            //     alert("Invalid email or password. Please try again.");
            // }
        }
        </script>




<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <div class="col-md-12">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-cent">
            <h2 style="color:blue;text-align:center;"> Login From </h2>            
        </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="" method="post" onsubmit="return validate()">
                            
                                    <h5>Enter Details to Login</h5>
                                       <br/>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="anm" id="anm" class="form-control" placeholder="Your Username " />
                                            <div id="errorDiv1" style="color: red;"></div>

                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="apsw" id="apsw" class="form-control"  placeholder="Your Password"/>
                                            <div id="errorDiv" style="color: red;"></div>

                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pul
                                            l-right">
                                                   <a href="index" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                        <button type="submit" name="submit" >submit</button>
                                    <hr />
                                    Not register ? <a href="index.php" >click here </a> or go to <a href="index">Home</a> 
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>

