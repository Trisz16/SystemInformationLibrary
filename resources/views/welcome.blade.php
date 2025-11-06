<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Azfakun</title>

    <style>
        /* CSS Dasar dan Layout */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            background-color: #f8f9fa;
            /* Latar belakang sangat terang */
        }

        /* Hero Section (Sisi Kiri: Informasi Perpustakaan) */
        .hero-section {
            flex: 2;
            /* Mengambil 2/3 bagian dari lebar */
            background-color: #007bff;
            /* Warna biru profesional */
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px;
            text-align: center;
            position: relative;
        }

        .hero-section h1 {
            font-size: 3em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .hero-section p {
            font-size: 1.2em;
            max-width: 500px;
            line-height: 1.6;
        }

        /* Simulasi Gambar / Visual (ganti dengan tag <img> asli jika ada) */
        .hero-visual {
            font-size: 6em;
            margin: 20px 0;
            opacity: 0.8;
        }

        /* Auth Section (Sisi Kanan: Login/Register) */
        .auth-section {
            flex: 1;
            /* Mengambil 1/3 bagian dari lebar */
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.05);
            /* Bayangan untuk kesan menonjol */
        }

        .auth-card {
            width: 100%;
            max-width: 350px;
            padding: 40px 30px;
            border-radius: 8px;
            text-align: center;
        }

        .auth-card h2 {
            color: #333;
            margin-bottom: 25px;
            font-size: 1.8em;
            font-weight: 600;
        }

        /* Tombol */
        .btn {
            display: block;
            width: 100%;
            padding: 12px 0;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-bottom: 15px;
            font-size: 1em;
        }

        .btn-login {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        /* Petunjuk Registrasi */
        .register-hint {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #6c757d;
        }

        .btn-register {
            background-color: #28a745;
            /* Hijau untuk menonjolkan Aksi */
            color: white;
        }

        .btn-register:hover {
            background-color: #1e7e34;
        }
    </style>
</head>

<body>

    <div class="hero-section">
        <div class="hero-visual">
            📖
        </div>
        <h1>Selamat Datang di Perpustakaan Azfakun</h1>
        <p>
            Temukan dan akses ribuan koleksi buku digital dan fisik kami. Mulai perjalanan literasi Anda hari ini!
        </p>
        <p>
            Cek ketersediaan buku, pinjam secara online, dan dapatkan notifikasi pengembalian.
        </p>
    </div>

    <div class="auth-section">
        <div class="auth-card">
            <h2>Akses Akun Anda</h2>

            <a href="{{ route('login') }}" class="btn btn-login">
                Masuk ke Akun
            </a>

            <div class="register-hint">
                <p>
                    Belum punya akun anggota?
                </p>
                <a href="{{ route('register') }}" class="btn btn-register">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>

</body>

</html>