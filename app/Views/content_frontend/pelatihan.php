<?= $this->extend('layout_frontend/page_layout') ?>

<?= $this->section('content_frontend') ?>

<section id="pelatihan" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Pelatihan</h2>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" style="background-color: #5C768D; color: white; padding: 25px; border-radius: 30px;">
        <div class="icon"><i class="bi bi-file-earmark-text"></i></div>
        <h4 class="title"><a href="<?= base_url('blkk/pendaftaran') ?>"><font color="white">Microsoft Office</font></a></h4>
        <p class="description">Pelatihan Microsoft Office yang ada di BLKK meliputi materi : <br>
        - Ms. Word <br>
        - Ms. Excel <br>
        - Ms. Power Point
      </p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100" style=" padding: 25px;">
        <div class="icon"><i class="bi bi-bezier"></i></div>
        <h4 class="title"><a href="<?= base_url('blkk/pendaftaran') ?>">Desain Grafis</a></h4>
        <p class="description">Pelatihan Desain Grafis yang ada di BLKK meliputi materi : <br>
        - CorelDraw <br>
        - Adobe Illustrator <br>
        - Adobe Photoshop
      </p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200" style="background-color: #5C768D; color: white; padding: 25px; border-radius: 30px;">
        <div class="icon"><i class="bi bi-code"></i></div>
        <h4 class="title"><a href="<?= base_url('blkk/pendaftaran') ?>"><font color="white">Web Programming</font></a></h4>
        <p class="description">Pelatihan Web Programming yang ada di BLKK meliputi materi : <br>
        - HTML <br>
        - CSS <br>
        - PHP <br>
        - MySQL
      </p>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-5"></div>
      <div class="col-lg-4"><a href="<?= base_url('blkk/pendaftaran')?>" class="btn btn-primary"><b>Daftar Sekarang</b></a></div>
      <div class="col-lg-3"></div>
    </div>

  </div>
</section>

<?= $this->endSection() ?>