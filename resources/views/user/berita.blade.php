@extends('user\components\navbar')
@section('title', 'Berita Terbaru')

@section('content')
    <!-- ======= berita Section ======= -->
    <section id="berita" class="">
      <div class="container">
      <div>
      <h3>Berita Terbaru</h3>
      <p>
        Selamat datang di halaman Berita Terbaru kami, tempat di mana Anda dapat menemukan berbagai informasi terkini seputar kesehatan. Kami berkomitmen menyajikan berita-berita informatif tentang penelitian medis terkini, perkembangan teknologi kesehatan, informasi gizi, gaya hidup sehat, serta tips untuk menjaga kesehatan tubuh dan pikiran.</p>
      </div>

      {{-- Carosel Berita --}}
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner img-carousel ">
          <div class="carousel-item active ">
            <img src="{{asset('img/cta-bg.jpg')}}" class="d-block w-100" alt="...">
            <div class="bg">
            <div class="carousel-captions ">
              <h6>BERITA UTAMA</h6>
                <a href=""> <p>Some representative placeholder content for the first slide.</p></a>
            </div>
          </div>
          </div>
          <div class="carousel-item ">
            <img src="{{asset('img/cta-bg.jpg')}}" class="d-block w-100" alt="...">
            <div class="bg">
            <div class="carousel-captions ">
              <h6>BERITA UTAMA</h6>
                <a href=""> <p>Some representative placeholder content for the first slide.</p></a>
            </div>
          </div>
          </div>
          <div class="carousel-item ">
            <img src="{{asset('img/cta-bg.jpg')}}" class="d-block w-100" alt="...">
            <div class="bg">
            <div class="carousel-captions ">
              <h6>BERITA UTAMA</h6>
                <a href=""> <p>Some representative placeholder content for the first slide.</p></a>
            </div>
          </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{-- Carosel Berita End --}}

      <h3>Rekomendasi Berita</h3>

      <div class=" mt-3">
        <div class="row">
          <!-- Card berita-->
          <div class="card mb-3 col-12">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('img/cta-bg.jpg')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8 ps-5">
                <div class="card-body">
                  <h5 class="card-title">Jelang Armuzna, Kesehatan Jemaah Adalah yang Utama</h5>
                  <div class="row author">
                    <div class="col-4"><p>Penulis : Gilang</p></div>
                    <div class="col-4"><p>Tanggal Publikasi : 12 Desember 2023</p></div>
                  </div>
                  <p class="card-text">Seruan terhadap jemaah haji untuk menjaga kondisi kesehatan terus digaungkan oleh PPIH Arab Saudi Bidang Kesehatan. Terutama menjelang puncak haji di Armuzna pada 8-13 dzulhijjah, demi kesempurnaan Ibadah jemaah. Hal ini disampaikan oleh Koordinator Promosi Kesehatan PPIH dr. Edy Supriatna, Senin (27/6)</p>
                    <a href="#" class="btn-berita "><p>Baca Selengkapnya</p></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card beritaEnd -->
          <!-- Card berita-->
          <div class="card mb-3 col-12">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('img/cta-bg.jpg')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8 ps-5">
                <div class="card-body">
                  <h5 class="card-title">Jelang Armuzna, Kesehatan Jemaah Adalah yang Utama</h5>
                  <div class="row author">
                    <div class="col-4"><p>Penulis : Gilang</p></div>
                    <div class="col-4"><p>Tanggal Publikasi : 12 Desember 2023</p></div>
                  </div>
                  <p class="card-text">Seruan terhadap jemaah haji untuk menjaga kondisi kesehatan terus digaungkan oleh PPIH Arab Saudi Bidang Kesehatan. Terutama menjelang puncak haji di Armuzna pada 8-13 dzulhijjah, demi kesempurnaan Ibadah jemaah. Hal ini disampaikan oleh Koordinator Promosi Kesehatan PPIH dr. Edy Supriatna, Senin (27/6)</p>
                    <a href="#" class="btn-berita "><p>Baca Selengkapnya</p></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card beritaEnd -->
          <!-- Card berita-->
          <div class="card mb-3 col-12">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('img/cta-bg.jpg')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8 ps-5">
                <div class="card-body">
                  <h5 class="card-title">Jelang Armuzna, Kesehatan Jemaah Adalah yang Utama</h5>
                  <div class="row author">
                    <div class="col-4"><p>Penulis : Gilang</p></div>
                    <div class="col-4"><p>Tanggal Publikasi : 12 Desember 2023</p></div>
                  </div>
                  <p class="card-text">Seruan terhadap jemaah haji untuk menjaga kondisi kesehatan terus digaungkan oleh PPIH Arab Saudi Bidang Kesehatan. Terutama menjelang puncak haji di Armuzna pada 8-13 dzulhijjah, demi kesempurnaan Ibadah jemaah. Hal ini disampaikan oleh Koordinator Promosi Kesehatan PPIH dr. Edy Supriatna, Senin (27/6)</p>
                    <a href="#" class="btn-berita "><p>Baca Selengkapnya</p></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card beritaEnd -->
        </div>
        
      </div>
      </div>
    </div>
    </div>
    <div class="next-page my-3 pb-5">
      <a href="#" class="btn-next-page "><p>Halaman Selanjutnya</p></a>
    </div>
    
        </section>

    @include('user\components\footer')
    @endsection

