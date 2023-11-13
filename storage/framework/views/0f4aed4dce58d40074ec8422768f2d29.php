

<?php $__env->startSection('main_container'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo e(url('admin/assets/plugins/bootstrap/bootstrap.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(url('admin/assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(url('admin/assets/plugins/pace/pace-theme-big-counter.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(url('admin/assets/css/style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(url('admin/assets/css/main-style.css')); ?>" rel="stylesheet" />



</head>

<body>
<div class="col-lg-12">
                    <h1 class="page-header">Add songs Category</h1>
                </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add songs Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>songs Category Name</label>
                                            <input type="text" class="form-control" palaceholder="Enter the name" name="category_name">
                                        </div>
                                        <div class="form-group">
                                            <label>songs Category image</label>
                                            <input type="file" class="form-control" placeholder="Enter text" name="category_img">
                                        </div>
                                       
                                       
                                        <button type="submit" name="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-success">Reset Button</button>
                                    </form>
                                </div>
                               <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.structure', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\Laravel\Musicana _application\resources\views/admin/add_songCategory.blade.php ENDPATH**/ ?>