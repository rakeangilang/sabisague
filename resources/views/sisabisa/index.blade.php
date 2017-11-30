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
      <a class="navbar-brand" href="{{ URL::to('sisabisa') }}">Stok Komoditas</a>
  </div>
  <ul class="nav navbar-nav">
      <li><a href="{{ URL::to('sisabisa/history') }}">Riwayat Pengunjung</a></li>
      <li><a href="{{ URL::to('sisabisa/create') }}">Tambahkan Pengunjung Harian</a>
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
            <td>{{ $value->ID_Komoditas }}</td>
            <td>{{ $value->Nama }}</td>
            <td>{{ $value->Stok }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->



                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
