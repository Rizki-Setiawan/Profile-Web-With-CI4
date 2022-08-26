<?= $this->extend('layout_backend/page_layout') ?>

<?= $this->section('content_backend') ?>

<div class="container">
    <div class="card">
        <div class="card-header" align="left">
            <h3>Edit Berita</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert" align="left">
                <h4>Periksa Edit Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form method="post" action="<?= base_url('backend/berita/update/' . $berita->id); ?>">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="title">Author</label>
            <input type="text" name="author" class="form-control" value="<?= $berita->author ?>" required >
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Judul Berita" value="<?= $berita->title ?>" required>
        </div>
        <div class="form-group">
           <label for="title">Content</label>
           <textarea name="content" id="editor" class="form-control" cols="30" rows="10" placeholder="Konten Berita"><?= $berita->content ?></textarea>
       </div>
       <div class="form-group row">            
        <div class="col-sm-2">
            <button type="submit" name="status" value="published" class="btn btn-primary btn-block">
                Publish
            </button>
        </div>
        <div class="col-sm-2">
            <button type="submit" name="status" value="draft" class="btn btn-warning btn-block">
                Save to Draft
            </button>
        </div>
        <div class="col-sm-2">
           <a href="<?=base_url ('/backend/berita')?>" class="btn btn-success btn-block">
            Kembali
        </a>
    </div>
    <div class="col-sm-6"></div>
</div> 
</form>
</div>
</div>
</div>                         

<script src="https://cdn.tiny.cloud/1/1k65iu1hujwi9nef3cbc3wmxoae6ln8q44fsvhus08xwevm0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false
});
</script>

<?= $this->endSection() ?>