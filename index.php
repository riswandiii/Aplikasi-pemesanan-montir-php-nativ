<?php
 session_start();
 include 'db.php';
 if(!isset($_SESSION['login'])){
   header('Location: login_user.php');
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>

    <!-- Link Style Css -->
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/logo.jpg" alt="" width="100" class="rounded-circle"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Montir</a>
        </li>
        <li class="nav-item">
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
          <?php if(isset($_SESSION['login'])) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, <?php echo $_SESSION['a_global']->username ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">History Pemesanana Montir</a></li>
                <?php if(isset($_SESSION['status_admin'])) { ?>
                  <li><a class="dropdown-item" href="profil_admin.php?id_admin=<?php echo $_SESSION['id_admin'] ?>">Profil Admin</a></li>
                <?php }else{?>
                <li><a class="dropdown-item" href="profil.php?id_pelanggan=<?php echo $_SESSION['id_pelanggan'] ?>">Profil</a></li>
                <?php }?>

                <!-- Jika admin login -->
                <?php if(isset($_SESSION['status_admin'])) { ?>
                  <li><a class="dropdown-item" href="admin/dashboard.php">Dashboard Admin</a></li>
                <?php }?>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="login_user.php">Log In</a>
            </li>
          <?php } ?>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<div class="container-fluid" id="container-fluid">
  <div class="container">

    <div class="row text-white text-center">
      <div class="col-lg-10 offset-lg-1 mt-5 mb-5">
        <h1>SERVIS KENDARAAN ANDA JADI LEBIH MUDAH</h1>
        <H5 class="mt-3">SERVIS KENDARAAN DI WILAYAH ANDA > LEBIH HEMAT 30% DARI BENGKELKAMI > LAYANAN BERGARANSI</H5 class="mt-3">
      </div>
    </div>

  </div>
</div>

<div class="container-fluid bg-light">
    <div class="container">
    <div class="row">
        <div class="col-lg-5 mt-5">
        <div class="card">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Kendaraan anda bermasalah? Kami siap membantu</li>
            <li class="list-group-item">Mekanik kami datang kepada Anda</li>
            <li class="list-group-item">Bayar hanya setelah servis selesai</li>
            <li class="list-group-item">Servis Kami bergaransi</li>
        </ul>
        </div>
        </div>
        <div class="col-lg-7 mt-5">
            <h3>Kendaraan Anda bermasalah? Kami siap membantu</h3>
            <p class="text-muted">Jadwalkan servis mobil Anda online dan mekanik kami akan datang dimanapun Anda berada. Semua prosesnya sangat mudah. Dengan menggunakan website kami, Anda bisa mengatur jadwal servis, mendapatkan penawaran harga, dan melihat riwayat servis mobil Anda. Selain itu harga servis kami juga lebih rendah dari harga bengkel karena kami tidak mempunyai bengkel fisik sehingga biaya operasional kami lebih rendah.</p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-7 offset-lg-5 mb-5">
            <h3>Booking servis Anda dengan mudah</h3>
            <h5 class="mt-2">JELASKAN KEBUTUHAN ANDA</h5>
            <p class="text-muted">1. Masukan informasi mobil Anda bedasarkan merek, tahun, dan tipe</p>
            <p class="text-muted">2. Pilih jenis servis dan sparepart yang Anda butuhkan</p>
            <p class="text-muted">3. Berikan informasi Anda (nama, lokasi, nomor telpon, dll)</p>
            <h5 class="mt-3">DAPATKAN HARGA SERVIS YANG BERSAING </h5>
            <p class="text-muted">Kami akan memastikan Anda mendapatkan harga servis yang terbaik dan transparan. Harga dari jasa dan produk akan dijabarkan secara lengkap di penawaran harga kami. Anda juga bisa menghemat karena harga servis kami lebih murah sampai dengan 30% dari harga bengkel.</p>
        </div>
    </div>

    </div>
</div>

<div class="container-fluid" id="bantuan">
    <div class="container">

    <div class="row">
        <div class="col-lg-12 text-center text-white mt-5">
            <h3>Ada yang bisa kami bantu?</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6 offset-lg-3 text-center text-white">
            <p>Customer service kami siap melayani Anda setiap hari 7 hari seminggu,
                Setiap hari buka pukul 7:00 s.d. 17:00.</p>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6 offset-lg-3 text-center text-white">
           <a href="" class="btn btn-lg mb-5" id="botton-pesan">PESAN SEKARANG</a>
        </div>
    </div>

    </div>
</div>

<div class="container-fluid bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 mt-5">
                <h5>MELAYANI</h5>
            </div>
            <div class="col-lg-12 mt-2">
               <small>
               <p class="muted">
               Alfa Romeo · Aston Martin · Audi · Bentley · BMW · Cadillac · Chery · Chevrolet · Chrysler · Citroen · Daewoo · Daihatsu · Datsun · Dodge · Ferrari · Fiat · Ford · Geely · Honda · Hummer · Hyundai · Infiniti · Isuzu · Jaguar · Jeep · KIA · Lamborghini · Land Rover · Lexus · Maserati · Mazda · McLaren · Mercedes · Mini · Mitsubishi · Nissan · Opel · Peugeot · Porsche · Proton · Renault · Rolls Royce · Smart · SSangYong · Subaru · Suzuki · Tata · Timor · Toyota · Volkswagen · Volvo
               </small>
               </p>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-lg-12">
               <div class="text-muted">
               &copy;2020-2022 PT Montir Makassar.
               </div>
            </div>
        </div>

    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>