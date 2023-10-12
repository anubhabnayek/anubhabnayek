<?php

if(isset($_SESSION['user'])){
    echo"<script> 
    window.location='login';
    </script>
    ";}?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Online Library Management System | Student Signup</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<script type="text/javascript">
function getState(sid)
{

    $.ajax({
        type: "POST",
		url: "statedata",
		data:"btn=" + sid,
		success: function(data)
		{
			$("#sid").html(data) ;
		}


    });
}

</script>

</script>    

</head>
<body>
    <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Product manager Signup</h4>
                
                            </div>

        </div>
             <div class="row">
           
<div class="col-md-9 col-md-offset-1">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           SINGUP FORM
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post" onSubmit="return valid();">
<div class="form-group">
<label>Enter Full Name</label>
<input class="form-control" type="text" name="fullname" autocomplete="off" required />
</div>


<div class="form-group">
<label>Mobile Number :</label>
<input class="form-control" type="text" name="mobileno" maxlength="10" autocomplete="off" required />
</div>
                                        
<div class="form-group">
<label>Enter Email</label>
<input class="form-control" type="email" name="email" id="email" onBlur="checkAvailability()"  autocomplete="off" required  />
   <span id="user-availability-status" style="font-size:12px;"></span> 
</div>
<div class="form-group">
                            <label for="Gender">Gender<span style="color: red">*</span></label><br>
                            Male:<input type="radio" name="gender" value="male">
                            Female:<input type="radio" name="gender" value="female">
                            Others:<input type="radio" name="gender" value="others">
                        </div>

<div class="form-group">
<label>Enter Password</label>
<input class="form-control" type="password" name="password" autocomplete="off" required  />
</div>

<!-- <div class="form-group">
<label>Confirm Password </label>
<input class="form-control"  type="password" name="confirmpassword" autocomplete="off" required  />
</div> -->

			
			<div class="form-group">
             <label for="city"><span style="color: red">*</span>city:</label>
            <select id="city_id" name="city" onchange="getState(this.value)" required class="form-control">
            	<option>----Select city----</option>
                <?php 
                                if(!empty($city_arr)){
                                    foreach($city_arr as $c){
                                ?>
                                <option value="<?php echo $c->city_id?>"><?php echo $c->city_name?></option>
                                <?php
                                    }
                                }
                                ?>
            </select>
            </div>
           <div class="form-group">
             <label for="state"><span style="color: red">*</span>state:</label>
            <select id="sid" name="state" required class="form-control">
            	<option>----Select state----</option>
            </select>
            </div>
        

                             
<button type="submit" name="submit" class="btn btn-danger" id="submit">Register Now </button>

                                    </form>
                            </div>
                        </div>
                            </div>
        </div>
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
