<!-- app/views/nerds/edit.blade.php -->

<!DOCTYPE html>
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

<h1>Ubah Stok {{ $sisabisa->Nama }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($sisabisa, array('route' => array('sisabisa.update', $sisabisa->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('stok', 'Stok') }}
        {{ Form::number('stok', $sisabisa->Stok, array('class' => 'form-control', 'placeholder' => 'Stok saat ini')) }}
    </div>

    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
