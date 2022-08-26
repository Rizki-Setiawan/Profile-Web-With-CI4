<?= $this->extend('layout_frontend/page_layout') ?>

<?= $this->section('content_frontend') ?>

<section id="galeri" class="portfolio section-bg">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="section-title">
      <h2>Galeri</h2>
      <p>Foto-foto kegiatan yang dilakukan di BLKK PONPES SHIROTUL FALAH</p>
    </div>
    <div class="row portfolio-container">
      <?php foreach ($galeri as $row) { ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="<?= base_url() . "/uploads/galeri/" . $row->gambar; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $row->keterangan; ?></h4>
              <div class="portfolio-links">
                <a href="<?= base_url() . "/uploads/galeri/" . $row->gambar; ?>" data-gallery="portfolioGallery" title="<?= $row->keterangan; ?>" class="portfolio-lightbox"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?> 
    </div>
  </div>     
</section>

<?= $this->endSection() ?>