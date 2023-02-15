<?php $__env->startSection('content'); ?>
<home-page
    :_user="<?php echo e(user()); ?>"
></home-page>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Projects\weather-forecast\resources\views/home.blade.php ENDPATH**/ ?>