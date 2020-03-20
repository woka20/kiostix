

<!DOCTYPE html>
<html>
<head>
	<title>Kiostix Engineer Test </title>
</head>
<body>
    <h1>Hasil</h1>
    <a href="/">Back To Home</a>
   
    <?php if($hasils ?? []): ?>
    <ul>
        <?php $__currentLoopData = $hasils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><Strong>id:</strong><?php echo e($hasil['id_buku']); ?></br>
            <Strong>Judul:</strong><?php echo e($hasil['judul_buku']); ?></br>
            <Strong>Penerbit:</strong><?php echo e($hasil['penerbit']); ?></br>
            </li></br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php elseif($penuliss ?? []): ?>
    <ul>
        <?php $__currentLoopData = $penuliss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penulis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><Strong>id:</strong><?php echo e($penulis['id_penulis']); ?></br>
            <Strong>id_buku:</strong><?php echo e($penulis['id_buku']); ?></br>
            <Strong>Nama Penulis:</strong><?php echo e($penulis['nama_penulis']); ?></br>
            <Strong>Gender:</strong><?php echo e($penulis['Gender']); ?></br>
            </li></br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php elseif($kategoris ?? []): ?>
    <ul>
        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><Strong>id:</strong><?php echo e($kategori['id_kategori']); ?></br>
            <Strong>id_buku:</strong><?php echo e($kategori['id_buku']); ?></br>
            <Strong>Kategori Buku:</strong><?php echo e($kategori['kategori_buku']); ?></br>
            </li></br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php elseif($tables ?? []): ?>
    <ul>
        <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><Strong>Judul Buku:</strong><?php echo e($table['judul_buku']); ?></br>
            <Strong>Nama Penulis:</strong><?php echo e($table['nama_penulis']); ?></br>
            <Strong>Gender:</strong><?php echo e($table['Gender']); ?></br>
            <Strong>Kategori Buku:</strong><?php echo e($table['kategori_buku']); ?></br>
            </li></br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>


</body>
</html><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/message.blade.php ENDPATH**/ ?>