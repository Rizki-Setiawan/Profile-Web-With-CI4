<?= $this->extend('layout_frontend/page_layout') ?>
<?= $this->section('content_frontend') ?>
<div class="container" data-aos="fade-up">
	<div class="card o-hidden border-0 shadow-lg my-5" data-aos="fade-up">
		<div class="card-body p-0">
			<div class="col-lg-12">
				<div class="p-5">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-4"><b>Form Pendaftaran Pelatihan</b></h1>
					</div>
					<?php if (!empty(session()->getFlashdata('error'))) : ?>
					<div class="alert alert-danger" role="alert" align="left">
						<h4>Periksa Input Form</h4>
					</hr />
					<?php echo session()->getFlashdata('error'); ?>
				</div>
			<?php endif; ?>
			<?php if (!empty(session()->getFlashdata('message'))) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<?php echo session()->getFlashdata('message'); ?>
			</div>
		<?php endif; ?>


		<form class="user" method="post" action="<?= base_url('blkk/pendaftaran/store'); ?>" class="php-email-form">
			<?= csrf_field(); ?>
			<div class="form-group">
				<input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
			</div><br>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
				</div>
				<div class="col-sm-2" align="center"><label>Tanggal Lahir</label></div>
				<div class="col-sm-4">
					<input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
				</div>
			</div><br>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" required>
				</div>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" required>
				</div>
			</div><br>
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
			</div><br>
			<div class="form-group">
				<input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
				<input type="text" name="status" value="Belum Verifikasi" hidden="true">
			</div><br>
			<div class="form-group row">
				<div class="col-sm-5"></div>            
				<div class="col-sm-4">
					<button type="submit" class="btn btn-primary" align="center">
						<b>Daftar Pelatihan</b>
					</button>
				</div>
				<div class="col-sm-3"></div>
			</div><hr>
		</form>
	</div>
</div>
</div>
</div>
<?= $this->endSection() ?>
