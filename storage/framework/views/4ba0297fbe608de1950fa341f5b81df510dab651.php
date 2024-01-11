

<?php $__env->startSection('content'); ?>
   <!-- <h1>Data Siswa</h1> 
   <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
     <?php echo csrf_field(); ?>
    </form>
    <br> -->
    <a href="<?php echo e(route('siswa.create')); ?>">Tambah Siswa</a>

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($siswa->nama); ?></td>
            <td><?php echo e($siswa->jk); ?></td>
            <td><?php echo e($siswa->kelas); ?></td>
            <td><?php echo e($siswa->jurusan); ?></td>
            <td>
                <img src="<?php echo e(asset('storage/siswas/'.$siswa->image)); ?>" width="120px" height="120px" alt="">
            </td>
            <td>
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('siswa.destroy', $siswa->id)); ?>" method="POST">
                <a href="<?php echo e(route('siswa.show', $siswa->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                <a href="<?php echo e(route('siswa.edit', $siswa->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">HAPUS</button>
                 </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </table>
    <?php echo e($siswas->links()); ?>

    <?php $__env->stopSection(); ?>

    

<?php echo $__env->make('siswa.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('siswa.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp9\htdocs\cd_iqlima\resources\views/siswa/index.blade.php ENDPATH**/ ?>