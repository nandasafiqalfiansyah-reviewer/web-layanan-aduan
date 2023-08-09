<?php 

include "./template/navigasi.php";
include "./template/router.php";

require './data/function.php';
?>
 <header
        class="site-header d-flex flex-column justify-content-center align-items-center"
      >
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 col-12 mb-5">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Homepage</a>
                  </li>

                  <li class="breadcrumb-item active" aria-current="page">
                    Web Design
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
                  class="btn custom-btn custom-border-btn smoothscroll me-4"
                  >Read More</a
                >

                <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
              </div>
            </div>

            <div class="col-lg-5 col-12">
              <div class="topics-detail-block bg-white shadow-lg">
                <img
                  src="images/topics/undraw_Remote_design_team_re_urdx.png"
                  class="topics-detail-block-image img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </header>


<div class="container pt-5 ">
  <div class="form-container">
    <div class="col-lg-6 col-12 m-auto"></div>
    <h3 class="mb-4 text-secondary ">Form Buku Tamu</h3>
    <hr/>
    <form action="" method="POST">
      <div class="form-group mb-3">
        <label for="nama" class="mb-2">Nama</label>
        <input
          type="text"
          name="nama"
          id="nama"
          class="form-control"
          required
        />
      </div>
      <div class="form-group mb-3">
        <label for="jabatan " class="mb-2">Instansi</label>
        <input
          type="text"
          name="jabatan"
          id="jabatan"
          class="form-control"
          required
        />
      </div>
      <div class="form-group">
        <label for="dept" class="mb-2">Nomor Telepon</label>
        <input type="tel" name="dept" id="dept" class="form-control mb-3" required />
      </div>
      <div class="form-group">
        <label for="ket" class="mb-2">Keterangan</label>
        <textarea name="ket" id="ket" class="form-control mb-3" required></textarea>
      </div>
      <button class="btn btn-outline-success mr-3" type="submit" name="submit">
        <span class="fas fa-paper-plane mr-2"></span> Kirim
      </button>
      <button class="btn btn-outline-danger" type="reset" name="reset">
        <span class="fas fa-undo mr-2"></span> Reset Form
      </button>
    </form>
  </div>
</div>



  