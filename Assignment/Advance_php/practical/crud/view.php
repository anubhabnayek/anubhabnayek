<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
 
</head>
<body>
<h2 style="color: blue; text-align: center;">
                    Data Display
                </h2>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">date of birth</th>
      <th scope="col">Phone no</th>

      <th scope="col">Gender</th>
      <th scope="col">Language</th>
      <th scope="col">file</th>
      <th colspan="3" align="center">Action</th>

 </tr>
  </thead>
  <tbody>
    <?php
    if(!empty($data_display)){
        foreach($data_display as $d){
            ?>
            <tr>
      
            <td><?php echo $d->std_id?></td>
            <td><?php echo $d->name?></td>
            <td><?php echo $d->email?></td>
            <td><?php echo $d->date_of_birth?></td>
            <td><?php echo $d->phone_no?></td>
            <td><?php echo $d->gender?></td>
            <td><?php echo $d->language?></td>
            <td><img src="upload/<?php echo $d->file?>"height="50px" width="50px"></td>
            <td> <a href="index" type="button" class="btn btn-primary">Add</a>
                <a href="edit?edit_id=<?php echo $d->std_id?>" type="button" class="btn btn-success">Edit</a>
                <a href="delete?delete_id=<?php echo $d->std_id?>" type="button" class="btn btn-danger">Delete</a>
        </td>
          </tr>
<?php
        }
    }
    
    ?>
   
    
  </tbody>
</table>
</body>
</html>