<?php $__env->startSection('judul_halaman', 'Cari Judul Berdasarkan Nama Penulis'); ?>


<?php $__env->startSection('konten'); ?>


                <div class="title m-b-md">
                <form action="kategori/v2" method="GET">
                    <div class="form-group">
                        <label>Kategori Buku</label></br>
                        <input type="text" name="kategori_buku" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Cari"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/table/penulis">Search By Penulis</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/table/kategori.blade.php ENDPATH**/ ?>