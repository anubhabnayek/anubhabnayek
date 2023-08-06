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
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
   <?php include('includes/header1.php');?>
<body>
   
        <div class="container">
            <div class="row">
                <div class="col-md-8">
               <form action="" method="post" enctype="multipart/form-data">
	             <div class="form-group">
                <label for="name">Search Book</label><br>
                <select name="name" class="form-control" required="">
			    <option>----- Select By Book Name-----</option><br>
	           <?php
               foreach($book_arr as $data)
               {
                ?>
                <option value="<?php echo $data->book_name?>"
            <?php
            if(isset($_REQUEST['name']) && $_REQUEST['name'] != '' &&($data->book_name == $_REQUEST['name']))
            {echo "selected";}?>><?php echo $data->book_name?>
            </option>
         
            <?php
               }
               
               ?>
            </select>
            <br>
            <input type="submit" name="submit" value="search"class="btn btn-primary"><br>
            </form>
            <div class="row why-grids">
                <?php
                if(isset($_REQUEST['submit'])){
                    $search=$_REQUEST['name'];
                    $book_arr=$this->select_search('book','book_name',$search);
                    if($book_arr){
                        foreach($book_arr as $data){

                       ?>
                       <br>
                        <table width="100%">
                               <tr>
                                <td><b>book_id: </b><?php echo $data->book_id?></td>
                               </tr>
                                <tr>
                                <td><b>book_name: </b><?php echo $data->book_name?></td>
                                </tr>
                                <tr>
                                <td><b>author: </b><?php echo $data->author?></td>
                                </tr>
                                <tr>
                                <td><b>Quantity: </b><?php echo $data->Quantity?></td>
                                </tr>
                                <tr>
                                <td><b>price: </b><?php echo $data->price?></td>
                                </tr>
                                <tr>
					            <td colspan="3">-----------------------------------------------------------------------------------------------------------------------</td>
				               </tr>

                    </table>
                    <?php
                   

                    }
                }
                else{

                }
                    }
                

                
                
                ?>
               
            </div>
            </div>
            </div>
            </div>
            
            </body>
            <?php// include('includes/footer.php');?>
