<!-- app/views/nerds/index.blade.php -->

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

<h1>Stok Komoditas</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Stok</td>
        </tr>
    </thead>
    <tbody>
    @foreach($sisabisas as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->Nama }}</td>
            <td>{{ $value->Stok }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'sisabisa/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Hapus Komoditas', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}



                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->


                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('sisabisa/' . $value->id . '/edit') }}">Ubah Stok</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
