<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | User Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<?php
if(!($_SESSION['user'])){
    echo"<script> 
    window.location='login';
    </script>
    ";}
    ?>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
    

</form>
    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Book
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="" method="post">
                                       
                                    <div class="form-group">
                                           <label>Category</label>
                                           <input type="text" name="category" value="<?php echo $fetch->category;?>" class="form-control" value="<?php if(isset($_GET['category']) && $_GET['category'] != '') { echo $_GET['category']; } ?>" placeholder="Category">
                                       </div>


                                       <div class="form-group">
                                           <label>Book Name</label>
                                           <input type="text" name="book_name" class="form-control" value="<?php echo $fetch->book_name;?>" placeholder="Book Name" value="">
                                       </div>

                                       <div class="form-group">
                                           <label>Author</label>
                                           <textarea name="author" class="form-control"  placeholder="Author" ><?php echo $fetch->author;?></textarea>
                                       </div>

                                       <div class="form-group">
                                           <label>Quantity</label>
                                           <input type="number" name="Quantity" class="form-control"value="<?php echo $fetch->Quantity;?>" placeholder="quantity">
                                       </div>

                                       <div class="form-group">
                                           <label>Price	</label>
                                           <input type="text" name="price" class="form-control"value="<?php echo $fetch->price;?>" placeholder="price">
                                       </div>
                                       
                                       <input type="submit" name="submit" class="btn btn-primary" value="Edit">
                                      
                                   </form>

                                </div>
                               
                            </div>
                        </div>
                    </div>

                    </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>