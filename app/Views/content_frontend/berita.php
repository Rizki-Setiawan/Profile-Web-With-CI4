<?= $this->extend('layout_frontend/page_layout') ?>
<?= $this->section('content_frontend') ?>
<section id="berita" class="services">
	<div class="container" data-aos="fade-up">
		<div class="section-title">
			<h2>Berita</h2>
		</div>
		<div class="row">
			<div class="col-sm-9">	
				<div class="row">				
					<?php foreach ($berita as $row) : ?>
						<div class="col-sm-5">
							<div class="row">
								<div class="col-md-12 mb-2 card" >
									<div class="card-body">
										<p><?= substr($row->content, 0, 150) ?>...</p><hr>
										<h5 class="h5"><a href="/blkk/berita/<?= $row->slug ?>"><b><?= $row->title ?></b></a></h5>		
										<p><i class="bi bi-calendar3"></i>&nbsp<font size="2"><?= $row->created_at ?></font></p>						
									</div>
								</div>
							</div>
						</div>
						&nbsp&nbsp
					<?php endforeach ?>
				</div>
			</div>
			<div class="col-sm-3">					
				<div class="row">
					<div class="col-md-12 mb-2 card" style="background-color: #5C768D; color: white;">
						<div class="card-body" >
							<h5 class="h5"><b>Postingan Terbaru</b></a></h5><hr>
							<?php foreach ($berita1 as $row1) : ?>
								<h6 class="h6"><a href="/blkk/berita/<?= $row1->slug ?>" style="color: white;"> <b><?= $row1->title ?></b></a></h6>
								<p><font size="2"><i class="bi bi-calendar3"></i>&nbsp<?= $row1->created_at ?></font></p><hr>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?= $this->endSection() ?>
