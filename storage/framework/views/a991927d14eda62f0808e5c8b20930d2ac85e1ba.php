<?php $__env->startSection('judul_halaman', 'Update Buku Baru'); ?>

<?php $__env->startSection('konten'); ?>
<div class="title m-b-md">
                <form action="b2" method="POST">
                <?php echo e(method_field('PUT')); ?>

                    <div class="form-group">
                        <label>id_buku</label></br>
                        <input type="text" name="id_buku" required></br>
                        <label>Judul Buku</label></br>
                        <input type="text" name="judul_buku" required></br>
                        <label>Penerbit</label></br>
                        <input type="text" name="penerbit" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Update"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/buku/form/delete">Delete Buku</a></br>
                <a href = "/buku/form/add">Add Buku</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/buku/update.blade.php ENDPATH**/ ?>