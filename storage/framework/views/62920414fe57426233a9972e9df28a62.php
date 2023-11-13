

<?php $__env->startSection('main_container'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo e(url('admin/assets/plugins/bootstrap/bootstrap.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(url('admin/assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(url('admin/assets/plugins/pace/pace-theme-big-counter.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(url('admin/assets/css/style.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(url('admin/assets/css/main-style.css')); ?>" rel="stylesheet"/>



</head>

<body>
<div class="col-lg-12">
                    <h1 class="page-header">Add Songs</h1>
                </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Songs
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Songs Name</label>
                                            <input type="text" class="form-control" palaceholder="Enter the name" name="songs_name">
                                             <?php $__errorArgs = ['songs_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="my-3">
                                                    <span class="alert alert-danger"><?php echo e($message); ?></span>
                                                </div>
                                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Songs image</label>
                                            <input type="file" class="form-control" placeholder="Enter text" name="file">
                                            <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="my-3">
                                                    <span class="alert alert-danger"><?php echo e($message); ?></span>
                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Songs</label>
                                            <input type="file" class="form-control" placeholder="Enter text" name="song">
                                            <?php $__errorArgs = ['song'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="my-3">
                                                    <span class="alert alert-danger"><?php echo e($message); ?></span>
                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Songs_categories</label>
                                            <select class="form-control" name="" id="" >
                                                <option value=""  >--select--</option>
                                         </select>
                                         <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="my-3">
                                                    <span class="alert alert-danger"><?php echo e($message); ?></span>
                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                       
                                        <button type="submit" name="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-success">Reset Button</button>
                                    </form>
                                </div>
                               <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.structure', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\Laravel\Musicana _application\resources\views/admin/add_songs.blade.php ENDPATH**/ ?>