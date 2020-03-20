<?php $__env->startSection('judul_halaman', 'Update Buku Baru'); ?>

<?php $__env->startSection('konten'); ?>
<div class="title m-b-md">
                <form action="p2" method="POST">
                <?php echo e(method_field('PUT')); ?>

                    <div class="form-group">
                        <label>id_penulis</label></br>
                        <input type="text" name="id_penulis" required></br>
                        <label>ID Buku</label></br>
                        <input type="text" name="id_buku"></br>
                        <label>Nama Penulis</label></br>
                        <input type="text" name="nama_penulis" required></br>
                        <label>Gender</label></br>
                        <input type="text" name="Gender" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Update"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/penulis/form/delete">Delete Penulis</a></br>
                <a href = "/penulis/form/add">Add Penulis</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/penulis/update.blade.php ENDPATH**/ ?>