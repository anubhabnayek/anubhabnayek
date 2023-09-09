<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="jquery.bvalidator.js" type="text/javascript"></script>
    <style>
    .container{
        /* border:2px solid black; */
        margin-top:35px;

    }
    .heder:hover{
      color:blue;
    }
    .heder{
        text-align:center;
    }
    

    </style>
  <link href="bvalidator.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form1').bValidator();
       
    });
    </script>
</head>
<body>


<form id="form1" method="post">
<div class="container col-md-8">
<h2 style="color: blue; text-align: center;">
                    Form validation using jquery
                </h2>
  <div class="form-group">
    <label for="Name">Name<span style="color: red">*</span></label>
    <input type="text" class="form-control" name="name"  data-bvalidator="required,alpha" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="email">Email<span style="color: red">*</span></label>
    <input type="email" class="form-control" name="email" data-bvalidator="required,email" placeholder="Enter email">
  </div>
 
  <div class="form-group">
    <label for="phone no">phone no<span style="color: red">*</span></label>
    <input type="number" class="form-control" name="phone_no" data-bvalidator="required,number" placeholder="Enter phone number">
  </div>
  <div class="form-group">
    <label for="password">Password<span style="color: red">*</span></label>
    <input type="password" name="password" class="form-control" class="form-control" data-bvalidator="required,minlength[2],maxlength[12]" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="password">Confrimpassword<span style="color: red">*</span></label>
    <input type="password" name="cpassword" class="form-control" class="form-control"  data-bvalidator="required,equalto[pass]" placeholder="Password">
  </div>
  
  
        <input type="submit" name="submit" class="btn btn-primary">
       </div>
  
</form>


    
</body>
</html>