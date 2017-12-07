<!-- app/views/nerds/index.blade.php -->

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
        <li><a href="<?php echo e(URL::to('sisabisa/create')); ?>">Tambah Komoditas Baru</a>
      <li><a href="<?php echo e(route('pengunjung.index')); ?>">Laporan Pengunjung</a></li>
      <li><a href="<?php echo e(URL::to('pengunjung/create')); ?>">Tambah Riwayat Kunjungan</a></li>
    </ul>
</nav>

<h1>Laporan Pengunjung</h1>

<!-- will be used to show any messages -->
<?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID Kunjungan</td>
            <td>Jumlah Pengunjung</td>
            <td>Hari</td>
            <td>Tanggal</td>
            <td>Bulan</td>
            <td>Tahun</td>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $pengunjungs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($value->id); ?></td>
            <td><?php echo e($value->Jumlah_Pengunjung); ?></td>
            <td><?php echo e($value->Hari); ?></td>
            <td><?php echo e($value->Tanggal); ?></td>
            <td><?php echo e($value->Bulan); ?></td>
            <td><?php echo e($value->Tahun); ?></td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->



                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</div>
</body>
</html>
