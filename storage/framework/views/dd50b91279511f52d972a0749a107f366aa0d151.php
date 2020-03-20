<?php $__env->startSection('judul_halaman', 'Cari Judul dan Penulis Berdasarkan Kategori Buku'); ?>


<?php $__env->startSection('konten'); ?>


                <div class="title m-b-md">
                <form action="penulis/v1" method="GET">
                    <div class="form-group">
                        <label>Nama Penulis</label></br>
                        <input type="text" name="nama_penulis" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Cari"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/table/kategori">Search By Kategori</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/table/penulis.blade.php ENDPATH**/ ?>