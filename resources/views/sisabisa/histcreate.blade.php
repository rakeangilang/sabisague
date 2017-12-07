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

<h1>Tambah Riwayat Kunjungan</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'pengunjung')) }}

    <div class="form-group">
        {{ Form::label('hari', 'Hari') }}
        {{ Form::text('hari', Input::old('hari'), array('class' => 'form-control', 'placeholder' => 'Nama hari')) }}
    </div>

    <div class="form-group">
        {{ Form::label('tanggal', 'Tanggal') }}
        {{ Form::number('tanggal', Input::old('tanggal'), array('class' => 'form-control', 'placeholder' => 'Contoh: 31')) }}
    </div>

    <div class="form-group">
        {{ Form::label('bulan', 'Bulan') }}
        {{ Form::number('bulan', Input::old('bulan'), array('class' => 'form-control', 'placeholder' => 'Contoh: 11')) }}
    </div>

    <div class="form-group">
        {{ Form::label('tahun', 'Tahun') }}
        {{ Form::number('tahun', Input::old('tahun'), array('class' => 'form-control', 'placeholder' => 'Contoh: 2017')) }}
    </div>

    <div class="form-group">
        {{ Form::label('jumlah', 'Jumlah pengunjung') }}
        {{ Form::number('jumlah', Input::old('jumlah'), array('class' => 'form-control', 'placeholder' => 'Jumlah pengunjung')) }}
    </div>

    {{ Form::submit('Tambah', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
