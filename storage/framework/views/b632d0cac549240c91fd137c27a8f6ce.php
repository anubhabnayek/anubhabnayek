

<?php $__env->startSection('main_container'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />



</head>

<body>
 <!--  page header -->
 <div class="col-lg-12">
                    <h1 class="page-header">Manage songs Category</h1>
                </div>
                 <!-- end  page header -->
                  <div class="row">
                <div class="col-lg-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manage songs Category
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>songs category name</th>
                                            <th>songs category image</th>
                                            <th colspan="3" align="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($data_category)){
                                            foreach($data_category as $d){
                                                ?>
                                                <tr>
                                                <td><?php echo $d->id;?></td>
                                                <td><?php echo $d->category_name;?></td>
                                                <td><img src="../upload/category_emp/<?php echo $d->category_img;?>"width="50" height="50"></td>
                                                <td>
                                                <a href="editcate?editcategory_id=<?php echo $d->id;?>" class="btn btn-success">Edit</a>
                                                <a href="delete?delcate_id=<?php echo $d->id;?>" class="btn btn-danger">Delete</a>
    
                                              </td>                                        
                                            </tr>
                                          <?php

                                            }
                                        }
                                        else{
                                            ?>
                                         <tr>
                                            <td>Data Not found</td>
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
                </div>
                <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.structure', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\Laravel\Musicana _application\resources\views/admin/manage_songs.blade.php ENDPATH**/ ?>