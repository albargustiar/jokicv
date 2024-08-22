<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        /* CSS untuk mengatur halaman */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Memastikan halaman mencapai tinggi layar minimal */
        }

        /* CSS untuk mengatur tabel */
        table {
            margin-left: auto; /* Meletakkan tabel di paling kanan */
            margin-right: auto;
            width: 80%; /* Atur lebar tabel sesuai kebutuhan */
        }

        /* CSS untuk mengatur tata letak sidebar */
        .sidebar {
            margin-left: auto; /* Meletakkan sidebar di paling kanan */
            margin-right: 0;
        }
        table {
        border-collapse: separate;
        border-spacing: 0 20px; /* Jarak vertikal antara baris tabel */
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        }
        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: none;
            border-top: 1px solid #ccc;
        }
    
    </style>
</head>
<body>

    <!-- Admin Header -->
    @include('admin.header')

    <!-- Tabel Data -->
    <table border="1">  
        @foreach($pendaftarans as $pdf)
            <tr>
                <tr>
                    <td><strong>No.Pendaftar</strong></td>
                    <td>{{ $pdf->id }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{ $pdf->nama }}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>{{ $pdf->ttl }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $pdf->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{ $pdf->agama }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{ $pdf->status }}</td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>{{ $pdf->no_telp }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $pdf->alamat }}</td>
                </tr>
                <tr>
                    <td>Riwayat Pendidikan</td>
                    <td>{{ $pdf->riwayat_pendidikan }}</td>
                </tr>
                <tr>
                    <td>Pengalaman Kerja</td>
                    <td>{{ $pdf->pengalaman_kerja }}</td>
                </tr>
                <tr>
                    <td>Sertifikasi</td>
                    <td>{{ $pdf->sertifikasi }}</td>
                </tr>
                <tr>
                    <td>Pengalaman Organisasi</td>
                    <td>{{ $pdf->pengalaman_organisasi }}</td>
                </tr>
                <tr>
                    <td>Soft Skill</td>
                    <td>{{ $pdf->soft_skill }}</td>
                </tr>
                <tr>
                    <td>Hard Skill</td>
                    <td>{{ $pdf->hard_skill }}</td>
                </tr>
                <tr>
                    <td colspan="2"> <hr> <br> <hr></td>
                </tr>
            </tr>
        @endforeach
    </table>
    

    <!-- Admin Sidebar -->
    <div class="sidebar">
        @include('admin.sidebar')
    </div>

 

</body>
</html>
