<?= $this->extend('layout_backend/page_layout') ?>

<?= $this->section('content_backend') ?>

<div class="container">
    <div class="card">
        <div class="card-header" align="left">
            <h3>Input Peserta</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert" align="left">
                <h4>Periksa Input Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form class="user" method="post" action="<?= base_url('backend/pendaftaran/store'); ?>">
        <?= csrf_field(); ?>
        <div class="form-group">
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
            </div>
            <div class="col-sm-2" align="center">Tanggal Lahir</div>
            <div class="col-sm-4">
                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" required>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                 <input type="number" class="form-control" name="no_hp" placeholder="No. HP" required>
            </div>
            <div class="col-sm-6">
                <select class="form-control" name="program_pelatihan" required>
                  <option disabled="true" selected>Pilih Program Pelatihan</option>
                  <option value="Microsoft Office">Microsoft Office</option>
                  <option value="Desain Grafis">Desain Grafis</option>
                  <option value="Web Programming">Web Programming</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
            <input type="text" name="status" value="Belum Verifikasi" hidden="true">
        </div>
        <div class="form-group row">            
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </div>
            <div class="col-sm-2">
             <a href="<?=base_url ('/backend/pendaftaran')?>" class="btn btn-success btn-block">
                Kembali
            </a>
            </div>
            <div class="col-sm-6"></div>
        </div> 
    </form>
</div>
</div>
</div>                         

<?= $this->endSection() ?>