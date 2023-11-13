<?php echo $__env->make('website.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('main_container'); ?>
<?php echo $__env->make('website.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH E:\xamp\htdocs\Laravel\Musicana _application\resources\views/website/layout/structure.blade.php ENDPATH**/ ?>