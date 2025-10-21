@extends("app")
@section("judulpage","welcome page")

@section("konten")


<div class="container">
    <h3>Data Teman</h3>
    
    @if(empty($dt))
        <p>Tidak ada Data</p>
    @else
    <table class="table table-striped">
    <tr>
        <th>ID Buku</th>
        <th>Nama Teman</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Telp</th>
        <th>WA</th>
    </tr>
    <body>
    @foreach($dt as $d)
    <tr>
        <td>{{ $d['idbuku'] }}</td>
        <td>{{ $d['namateman'] }}</td>
        <td>Jl. Merdeka No. 10</td>
        <td>Bandung</td>
        <td>08123456789</td>
        <td>08123456789</td>
    </tr>
    @endforeach
</table>
    @endif

</div>
@endsection