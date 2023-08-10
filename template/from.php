<section class="featured-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-12 mb-4">
              
              <div class="custom-block bg-white shadow-lg p-4">
                <form class="container-sm">
                  <h3 class="text-center mb-4 text-secondary ">Sampaikan Laporan Anda</h3>

                  <div class="form-group mb-3">
                    <label class="mb-3" for="classification_complaint"
                      >Pilih Klasifikasi Laporan</label
                    >

                    <div
                      class="btn-group btn-group-toggle d-flex"
                      data-toggle="buttons"
                    >
                      <label class="btn btn-outline-dark col">
                        <input
                        class="text-secondary"
                          type="radio"
                          name="classification_id"
                          value="1"
                          required
                        />
                        PENGADUAN
                      </label>
                      <label class="btn btn-outline-dark col">
                        <input
                          type="radio"
                          name="classification_id"
                          value="3"
                          required
                        />
                        ASPIRASI
                      </label>
                      <label class="btn btn-outline-dark col">
                        <input
                          type="radio"
                          name="classification_id"
                          value="2"
                          required
                        />
                        INFORMASI
                      </label>
                    </div>
                  </div>
                  <div class="alert alert-secondary" role="alert">
                  Perhatikan Cara Menyampaikan Pengaduan Yang Baik dan Benar 
                    <a href="#section_2" class="alert-link">Berikut</a>
                  
                  </div>

                  <div class="form-group mb-3">
                    <label for="address " class="mb-2">Judul laporan</label>
                    <input
                      type="text"
                      id="name"
                      class="form-control"
                      placeholder="Ketikan Judul Laporan Anda *"
                      required
                    />
                  </div>

                  <div class="form-group mb-3">
                    <label for="additional_info" class="mb-2">Isi Laporan Anda</label>
                    <textarea
                      class="form-control"
                      id="additional_info"
                      rows="4"
                      placeholder="Ketikan Isi Laporan Anda *"
                    ></textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label for="email" class="mb-2">Pilih Tanggal Kejadian</label>
                    <input
                    id="tanggal-kejadian"
                    type="date"
                    class="form-control clickable input-md"
                    placeholder="Pilih Tanggal Kejadian *"
                  >
                  </div>
                  

                  <div class="form-group mb-4">
                    <label for="text" id="address" class="mb-2">Lokasi Kejadian</label>
                    <input
                      type="text"
                     id="addreSs"
                      class="form-control"
                      required
                    />
                  </div>
                  <hr/>
                  <button type="submit" class="btn btn-info btn-block">
                    Kirim Laporan
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>