

<?php $__env->startSection('content'); ?>

<h1>Dashboard</h1>
<?php if($message = Session::get('success')): ?>
    <p><?php echo e($message); ?></p>
<?php else: ?>
    <p>You are logged in!</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp9\htdocs\cd_iqlima\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>