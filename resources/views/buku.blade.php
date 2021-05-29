<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Mahasiswa</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x: auto;">
        <a .class="tambah" href="{{route('ms_buku')}}">Tambah Data</a>
        <table>
            <thead>
                <tr>
                    <th>Kode Buku</th>
                    <th>Kode Kategori</th>
                    <th>Kode Penerbit</th>
                    <th>Judul Buku</th>
                    <th>Jumlah Buku</th>
                    <th>Pengarang Buku</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>    
            <tbody>
                <?php $no=1; ?>
                @foreach ($ms_buku as $buku)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$buku->kode_buku}}</td>
                    <td>{{$buku->kode_kategori}}</td>
                    <td>{{$buku->kode_penerbit}}</td>
                    <td>{{$buku->judul_buku}}</td>
                    <td>{{$buku->jumlah_buku}}</td>
                    <td>{{$buku->pengarang_buku}}</td>
                    <td>{{$buku->tahun_terbit_buku}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
    
