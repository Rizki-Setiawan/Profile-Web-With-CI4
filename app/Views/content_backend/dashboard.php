<?= $this->extend('layout_backend/page_layout') ?>

<?= $this->section('content_backend') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-uppercase mb-1"><b>Total Peserta</b></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><b><?php echo $total_peserta; ?></b></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-user fa-2x text-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-uppercase mb-1"><b>Total Berita</b></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><b><?php echo $total_berita; ?></b></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-newspaper fa-2x text-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-uppercase mb-1"><b>Total Gambar Galeri</b></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><b><?php echo $total_galeri; ?></b></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-image fa-2x text-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-danger shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-uppercase mb-1"><b>Total User</b></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><b><?php echo $total_users; ?></b></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-user-cog fa-2x text-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>