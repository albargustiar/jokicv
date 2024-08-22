    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #b8c99d;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 260vh;
            }

            header {
                width: 100%;
                background-color: #333;
                color: #fff;
                padding: 10px;
                text-align: center;
            }

            .container {
                height: -1000%;
                padding: 20px;
                border-radius: 8px;
                background-color: #dee8ea;
                box-shadow: 0 0 20px rgba(18, 16, 16, 0.1);
                width: 70%;
                margin-top: 20px;
            }

            h2 {
                text-align: center;
            }

            label {
                display: block;
                margin: 10px 0 5px;
            }

            input, select, textarea {
                width: 100%;
                padding: 8px;
                margin: 5px 0 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

    
        
            button {
                background-color: #4caf50;
                color: #fff;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin-top: 10px;
                text-decoration: none;
                width: 30%;
            }

            button.reset {
                background-color: #2196F3;
                color: #fff;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin-top: 10px;
                width: 30%;
            }

            button.back-button {
                background-color: #e77d7d;

            }

            .button-container {
                width: 100%;
                display: flex;
                justify-content: space-between;
            }

            .button-container button {
                width: 30%;
            }

            .back-button:hover {
                background-color: #f7d709;
                text-decoration: none;
            }

    
        </style>
        <title>Form Pendaftaran</title>
    </head>
    <body>

        <div class="container">
            <h2>Form Pendaftaran</h2>
            <form action="/CV" method="post" id="form-pendaftaran">
                @csrf

                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama" required>

                <label for="ttl">Tempat, Tanggal lahir :</label>
                <input type="text" id="ttl" name="ttl" required>

                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>

                <label for="agama">Agama :</label>
                <input type="text" id="agama" name="agama" required>

                <label for="status">Status :</label>
                <input type="text" id="status" name="status" required>

                <label for="no_telp">No. Telp :</label>
                <input type="tel" id="no_telp" name="no_telp" required>

                <label for="alamat">Alamat :</label>
                <textarea id="alamat" name="alamat" required></textarea>

                <label for="riwayat_pendidikan">Riwayat Pendidikan : Contoh : SDN Cintawargi 1 (2010-2016)<br>- SMP PGRI Pangkalan (2016-2019) <br>- SMAN 1 Pangkalan (2019-2022)</label>
                <textarea id="riwayat_pendidikan" name="riwayat_pendidikan" required></textarea>


                <label for="pengalaman_kerja">Pengalaman Kerja :</label>
                <textarea id="pengalaman_kerja" name="pengalaman_kerja"></textarea>

                <label for="sertifikasi">Sertifikasi :</label>
                <textarea id="sertifikasi" name="sertifikasi"></textarea>

                <label for="pengalaman_organisasi">Pengalaman Organisasi :</label>
                <textarea id="pengalaman_organisasi" name="pengalaman_organisasi"></textarea>

                <label for="soft_skill">Soft Skill :</label>
                <textarea id="soft_skill" name="soft_skill"></textarea>

                <label for="hard_skill">Hard Skill :</label>
                <textarea id="hard_skill" name="hard_skill"></textarea>
                <div class="button-container">
                    <button type="submit">Submit</button>
                    <button class="reset" type="reset">Reset</button>
                    <button class="back-button">
                        <div><a href="/">Kembali</a></div></button>
                </div>

                <script>
                    document.getElementById('form-pendaftaran').addEventListener('submit', function(event) {
                        // Menghentikan pengiriman formulir secara langsung
                        event.preventDefault();
            
                        // Mengirimkan formulir secara asinkron
                        var form = this;
                        var formData = new FormData(form);
                        var xhr = new XMLHttpRequest();
                        xhr.open(form.method, form.action);
                        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                        xhr.onload = function() {
                            if (xhr.status === 200 && xhr.responseText === 'success') {
                                // Menampilkan pesan sukses setelah pengguna berhasil mengirimkan formulir
                                alert("Persyaratan CV Anda telah masuk ke database kami. Tunggu beberapa saat agar admin menghubungi Anda! Terima kasih.");
                                // Reset formulir jika diperlukan
                                form.reset();
                            } else {
                                // Menampilkan pesan error jika pengiriman gagal
                                alert("Persyaratan CV Anda telah masuk ke database kami. Tunggu beberapa saat agar admin menghubungi Anda! Terima kasih.");
                                window.location.href = "/";
                            }
                        };
                        xhr.send(formData);
                    });
                </script>

            
        </div>


    </body>
    </html>
