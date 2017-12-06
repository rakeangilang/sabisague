<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e(URL::to('sisabisa')); ?>">Lihat Stok</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="<?php echo e(URL::to('sisabisa')); ?>">Tampilkan Barang</a></li>
        <li><a href="<?php echo e(URL::to('sisabisa/create')); ?>">Tambah Barang</a>
    </ul>
</nav>

<h1>Menampilkan Stok <?php echo e($sisabisas->Nama); ?></h1>

    <div class="jumbotron text-center">
        <h2><?php echo e($sisabisas->Nama); ?></h2>
        <p>
            <strong>Nama:</strong> <?php echo e($sisabisas->Nama); ?><br>
            <strong>Stok:</strong> <?php echo e($sisabisas->Stok); ?>

        </p>
    </div>

</div>
</body>
</html>
