<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <p>Welcome to the weather forecast web application. Please login with your Github user to use the application and view the weather in your city.</p>
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <a href="/auth/redirect" class="btn btn-success">
                                    <?php echo e(__('Use Github')); ?>

                                </a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Projects\weather-forecast\resources\views/auth/login.blade.php ENDPATH**/ ?>