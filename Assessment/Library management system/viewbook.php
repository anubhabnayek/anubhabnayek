<?php
if(!($_SESSION['user'])){
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
                    <h4 style="color:black;" class="header-line">BOOK LIST</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default"style="border-style: solid,1px;
  border-color: black;">
                        <div class="panel-heading" style="background-color:#7FFFD4;">
                           <b> BOOK</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                       <th><b>book_id</b></th>

                                            <th>book_name</th>
                                            <th>category</th>
                                            <th>author</th>
                                            <th>quantity(s)</th>
                                            <th>price</th>


                                            <?php if( (isset($_GET['delete_book']) && ($_GET['delete_book'] == "true")) || (isset($_GET['edit_book']) && ($_GET['edit_book'] == "true")) ) { ?>

                                            <th colspan="3" align="center">Action</th>
                                                  <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($book_arr)){
                                            foreach($book_arr as $b){
                                                ?>
                                                <tr>
                                                <td><?php echo $b->book_id?></td>
                                                <td><?php echo $b->category?></td>
                                                <td><?php echo $b->book_name?></td>
                                                <td><?php echo $b->author?></td>
                                                <td><?php echo $b->Quantity?></td>
                                                <td><?php echo $b->price?></td>


                                                <?php //if(!isset($_GET['action'])) { 
                                                    /*var_dump(isset($_GET['delete_book']));
                                                        var_dump($_GET['delete_book'] == "true");
                                                        var_dump($_GET);*/?>

                                            <?php if( (isset($_GET['delete_book']) && ($_GET['delete_book'] == "true")) || (isset($_GET['edit_book']) && ($_GET['edit_book'] == "true")) ) { ?>
                                                <td>
                                                <?php if( isset($_GET['edit_book']) && $_GET['edit_book'] == "true") { ?>
                                                    <a href="edit?edit_book_id=<?php echo $b->book_id;?>"class="btn btn-primary">Edit</a>
                                                <?php } ?>
                                                <?php if( isset($_GET['delete_book']) && $_GET['delete_book'] == "true" ) { ?>
                                                    <a href="delete?del_book_id=<?php echo $b->book_id;?>"class="btn btn-danger">Delete</a>
                                                <?php } ?>
                                                </td>
                                             <?php } ?>

                                             <?php //} ?> 
                                            </tr>
                                            <?php
                                            }
                                        }
                                    
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                <?php// include_once('footer.php')?>
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