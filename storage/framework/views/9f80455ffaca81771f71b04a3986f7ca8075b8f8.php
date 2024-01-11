<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


<div class="container">
<h1>Data Siswa</h1>
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?php echo e(route('siswa.index')); ?>">Data siswa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="">Data jurusan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
  </li>
</ul>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
     <?php echo csrf_field(); ?>
    </form>
    <br>
    <?php echo $__env->yieldContent('content'); ?>
</div>

<?php /**PATH C:\xampp9\htdocs\cd_iqlima\resources\views/siswa/header.blade.php ENDPATH**/ ?>