<?php $__env->startSection('judul_halaman', 'Hapus Buku Baru'); ?>


<?php $__env->startSection('konten'); ?>


                <div class="title m-b-md">
                <form action="p4" method="POST">
                <!-- @csrf_field  -->
                <?php echo e(method_field('DELETE')); ?>

                    <div class="form-group">
                        <label>id_penulis</label></br>
                        <input type="text" name="id_penulis" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Delete"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/penulis/form/update">Update Penulis</a>
                <a href = "/penulis/form/add">Add Penulis</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/penulis/delete.blade.php ENDPATH**/ ?>