<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Buku</title>
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
                @foreach ($ms_buku as $b)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$b->kode_buku}}</td>
                    <td>{{$b->kode_kategori}}</td>
                    <td>{{$b->kode_penerbit}}</td>
                    <td>{{$b->judul_buku}}</td>
                    <td>{{$b->jumlah_buku}}</td>
                    <td>{{$b->pengarang_buku}}</td>
                    <td>{{$b->tahun_terbit_buku}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
    
