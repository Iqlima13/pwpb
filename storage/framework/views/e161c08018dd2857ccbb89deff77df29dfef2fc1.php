

<?php $__env->startSection('content'); ?>

<h1>Login</h1>
<br><br>
<form action="<?php echo e(route('authenticate')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label>Email Address</label><br>
    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>">
    <br><br>
    <label>Password</label><br>
    <input type="password" id="password" name="password"><br><br>
    <a href="<?php echo e(route('register')); ?>" class="btn btn-info">Daftar</a>
    <input type="submit" class="btn btn-danger" value="Login">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp9\htdocs\cd_iqlima\resources\views/auth/login.blade.php ENDPATH**/ ?>