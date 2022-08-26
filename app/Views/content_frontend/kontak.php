<?= $this->extend('layout_frontend/page_layout') ?>

<?= $this->section('content_frontend') ?>

 <section id="kontak" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Kontak</h2>
    </div>
    <div class="row">
      <div class="col-lg-5 d-flex" data-aos="fade-up">
        <div class="info-box">
          <i class="bx bx-map"></i>
          <h3>Alamat</h3>
          <p>
            Jl. Cidadap Kp. Petakan Ds. Sarimukti <br>
            Kec. Karangnunggal Kab. Tasikmalaya<br>
            46186<br><br>
          </p>
        </div>
      </div>
      <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="info-box">
          <i class="bx bx-envelope"></i>
          <h3>Email</h3>
          <p><a href="mailto:shirotulfalahpesantren@gmail.com">shirotulfalahpesantren@gmail.com</a></p>
        </div>
      </div>
      <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="info-box ">
          <i class="bx bx-phone-call"></i>
          <h3>Telepon</h3>
          <p><a href="https://api.whatsapp.com/send?phone=6281312757408">+6281312757408</a></p>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.9820156565365!2d108.12533181437541!3d-7.685078078217272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65e11ab1950259%3A0x43693a053eadffe8!2sBLK%20Komunitas%20Ponpes%20Shirotul%20Falah!5e0!3m2!1sid!2sid!4v1631201741074!5m2!1sid!2sid" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>

<?= $this->endSection() ?>