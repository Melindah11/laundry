<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD </title>
</head>
<body>
 
	
	<h3>Data Petugas</h3>
 
	<a href="/petugas/tambah"> + Tambah Petugas Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id </th>
			<th>nama</th>
			<th>alamat</th>
			<th>no_telepon</th>
			
		</tr>
		@foreach($petugas as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->no_telepon }}</td>
			<td>
				<a href="/petugas/edit/{{ $p->petugas_id }}">Edit</a>
				|
				<a href="/petugas/hapus/{{ $p->petugas_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach($petugas as $p)
<tr>
	<td>{{ $p->id }}</td>
	<td>{{ $p->nama}}</td>
	<td>{{ $p->alamat }}</td>
	<td>{{ $p->no_telepon }}</td>
	<td>
		<a href="/petugas/edit/{{ $p->petugas_id }}">Edit</a>
		|
		<a href="/petugas/hapus/{{ $p->petugas_id }}">Hapus</a>
	</td>
</tr>
@endforeach

</table>
 
 
</body>
</html>