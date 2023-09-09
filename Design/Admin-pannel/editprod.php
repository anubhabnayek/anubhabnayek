<?php include_once('header.php')?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Product</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                        Edit Product 
                        </div>
                        <div class="panel-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>	products name</label>
                                            <input class="form-control" type="text" name="product_name" value="<?php echo $fetch->product_name;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>	Discount price</label>
                                            <input class="form-control" type="number" name="discount_price"value="<?php echo $fetch->discount_price;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Main price</label>
                                            <input class="form-control" type="number" name="main_price" value="<?php echo $fetch->main_price;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Product image</label>
                                            <input class="form-control" type="file" name="product_img">
                                            <img src="../upload/product/<?php echo $fetch->product_img;?>"width="100" height="100">
                                        </div>
                                 <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" type="text" name="description" value="<?php echo $fetch->description;?>">
                                        </div>
                                            
                                  
                                 
                                        <button type="submit" name="submit" class="btn btn-info">Save</button>

                                    </form>
                            </div>
                        </div>
                            </div>
                           </div>
                            <?php include_once('footer.php')?>