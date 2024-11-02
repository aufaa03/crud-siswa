<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PPDB SEKOLAH</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
  <nav class="bg-transparent top-0 left-0 w-full absolute z-20">
    <div class="container mx-auto">
      <img class="drop-shadow-2xl" src="assets/download.png" alt="" width="150px" height="150px" />
    </div>
  </nav>
  <section class="mt-3">
    <div class="container relative mx-auto ">
      <div class="flex flex-wrap">
       <div class="w-full self-center px-4 lg:w-1/2">
         <h1 class="text-base font-semibold text-neutral-200 md:text-2xl drop-shadow-xl">Selamat datang di Penerimaan Peserta Didik Baru</h1>
         <h2 class="font-bold text-neutral-100 text-4xl mt-3 lg:text-4xl drop-shadow-xl">SMK PGRI 2 TAMAN</h2>
         <p class="font-medium text-slate-100 mt-3 mb-10 drop-shadow-xl">Bergabunglah bersama kami untuk meraih pendidikan berkualitas dan membangun masa depan yang gemilang!</p>
         <div class="ml-30">
           
        <a class="text-lg font-semibold text-dark bg-sky-400 rounded hover:shadow-lg hover:opacity:80 transition duration-300 ease-in-out p-4" href="daftar.php">Pendaftaran</a>
<a class="text-lg font-semibold text-dark bg-sky-400 ml-10 rounded hover:shadow-lg hover:opacity:80 transition duration-300 ease-in-out p-4" href="listSiswa.php">Cek Pendaftaran</a>
         </div>
       </div>
      <div class=" backdrop-blur-sm rounded-full bg-white/30 w-full self-end px-4 lg:w-1/2">
        <div class=" lg:right-0 mt-5">
          
        <img class="max-w-full mx-auto rounded-lg drop-shadow-xl" src="assets/20240925_080154.png" alt="" />
        </div>
      </div>
      </div>
    </div>
  </section>
 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php
if(isset($_GET['status'])) {

  if($_GET['status'] == 'sukses') {
    echo '<script>
    Swal.fire({
      title: "Pendaftaran Berhasil",
      text: "silahkan cek dihalaman cek pendaftaran",
      icon: "success"
      });
</script>';
  } else {
    echo '<script>
    Swal.fire({
      title: "Pendaftaran Gagal",
      text: "silahkan Melakukan Daftar ulang",
      icon: "error"
      });
</script>';
  }
}
?>