<?= $this->extend('layout_backend/page_layout') ?>

<?= $this->section('content_backend') ?>

<div class="container">
    <div class="card">
        <div class="card-header" align="left">
            <h3>Edit Peserta</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert" align="left">
                <h4>Periksa Edit Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form class="user" method="post" action="<?= base_url('backend/pendaftaran/update/' . $pendaftaran->id); ?>">
        <?= csrf_field(); ?>
        <div class="form-group">
            <input type="text" class="form-control" name="nama_lengkap" value="<?= $pendaftaran->nama_lengkap ?>" required>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control" name="tempat_lahir" value="<?= $pendaftaran->tempat_lahir ?>" required>
            </div>
            <div class="col-sm-2" align="center">Tanggal Lahir</div>
            <div class="col-sm-4">
                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $pendaftaran->tanggal_lahir ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control" name="nama_ayah" value="<?= $pendaftaran->nama_ayah ?>" required>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nama_ibu" value="<?= $pendaftaran->nama_ibu ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
               <input type="number" class="form-control" name="no_hp" value="<?= $pendaftaran->no_hp ?>" required>
           </div>
           <div class="col-sm-6">
            <select class="form-control" name="program_pelatihan" required>
              <option selected value="<?= $pendaftaran->program_pelatihan ?>"><?= $pendaftaran->program_pelatihan ?></option>
              <?php if ($pendaftaran->program_pelatihan == 'Web Programming') {?>
                  <option value="Microsoft Office">Microsoft Office</option>
                  <option value="Desain Grafis">Desain Grafis</option>
              <?php } elseif($pendaftaran->program_pelatihan == 'Microsoft Office'){?>
                <option value="Web Programming">Web Programming</option>
                <option value="Desain Grafis">Desain Grafis</option>
            <?php } else{?>
                <option value="Web Programming">Web Programming</option>
                <option value="Microsoft Office">Microsoft Office</option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6">
        <input type="text" class="form-control" name="alamat" value="<?= $pendaftaran->alamat ?>" required>
    </div>
    <div class="col-sm-6">
       <select class="form-control" name="status" required>
          <option selected value="<?= $pendaftaran->status ?>"><?= $pendaftaran->status ?></option>
          <?php if ($pendaftaran->status == 'Telah Verifikasi') {?>
              <option value="Belum Verifikasi">Belum Verifikasi</option>
        <?php } else{?>
            <option value="Telah Verifikasi">Telah Verifikasi</option>
        <?php } ?>
    </select>
    </div>
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