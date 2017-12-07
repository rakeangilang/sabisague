<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>

<?php use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator; ?>

<html>
<head>
    <title>SI Sabisa Farm</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('sisabisa') }}">Lihat Stok</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('sisabisa/create') }}">Tambah Komoditas Baru</a>
      <li><a href="{{ route('pengunjung.index') }}">Laporan Pengunjung</a></li>
      <li><a href="{{ URL::to('pengunjung/create') }}">Tambah Riwayat Kunjungan</a></li>
    </ul>
</nav>

<h1>Tambah Komoditas Baru</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'sisabisa')) }}

    <div class="form-group">
        {{ Form::label('nama', 'Nama') }}
        {{ Form::text('nama', Input::old('nama'), array('class' => 'form-control', 'placeholder' => 'Nama komoditas')) }}
    </div>

    <div class="form-group">
        {{ Form::label('stok', 'Stok') }}
        {{ Form::number('stok', Input::old('stok'), array('class' => 'form-control', 'placeholder' => 'Stok komoditas')) }}
    </div>

    {{ Form::submit('Tambah', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
