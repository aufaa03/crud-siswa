<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PPDB SEKOLAH</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gradient-to-br from-blue-900 via-blue-700 to-cyan-500 min-h-screen text-white">

  <!-- Navbar -->
  <nav class="bg-blue-800 bg-opacity-80 shadow-lg fixed top-0 left-0 w-full z-20">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-2xl font-bold text-white">PPDB SMK PGRI 2 TAMAN</h1>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="mt-20">
    <div class="container mx-auto px-6">
      <div class="flex flex-wrap items-center">
        <!-- Left Content -->
        <div class="w-full lg:w-1/2 mb-10 lg:mb-0">
          <h1 class="text-4xl font-bold text-white md:text-5xl drop-shadow-lg">Selamat Datang di Penerimaan Peserta Didik Baru</h1>
          <h2 class="text-2xl font-semibold text-blue-100 mt-4">SMK PGRI 2 TAMAN</h2>
          <p class="mt-4 text-lg leading-relaxed text-blue-200">
            Bergabunglah bersama kami untuk meraih pendidikan berkualitas dan membangun masa depan yang gemilang!
          </p>
          <div class="mt-8 flex gap-4">
            <a href="daftar.php" class="bg-cyan-500 hover:bg-cyan-600 text-white px-6 py-3 rounded-lg shadow-lg font-medium transition duration-300 ease-in-out">
              Pendaftaran
            </a>
            <a href="listSiswa.php" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg shadow-lg font-medium transition duration-300 ease-in-out">
              Cek Pendaftaran
            </a>
          </div>
        </div>

        <!-- Right Image -->
        <div class="w-full lg:w-1/2 flex justify-center">
          <img class="max-w-full rounded-lg drop-shadow-lg" src="assets/20240925_080154.png" alt="Penerimaan Peserta Didik Baru">
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-20 bg-blue-800 bg-opacity-90 py-6 text-center">
    <p class="text-blue-200">&copy; 2025 PPDB SMK PGRI 2 TAMAN. All Rights Reserved.</p>
  </footer>

  <!-- SweetAlert Script -->
  <?php
  if(isset($_GET['status'])) {
    if($_GET['status'] == 'sukses') {
      echo '<script>
      Swal.fire({
        title: "Pendaftaran Berhasil!",
        text: "Silahkan cek di halaman Cek Pendaftaran.",
        icon: "success",
        confirmButtonColor: "#3085d6"
      });
      </script>';
    } else {
      echo '<script>
      Swal.fire({
        title: "Pendaftaran Gagal!",
        text: "Silahkan melakukan daftar ulang.",
        icon: "error",
        confirmButtonColor: "#d33"
      });
      </script>';
    }
  }
  ?>
</body>
</html>
