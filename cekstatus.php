<?php 
include "./template/navigasi.php";
include "./template/router.php";
require 'function.php';

?>
<header
        class="site-header d-flex flex-column justify-content-center align-items-center"
      >
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 col-12 mb-5">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active">
                    <a href="./index.php">Layanan Aduan</a>
                  </li>

                  <li class="breadcrumb-item active" aria-current="page">
                    Cek status
                  </li>
                </ol>
              </nav>

              <h2 class="text-white">
                Introduction to <br />
                Web Design 101
              </h2>

              <div class="d-flex align-items-center mt-5">
                <a
                  href="#topics-detail"
                  class="btn custom-btn bg-border-black smoothscroll me-4"
                  >Read More</a
                >

                <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
              </div>
            </div>

            <div class="col-lg-5 col-12">
              <div class="topics-detail-block bg-white shadow-lg">
                <img
                  src="./assets/css/img/homepage2.jpg"
                  class="topics-detail-block-image img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </header>

  <h1 class="display-5">Pengaduan Kerusakan Barang?</h1>
  <p class="lead">Jangan ambil pusing! Sampaikan kepada kami.</p>
  <div class="jumbotron-search">
    <form action="search.php" method="POST">
      <p class="lead" style="margin-bottom: -1px;">Cek status pengaduan Anda</p>
    <input type="text" name="keyword" id="keyword" placeholder="Masukkan nomor pengaduan Anda disini">
    <button type="submit" class="btn btn-primary search-button" value="cari"><span class="fas fa-search mr-2"></span>Cek</button>
    </form>
    <p class="lead mt-2">atau ajukan pengaduan Anda</p>
    <a href="form-pengaduan.php" class="btn btn-primary sub-button"><span class="fas fa-chevron-right mr-2"></span>Disini</a>
  </div>


<!-- end cek  -->
      <div class="container">
  <h1 class="display-4" style="margin-top: -50px;">Status Pengaduan Anda</h1>

  <div class="row">
    <div class="col">
        <?php
          $keyword = $_POST['keyword'];
          $data = query("SELECT * FROM pengaduan WHERE id = '$keyword'");
          if ($data) {
          foreach ($data as $d) :
        ?>
          <p>Nomor Pengaduan : <?= $d['id']; ?></p>
          <p>Tanggal Pengaduan : <?= $d['tgl_lapor']; ?></p>
          <p>Nama Pelapor : <?= $d['n_pelapor']; ?></p>
          <p>Jabatan : <?= $d['j_pelapor']; ?></p>
          <p>Departemen : <?= $d['d_pelapor']; ?></p>
          <p>Nama Barang : <?= $d['n_barang']; ?></p>
          <p>Keterangan : <?= $d['ket']; ?></p>
          <p>Status : <?= $d['status']; ?></p>
          <p><b><u>Catatan dari petugas</u></b> <br><?= $d['ket_petugas']; ?></p>
          <br>
          <a href="index.php" class="btn btn-sm btn-primary" style="width: 80px;"><span class="fas fa-arrow-left mr-2"></span>Back</a>
        <?php
        endforeach;
        } else {
            echo"<p>Data pengaduan tidak ditemukan.</p>";
        }
        ?>
    </div>
    
  </div>
  </div>
