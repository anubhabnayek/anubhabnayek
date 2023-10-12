<?php
if(!($_SESSION['role'])|| $_SESSION['role']==1){
    echo"<script> 
    window.location='login';
    </script>
    ";}
    ?>
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
    <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    
    <?php include('includes/header1.php');?>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 style="color:black;" class="header-line">view product</h4>

                </div>
                <div class="text-right">
                                <a href="Add_product" class="btn btn-primary">Add Products</a>
                            </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default"style="border-style: solid,1px;
  border-color: black;">
                        <div class="panel-heading" style="background-color:#7FFFD4;">
                           <b>product</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                       <th><b>id</b></th>
                                      <th>product_img</th>
                                            <th>product_name</th>
                                            <th>product_price</th>
                                            
                                           



                                            <th colspan="3" align="center">Action</th>
                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($product_arr)){
                                            foreach($product_arr as $b){
                                                ?>
                                                <tr>
                                                <td><?php echo $b->id?></td>
											    <td><img src="upload/product/<?php echo $b->product_img;?>" height="50px" width="50px"></td>

                                                <td><?php echo $b->product_name?></td>
                                                
                                                <td><?php echo $b->price?></td>


                                              

                                            
                                                <td>
                                                
                                                    <a href="edit?edit_product_id=<?php echo $b->id;?>"class="btn btn-primary">Edit</a>
                                             
                                                    <a href="delete?del_prod_id=<?php echo $b->id;?>"class="btn btn-danger">Delete</a>
                                                <?php }} ?>
                                                </td>
                                           
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
               
                    <!--End Advanced Tables -->
                </div>
            </div>
            <!-- /. ROW  -->
            <!-- /. ROW  -->

            <!-- /. ROW  -->
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2014 Yourdomain.com |<a href="http://www.binarytheme.com/" target="_blank"> Designed by :
                        binarytheme.com</a>
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
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>

</html>