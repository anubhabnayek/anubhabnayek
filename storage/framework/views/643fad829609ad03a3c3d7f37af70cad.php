

<?php $__env->startSection('main_container'); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
   



</head>

<body>
 <!--  page header -->
 <div class="col-lg-12">
                    <h1 class="page-header">user details</h1>
                </div>
                 <!-- end  page header -->
                  <div class="row">
                <div class="col-lg-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        user
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Image</th>
                                            <th>Name</th>
											<th>Email</th>
											<th>Username</th>
                                            <th>Gender</th>
                                            <th>Language</th>
                                           
                                            <th colspan="3" align="center">Action</th>
                                        </tr>
								       </thead>
								       <tbody>
                                        
                                        <?php if(!empty($data_user)): ?>
                                            <?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <tr>
                                                <td><?php echo e($d->id); ?></td>
												<td><img src="<?php echo e(url('/upload/user/'.$d->file)); ?>" width="50px" Height="50px"></td>
                                                <td><?php echo e($d->name); ?></td>
												<td><?php echo e($d->email); ?></td>
												<td><?php echo e($d->username); ?></td>
                                                <td><?php echo e($d->gender); ?></td>
                                                <td><?php echo e($d->language); ?></td>
												<td>
                                             

                                               <a href="<?php echo e(url('/manage_user/'.$d->id)); ?>" class="btn btn-danger">Delete</a>
											   <a href="<?php echo e(url('/status/'.$d->id)); ?>" class="btn btn-primary"><?php echo e($d->status); ?></a>
                                              </td>                                        
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php else: ?>
                                            
                                         <tr>
                                            <td>Data Not found</td>
                                         </tr>

                                                 <?php endif; ?>                             
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
              <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.structure', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\Laravel\Musicana _application\resources\views/admin/manage_user.blade.php ENDPATH**/ ?>