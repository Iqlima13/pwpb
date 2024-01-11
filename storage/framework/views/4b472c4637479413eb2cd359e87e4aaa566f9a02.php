

<?php $__env->startSection('content'); ?>
<h1>Register</h1>
<a href="<?php echo e(route('login')); ?>">Login</a>
<br><br>
<form action="<?php echo e(route('store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label>Nama Lengkap</label><br>
    <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>"><br><br>
    <label>Email Address</label><br>
    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>"><br><br>
    <label>Password</label><br>
    <input type="password" id="password" name="password"><br><br>
    <label>Password confirmation</label><br>
    <input type="password" id="password_confirmation" name="password_confirmation"><br><br>
    <input type="submit" value="Register">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp9\htdocs\cd_iqlima\resources\views/auth/register.blade.php ENDPATH**/ ?>