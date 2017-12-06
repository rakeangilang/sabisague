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
      <li><a href="<?php echo e(URL::to('sisabisa/pengunjung')); ?>">Laporan Pengunjung</a></li>
      <li><a href="<?php echo e(URL::to('sisabisa/create')); ?>">Tambah Komoditas Baru</a>
  </ul>
</nav>

<h1>Stok Komoditas</h1>

<!-- will be used to show any messages -->
<?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Stok</td>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $sisabisas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($value->id); ?></td>
            <td><?php echo e($value->Nama); ?></td>
            <td><?php echo e($value->Stok); ?></td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                <?php echo e(Form::open(array('url' => 'sisabisa/' . $value->id, 'class' => 'pull-right'))); ?>

                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('Hapus Komoditas', array('class' => 'btn btn-warning'))); ?>

                <?php echo e(Form::close()); ?>




                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->


                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="<?php echo e(URL::to('sisabisa/' . $value->id . '/edit')); ?>">Ubah Stok</a>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</div>
</body>
</html>
