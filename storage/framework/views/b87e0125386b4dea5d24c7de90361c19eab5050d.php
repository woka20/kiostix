<?php $__env->startSection('judul_halaman', 'Tambah Buku Baru'); ?>

<?php $__env->startSection('konten'); ?>


                <div class="title m-b-md">
                <form action="b1" method="POST">
                    <div class="form-group">
                        <label>Judul Buku</label></br>
                        <input type="text" name="judul_buku" required></br>
                        <label>Penerbit</label></br>
                        <input type="text" name="penerbit" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Tambah"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/buku/form/delete">Delete Buku</a></br>
                <a href = "/buku/form/update">Update Buku</a>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/buku/buku.blade.php ENDPATH**/ ?>