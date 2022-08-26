<?= $this->extend('layout_frontend/page_layout') ?>

<?= $this->section('content_frontend') ?>

<section id="hero" data-aos="fade-up">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('<?=base_url('assets_frontend/img/1.jpg')?>');">
          <div class="carousel-container">
            <div class="carousel-content container">
              <h2 class="animate__animated animate__fadeInDown">BLKK PONPES SHIROTUL FALAH</h2>
              <p class="animate__animated animate__fadeInUp">Balai Latihan Kerja Komunitas (BLKK) Ponpes Shirotul Falah didirikan pada tahun 2019. BLKK Ponpes Shirotul Falah mempunyai tugas melaksanakan pelatihan, pemberdayaan dan uji kompetensi tenaga kerja dengan keunggulan pada bidang Teknologi Informasi dan Komunikasi.</p>
              <a href="<?= base_url('blkk/profil')?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('<?=base_url('assets_frontend/img/2.jpg')?>');">
          <div class="carousel-container">
           <div class="carousel-content container">
            <h2>BLKK PONPES SHIROTUL FALAH</h2>
            <p>Balai Latihan Kerja Komunitas (BLKK) Ponpes Shirotul Falah didirikan pada tahun 2019. BLKK Ponpes Shirotul Falah mempunyai tugas melaksanakan pelatihan, pemberdayaan dan uji kompetensi tenaga kerja dengan keunggulan pada bidang Teknologi Informasi dan Komunikasi.</p>
            <a href="<?= base_url('blkk/profil')?>" class="btn-get-started">Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url('<?=base_url('assets_frontend/img/3.jpg')?>');">
        <div class="carousel-container">
         <div class="carousel-content container">
          <h2>BLKK PONPES SHIROTUL FALAH</h2>
          <p>Balai Latihan Kerja Komunitas (BLKK) Ponpes Shirotul Falah didirikan pada tahun 2019. BLKK Ponpes Shirotul Falah mempunyai tugas melaksanakan pelatihan, pemberdayaan dan uji kompetensi tenaga kerja dengan keunggulan pada bidang Teknologi Informasi dan Komunikasi.</p>
          <a href="<?= base_url('blkk/profil')?>" class="btn-get-started">Selengkapnya</a>
        </div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="carousel-item" style="background-image: url('<?=base_url('assets_frontend/img/4.jpg')?>');">
      <div class="carousel-container">
       <div class="carousel-content container">
        <h2>BLKK PONPES SHIROTUL FALAH</h2>
        <p>Balai Latihan Kerja Komunitas (BLKK) Ponpes Shirotul Falah didirikan pada tahun 2019. BLKK Ponpes Shirotul Falah mempunyai tugas melaksanakan pelatihan, pemberdayaan dan uji kompetensi tenaga kerja dengan keunggulan pada bidang Teknologi Informasi dan Komunikasi.</p>
        <a href="<?= base_url('blkk/profil')?>" class="btn-get-started">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>

<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
  <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
</a>
<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
  <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
</a>

</div>
</div>
</section>

<?= $this->endSection() ?>