<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
  <header class="bg-dark text-white p-3 border rounded-top">
    <div class="row align-items-center w-100 m-0">

      <div class="col-3 p-0">
        <img src="img/Modern_abstract_letter_v_logo___Premium_Vector-removebg-preview.png"
          style="height: 50px; width: auto; object-fit: contain;"
          class="d-block">
      </div>

      <div class="col-9  text-center text-md-start">
        <h2 class="m-0 fs-3 fw-bold text-uppercase tracking-wider">Velox styer</h2>
      </div>

    </div>
  </header>


  <nav class="navbar navbar-expand-lg bg-dark navbar-dark border-start border-end border-bottom">
    <div class="container-fluid">
      <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav gap-4">
          <li class="nav-item"><a class="nav-link active" href="#">beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#tentang">tentang perusahaan</a></li>
          <li class="nav-item"><a class="nav-link" href="#">kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container my-4">


    <div class="col-md-9 mx-auto">
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Otomotiv Dünyasını Yakından İlgilendiren Açıklama !Sıfır araçlarda 6 ay 6 bin kilometre Km Sınırl___.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Tombol Navigasi Kiri & Kanan -->
      <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>

    <!-- tntanh -->
    <div class="row g-4">

      <div class="col-md-6" id="tentang">
        <div class="p-4 border h-100">
          <h3>Tentang Perusahaan</h3>
          <p>Velox styer adalah sebuah perusahaan yang bergerak di bidang angsuran mobil yang tidak hanya di indonesia saja tetapi bergerak di seluruh dunia</p>
        </div>
      </div>

      <div>
        <div class="flex item-center justify-center">
          <img src="img/Slow Down in Automobile Sector.jpg" class="w-50" alt="">
        </div>
      </div>
    </div>

    <!-- form -->

    <div class="card p-4 border-secondary">
      <hr>
      <form action="" method="post">
        <label for="">nama</label><br>
        <input type="text" name="nama"> <br>

        <label for="">harga mobil</label><br>
        <input type="number" name="hargamobil"> <br><br>
        <label for="">DP</label>
        <select name="dp" id="">
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="30">30</option>
          <option value="40">40</option>
          <option value="50">50</option>
          <option value="60">60</option>
        </select> %<br>

        <!-- tenor  -->
        <p>tenor</p>
        <input type="radio" name="tenor" value="1">
        <label>1 tahun</label>
        <input type="radio" name="tenor" value="2">
        <label>2 tahun</label>
        <input type="radio" name="tenor" value="3">
        <label>3 tahun</label><br>
        <input type="radio" name="tenor" value="4">
        <label>4 tahun</label>
        <input type="radio" name="tenor" value="5">
        <label>5 tahun</label><br>

        <input type="submit" name="hitung" value="hitung total">
      </form>

      <hr>

      <?php
      // echo "Harga Mobil<br>";
      // echo "DP<br>";
      // echo "tenor<br>";
      // echo "bunga<br><br>";
      // echo "Jumlah Angsuran";
      // echo "dp mobil";


      // var_dump($_POST);
      $nama = $_POST['nama'];
      $hargamobil = $_POST['hargamobil'];
      $dp = $_POST['dp'];
      $tenor = $_POST['tenor'];
      $bunga = 0;
      $hargadpmobil = 0;
      $angsuran = 0;

      // mencari dp harga mobil

      if ($dp == 10) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
      } elseif ($dp == 20) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
      } elseif ($dp == 30) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
      } elseif ($dp == 40) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
      } elseif ($dp == 50) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
      }


      ///mencari lama angsuran
      $lamaangsuran = 0;
      if ($tenor == 1) {
        $lamaangsuran = $tenor * 12;
      } elseif ($tenor == 2) {
        $lamaangsuran = $tenor * 12;
      } elseif ($tenor == 3) {
        $lamaangsuran = $tenor * 12;
      } elseif ($tenor == 4) {
        $lamaangsuran = $tenor * 12;
      } elseif ($tenor == 5) {
        $lamaangsuran = $tenor * 12;
      }


      //bunga perbulan
      $bunga = (20 / 100) * $hargamobil;


      //mencari angsuran per bulan
      $pinjaman = ($hargamobil + $bunga) - $hargadpmobil;
      $angsuran = $pinjaman / ($tenor * 12);

      echo '<div class="p-4  rounded border border-secondary mb-4">';
      echo "Nama            =" . $nama . "<br>";
      echo "harga mobil     =" . $hargamobil . "<br>";
      echo "dp              =" . $dp . " % <br>";
      echo "tenor           =" . $tenor . " tahun<br>";
      echo "bunga           =" . $bunga . " rupiah<br>";
      echo "lamaangsuran    =" . $lamaangsuran . " bulan<br>";
      echo "dp mobil        =" . $hargadpmobil . "rupiah<br>";
      echo "<b>jumlah angsuran =" . ceil($angsuran) . " rupiah/bulan</b><br>";



      ?>
    </div>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>