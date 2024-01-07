@extends('user\components\navbar')
@section('title', 'Informasi Kegiatan')
    <!-- ======= kegiatan Section ======= -->
    <section id="kegiatan" class="">
      <div class="container ">
      <div>
      <h3>Informasi Kegiatan Sehat Masyarakat</h3>
      <p>Temukan beragam kegiatan sehat masyarakat secara mudah dan cepat berdasarkan nama, tanggal, dan tempat. <br> Jelajahi berbagai acara yang didedikasikan untuk meningkatkan kesehatan dan kesejahteraan masyarakat.</p>
      </div>
      <div class="mt-5 ">
      <form class="form-inline">
        <div class="row justify-content-between">
          <div class="col-lg-6 "><input class="form-control " type="search" placeholder="Search" aria-label="Search"></div>
          <div  class="col-lg-3"><input class="form-control" type="search" placeholder="Search" aria-label="Search"></div>
          <div  class="col-lg-2"><input class="form-control" type="search" placeholder="Search" aria-label="Search"></div>
          <div  class="col-lg-1">  <button class="btn btn-info" type="submit"><i class="bi bi-search"></i></button></div>
      </form>
      </div>
      <div class=" mt-3">
        <div class="row justify-content-lg-between align-items-center">
          <!-- card -->
          <div class="card col-lg-5  mb-lg-4 mb-3 p-4">
            <img class="custom-img" src="assets/img/cta-bg.jpg" alt="Card image cap">
            <div class="mt-4">
              <div class="row">
                <div class="text-card col-9">
                  <h5 class="card-title">Card title</h5>
                  <p>Penyelenggara: Gilang</p>
                  <p class="mb-3">Lokasi: Depok</p>
                  <p>Pihak yang berkepentingan dalam menyebarkan informasi kesehatan kepada masyarakat luas, termasuk pemerintah daerah, lembaga kesehatan, & organisasi non-profit....</p>
                </div>
                <div class="col-3 mt-4">
                  <div>
                    <div class="tanggal justify-content-center align-items-center">
                      <p>15 DESEMBER 23</p>
                    </div>
                    <a href="#" class="btn-card"><p>Selengkapnya</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- card end-->
          <!-- card -->
               <div class="card col-lg-5  mb-lg-4 mb-3 p-4">
                <img class="custom-img" src="assets/img/cta-bg.jpg" alt="Card image cap">
                <div class="mt-4">
                  <div class="row">
                    <div class="text-card col-9">
                      <h5 class="card-title">Card title</h5>
                      <p>Penyelenggara: Gilang</p>
                      <p class="mb-3">Lokasi: Depok</p>
                      <p>Pihak yang berkepentingan dalam menyebarkan informasi kesehatan kepada masyarakat luas, termasuk pemerintah daerah, lembaga kesehatan, & organisasi non-profit....</p>
                    </div>
                    <div class="col-3 mt-4">
                      <div>
                        <div class="tanggal justify-content-center align-items-center">
                          <p>15 DESEMBER 23</p>
                        </div>
                        <a href="#" class="btn-card"><p>Selengkapnya</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <!-- card end-->
          <!-- card -->
               <div class="card col-lg-5  mb-lg-4 mb-3 p-4">
                <img class="custom-img" src="assets/img/cta-bg.jpg" alt="Card image cap">
                <div class="mt-4">
                  <div class="row">
                    <div class="text-card col-9">
                      <h5 class="card-title">Card title</h5>
                      <p>Penyelenggara: Gilang</p>
                      <p class="mb-3">Lokasi: Depok</p>
                      <p>Pihak yang berkepentingan dalam menyebarkan informasi kesehatan kepada masyarakat luas, termasuk pemerintah daerah, lembaga kesehatan, & organisasi non-profit....</p>
                    </div>
                    <div class="col-3 mt-4">
                      <div>
                        <div class="tanggal justify-content-center align-items-center">
                          <p>15 DESEMBER 23</p>
                        </div>
                        <a href="#" class="btn-card"><p>Selengkapnya</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <!-- card end-->
          <!-- card -->
               <div class="card col-lg-5  mb-lg-4 mb-3 p-4">
                <img class="custom-img" src="assets/img/cta-bg.jpg" alt="Card image cap">
                <div class="mt-4">
                  <div class="row">
                    <div class="text-card col-9">
                      <h5 class="card-title">Card title</h5>
                      <p>Penyelenggara: Gilang</p>
                      <p class="mb-3">Lokasi: Depok</p>
                      <p>Pihak yang berkepentingan dalam menyebarkan informasi kesehatan kepada masyarakat luas, termasuk pemerintah daerah, lembaga kesehatan, & organisasi non-profit....</p>
                    </div>
                    <div class="col-3 mt-4">
                      <div>
                        <div class="tanggal justify-content-center align-items-center">
                          <p>15 DESEMBER 23</p>
                        </div>
                        <a href="#" class="btn-card"><p>Selengkapnya</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <!-- card end-->
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="next-page my-3 pb-5">
      <a href="#" class="btn-next-page "><p>Halaman Selanjutnya</p></a>
    </div>
    
        </section>
    @extends('user\components\footer')