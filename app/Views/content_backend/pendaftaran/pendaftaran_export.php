<!-- Favicons -->
<link href="<?= base_url('assets_frontend/img/favicon.png')?>" rel="icon">
<link href="<?= base_url('assets_frontend/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

<title>Data Pendaftaran Peserta</title>

<!-- Custom fonts for this template-->
<link href="<?= base_url('assets_backend/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
<link
href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url('assets_backend/css/sb-admin-2.min.css')?>" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="<?= base_url('assets_backend/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

	<div class="card">
		<div class="card-header" align="left">
			<h3>Export Data Pendaftaran Peserta</h3>
		</div>
		<div class="card-body">
			<?php if (!empty(session()->getFlashdata('message'))) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<?php echo session()->getFlashdata('message'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<a href="<?= base_url('backend/pendaftaran'); ?>" class="btn btn-primary">Kembali</a>
		<hr />
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Nama Lengkap</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>No HP</th>
						<th>Nama Ayah</th>
						<th>Nama Ibu</th>
						<th>Alamat</th>
						<th>Program Pelatihan</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach($pendaftaran as $row): ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row->nama_lengkap ?></td>
							<td><?= $row->tempat_lahir ?></td>
							<td><?= $row->tanggal_lahir ?></td>
							<td><?= $row->no_hp ?></td>
							<td><?= $row->nama_ayah ?></td>
							<td><?= $row->nama_ibu ?></td>
							<td><?= $row->alamat ?></td>
							<td><?= $row->program_pelatihan ?></td>
							<td><?= $row->status?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets_backend/vendor/jquery/jquery.min.js')?>"></script>
<script src="<?= base_url('assets_backend/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets_backend/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets_backend/js/sb-admin-2.min.js')?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets_backend/vendor/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets_backend/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>      

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript"> 
	$(document).ready(function () {
		$('#dataTable1').DataTable({
			dom: 'Bfrtip',
			buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
		});
	});
</script>
