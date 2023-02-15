
<?php $__env->startSection('content'); ?>
  <weather-detail 
    :_city="'<?php echo e($city); ?>'"
  ></weather-detail>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Projects\weather-forecast\resources\views/weather/details.blade.php ENDPATH**/ ?>