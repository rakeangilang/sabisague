<!-- app/views/nerds/edit.blade.php -->

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
        <li><a href="<?php echo e(URL::to('sisabisa/pengunjung')); ?>">Laporan Pengunjung</a></li>
        <li><a href="<?php echo e(URL::to('sisabisa/create')); ?>">Tambah Komoditas Baru</a>
    </ul>
</nav>

<h1>Ubah Stok <?php echo e($sisabisa->Nama); ?></h1>

<!-- if there are creation errors, they will show here -->
<?php echo e(HTML::ul($errors->all())); ?>


<?php echo e(Form::model($sisabisa, array('route' => array('sisabisa.update', $sisabisa->id), 'method' => 'PUT'))); ?>


    <div class="form-group">
        <?php echo e(Form::label('stok', 'Stok')); ?>

        <?php echo e(Form::number('stok', $sisabisa->Stok, array('class' => 'form-control'))); ?>

    </div>

    <?php echo e(Form::submit('Edit', array('class' => 'btn btn-primary'))); ?>


<?php echo e(Form::close()); ?>


</div>
</body>
</html>
