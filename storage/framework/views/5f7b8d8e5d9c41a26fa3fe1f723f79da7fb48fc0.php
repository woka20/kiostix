<?php $__env->startSection('judul_halaman', 'Hapus Buku Baru'); ?>


<?php $__env->startSection('konten'); ?>


                <div class="title m-b-md">
                <form action="b4" method="POST">
                <!-- @csrf_field  -->
                <?php echo e(method_field('DELETE')); ?>

                    <div class="form-group">
                        <label>id_buku</label></br>
                        <input type="text" name="id_buku" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Delete"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/buku/form/update">Update Buku</a>
                <a href = "/buku/form/add">Add Buku</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/buku/delete.blade.php ENDPATH**/ ?>