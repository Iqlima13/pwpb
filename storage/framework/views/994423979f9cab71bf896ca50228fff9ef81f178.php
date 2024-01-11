<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<script>
    //message with toastr
    <?php if(session()->has('success')): ?>

    alert('<?php echo e(session('success')); ?>');


    <?php elseif(session()->has('error')): ?>

    alert('<?php echo e(session('error')); ?>')

    <?php endif; ?>
</script><?php /**PATH C:\xampp9\htdocs\cd_iqlima\resources\views/siswa/footer.blade.php ENDPATH**/ ?>