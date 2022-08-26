<?= $this->extend('layout_backend/page_layout') ?>

<?= $this->section('content_backend') ?>
<div class="container">
	<div class="card">
		<div class="card-header" align="left">
			<h3>Data Pendaftaran Peserta</h3>
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
		<a href="<?= base_url('backend/pendaftaran/create'); ?>" class="btn btn-primary">Tambah</a>&nbsp&nbsp
		<a href="<?= base_url('backend/pendaftaran/export'); ?>" class="btn btn-success">Export Data</a>
		<hr />
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Nama Lengkap</th>
						<th>No HP</th>
						<th>Alamat</th>
						<th>Program Pelatihan</th>
						<th>Status</th>
						<th width="20%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach($pendaftaran as $row): ?>
						<tr>
							<td><?= $no++; ?></td>
							<td>
								<strong><?= $row->nama_lengkap ?></strong><br>
								<small class="text-muted"><?= $row->tempat_lahir ?>, <?= $row->tanggal_lahir ?></small>
							</td>
							<td><?= $row->no_hp ?></td>
							<td><?= $row->alamat ?></td>
							<td><?= $row->program_pelatihan ?></td>
							<td>
								<?php if($row->status === 'Telah Verifikasi'){ ?>
									<small class="text-success"><b>Telah Verifikasi</b></small>
								<?php }else{ ?>
									<small class="text-danger"><b>Belum Verifikasi</b></small>
								<?php } ?>
							</td>
							<td>
								<a title="Detail" href="<?= base_url("backend/pendaftaran/detail/$row->id"); ?>" class="btn btn-sm btn-success">Detail</a>
								<a title="Edit" href="<?= base_url("backend/pendaftaran/edit/$row->id"); ?>" class="btn btn-sm btn-primary">Edit</a>
								<a title="Hapus" href="#" data-href="<?= base_url("backend/pendaftaran/delete/$row->id") ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-danger">Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		
		<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<h2 class="h2">Apakah anda yakin?</h2>
						<p>Data akan dihapus permanen.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
						<a href="#" role="button" id="delete-button" class="btn btn-danger">Hapus</a>
					</div>
				</div>
			</div>
		</div>

		<script>
			function confirmToDelete(el){
				$("#delete-button").attr("href", el.dataset.href);
				$("#confirm-dialog").modal('show');
			}
		</script>

	</div>
</div>
</div>                  

<?= $this->endSection() ?>