<!DOCTYPE html>
<html>
<head>
	<title>Kiostix Engineer Test</title>
</head>
<body>
 
	<header>
 
		<h2>Form Input</h2>
		<nav>
			<a href="/buku/form/add">BUKU</a>
			|
			<a href="/penulis/form/add">PENULIS</a>
			|
			<a href="/kategori/form/add">KATEGORI</a>
			|
			<a href="/table/penulis">Search By Penulis</a>
			|
			<a href="/table/kategori">Search By Kategori Buku</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> <?php echo $__env->yieldContent('judul_halaman'); ?> </h3>
    
 
	<!-- bagian konten blog -->
	<?php echo $__env->yieldContent('konten'); ?>
 
 
	<br/>
	<br/>
	<hr/>

   

	<footer>
		<p>&copy; 2019 - 2020</p>
	</footer>
 
</body>
</html><?php /**PATH /home/woka-ubuntu/kiostix/resources/views/master.blade.php ENDPATH**/ ?>