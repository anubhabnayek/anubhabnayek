<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <style>
    .con{height: px;
      width: px;
     margin-left:50px ;
    }
  </style>
</head>
<body>

    @if(session('sucess'))  
     <div class="alert alert-success">
     {{session('sucess')}}
     </div>
     @endif
<div class="con">

<form action=""{{url('/index')}}"" method="post" enctype="multipart/form-data">
<h2 class="text-bg-primary" style="color: blue; text-align: center;">
                   EMPLOYEE CRUD USING  Query Builder
                </h2>
  <div class="form-group">
    @csrf
    <label for="Name">Name<span style="color: red">*</span></label>
    <input type="text" class="form-control" name="name"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="email">Email<span style="color: red">*</span></label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="date_of_birth">date of birth<span style="color: red">*</span></label>
    <input type="date" class="form-control" name="date_of_birth" placeholder="Enter date_of_birth">
  </div>
  <div class="form-group">
    <label for="phone">phone<span style="color: red">*</span></label>
    <input type="text" class="form-control" name="mobile" value="" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="date of birth">user name<span style="color: red">*</span></label>
    <input type="text" class="form-control" name="unm"  placeholder="Enter D.O.B">
  </div>
  <!--<div class="form-group">
                <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
            </div-->
  <div class="form-group">
    <label for="phone no">password<span style="color: red">*</span></label>
    <input type="password" class="form-control" name="pass" placeholder="Enter phone number">
  </div>
  
  <div class="form-group">
    <label for="gender">Gender<span style="color: red">*</span></label>
    Male:<input type="radio" name="gen" value="male">
    Female:<input type="radio" name="gen" value="female">
    other:<input type="radio" name="gen" value="other">
    </div>
	<div class="form-group">
    <label for="department">Department<span style="color: red">*</span></label>
    <input type="text" class="form-control" name="department"  placeholder="Enter department">
  </div>
  <div class="form-group">
    <label for="salary">salary<span style="color: red">*</span></label>
    <input type="number" class="form-control" name="salary"  placeholder="Enter salary">
  </div>
	
 
  
    <div class="form-group">
    <label for="file">file </label>
    <input type="file" name="file" class="form-control-file">
    </div>
    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary">
       </div>
  
</form>
</div>

    
</body>
</html>