<?php $__env->startSection('judul_halaman', 'Tambah penulis Baru'); ?>


<?php $__env->startSection('konten'); ?>


                <div class="title m-b-md">
                <form action="p1" method="POST">
                    <div class="form-group">
                        <label>ID Buku</label></br>
                        <input type="text" name="id_buku" required></br>
                        <label>Nama Penulis</label></br>
                        <input type="text" name="nama_penulis" required></br>
                        <label>Gender</label></br>
                        <input type="text" name="Gender" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Tambah"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/penulis/form/delete">Delete Penulis</a></br>
                <a href = "/penulis/form/update">Update Penulis</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/penulis/penulis.blade.php ENDPATH**/ ?>