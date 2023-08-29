

<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Product</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Product image</th>
                                            <th>Discount price</th>
                                            <th>Main price</th>
                                              <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         if(!empty($data_products)){
                                            foreach($data_products as $d){
                                                ?>
                                                <tr>
                                                <td><?php echo $d->id;?></td>
                                                <td><?php echo $d->product_name;?></td>
                                                <td><img src="../upload/product/<?php echo $d->product_img;?>"width="50" height="50"></td>
                                                <td><?php echo $d->discount_price;?></td>
                                                <td><?php echo $d->main_price;?></td>
    
                                                <td><button type="button" class="btn btn-primary">Add</button>
                                                <a href="editprod?editproduct_id=<?php echo $d->id;?>" type="button" class="btn btn-success">Edit</a>
                                                <a href="delete?delproduct_id=<?php echo $d->id;?>" class="btn btn-danger">Delete</button>
    
                                              </td>
                                            </tr>
                                            <?php
                                            }

                                         }
                                         else{
                                            ?>
                                            <tr>
                                            <td> Data Not Found</td>
                                            </tr>
                                         <?php
                                         }
                                        
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                <?php include_once('footer.php')?>