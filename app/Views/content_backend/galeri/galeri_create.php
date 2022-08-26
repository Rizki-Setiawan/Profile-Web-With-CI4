<?= $this->extend('layout_backend/page_layout') ?>

<?= $this->section('content_backend') ?>

<div class="container">
    <div class="card">
        <div class="card-header" align="left">
            <h3>Input Galeri</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert" align="left">
                <h4>Periksa Input Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form class="user" method="post" action="<?= base_url('backend/galeri/store'); ?>" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label">Gambar</label><br>
            <input type="file" name="gambar">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="keterangan" rows="3" placeholder="Keterangan Gambar" required></input>
        </div>
        <div class="form-group row">            
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </div>
            <div class="col-sm-2">
               <a href="<?=base_url ('/backend/galeri')?>" class="btn btn-success btn-block">
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