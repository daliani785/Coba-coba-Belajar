<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Perpustakaan Buku</h1>

    <div class="form">
        <input type="text" id="judul" placeholder="Judul Buku">
        <input type="text" id="penulis" placeholder="Penulis">
        <button onclick="tambahBuku()">Tambah Buku</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="daftarBuku">
            
        </tbody>
    </table>
</div>


</body>
</html>
