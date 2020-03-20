<?php $__env->startSection('judul_halaman', 'Tambah penulis Baru'); ?>


<?php $__env->startSection('konten'); ?>


                <div class="title m-b-md">
                <form action="penulis/add" method="POST">
                    <div class="form-group">
                        <label>ID Buku</label></br>
                        <input type="number" name="id_buku" required></br>
                        <label>Kategori Buku</label></br>
                        <input type="text" name="kategori_buku" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Tambah"> 
                    </div>
                </form>
                </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/kategori.blade.php ENDPATH**/ ?>