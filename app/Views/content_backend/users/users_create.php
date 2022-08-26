<?= $this->extend('layout_backend/page_layout') ?>

<?= $this->section('content_backend') ?>

<div class="container">
    <div class="card">
        <div class="card-header" align="left">
            <h3>Input User</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert" align="left">
                <h4>Periksa Input Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form class="user" method="post" action="<?= base_url('backend/users/store'); ?>">
        <?= csrf_field(); ?>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control"  name="password" placeholder="Password" required>
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password_conf" placeholder="Confirm Password" required>
            </div>
        </div>
        <div class="form-group row">            
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </div>
            <div class="col-sm-2">
               <a href="<?=base_url ('/backend/users')?>" class="btn btn-success btn-block">
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