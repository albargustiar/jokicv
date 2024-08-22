<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            flex-direction: column; /* Tampilkan elemen dalam kolom */
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        header {
            width: 100%; /* Agar navbar meliputi seluruh lebar halaman */
            background-color: #333; /* Warna latar belakang navbar */
            color: #fff; /* Warna teks navbar */
            padding: 10px; /* Ruang di sekitar isi navbar */
            text-align: center; /* Pusatkan teks */
        }

        .image-frame {
            width: 400px; /* Lebar bingkai yang lebih besar */
            height: 400px; /* Tinggi bingkai */
            border: 2px solid #ddd; /* Warna dan ketebalan garis bingkai */
            border-radius: 15px; /* Radius sudut melengkung */
            overflow: hidden; /* Menyembunyikan bagian gambar yang keluar dari bingkai */
            margin-top: 20px; /* Jarak antara navbar dan image-frame */
        }

        .image-frame img {
            width: 100%; /* Agar gambar terisi penuh dalam bingkai */
            height: auto; /* Menghindari pemotongan gambar */
            border-radius: 10px; /* Memberikan radius sudut melengkung pada gambar */
        }
    </style>
    <title>Poster</title>
</head>
<body>
    <header>
        @include('navbars.navigasibar')
    </header>

    <div class="image-frame">
        <img src="img/poster.jpg" alt="Contoh Gambar">
    </div>

</body>
</html>
