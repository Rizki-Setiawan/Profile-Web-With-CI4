<?= $this->extend('layout_backend/page_layout') ?>

<?= $this->section('content_backend') ?>

<div class="container">
    <div class="card">
        <div class="card-header" align="left">
            <h3>Detail Peserta</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead></thead>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>: <?= $pendaftaran->nama_lengkap ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td>: <?= $pendaftaran->tempat_lahir ?>, <?= $pendaftaran->tanggal_lahir ?></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>: <?= $pendaftaran->nama_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>: <?= $pendaftaran->nama_ibu ?></td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                        <td>: <?= $pendaftaran->no_hp ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?= $pendaftaran->alamat ?></td>
                    </tr>
                    <tr>
                        <td>Program Pelatihan</td>
                        <td>: <?= $pendaftaran->program_pelatihan ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>: <?= $pendaftaran->status ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group row">            
                <div class="col-sm-2">
                 <a href="<?=base_url ('/backend/pendaftaran')?>" class="btn btn-success btn-block">
                    Kembali
                </a>
            </div>
            <div class="col-sm-6"></div>
        </div> 
    </div>
</div>
</div>                         

<?= $this->endSection() ?>