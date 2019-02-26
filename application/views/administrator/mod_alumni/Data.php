<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">

    	<div class="row">
    		<div class="col-md-12">
    			<div class="box box-primary">
    				<div class="box-header">
    					<h3 class="box-title">Data Table With Full Features</h3>
    				</div>
    				<div class="box-body">
    					<table id="example1" class="table table-bordered table-striped">
    						<thead>
    							<tr>
    								<td colspan="7">
    									<a href="<?=base_url()?>administrator/tambah_alumni" class="btn btn-block btn-primary">Tambah Data</a>
    								</td>
    							</tr>
    							<tr>
    								<th>NO</th>
    								<th>NIM</th>
    								<th>Nama</th>
    								<th>Alamat</th>
    								<th>Fakultas</th>
    								<th>Prodi</th>
    								<th>Actions</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php 
    							$no = 1;
    							foreach ($alumni as $a) { ?>
    								<tr>
    									<td><?=$no?></td>
    									<td><?=$a['nim']?></td>
    									<td><?=$a['nama']?></td>
    									<td><?=$a['alamat']?></td>
    									<td><?=$a['nama_fakultas']?></td>
    									<td><?=$a['nama_prodi']?></td>
    									<td>
    										<div class="btn-group">
    											<a href="<?=base_url()?>administrator/edit_alumni/<?=$a['nim']?>" class="btn btn-success">Edit</a>
    											
    											<button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

    											<a href="<?=base_url()?>administrator/hapus_alumni/<?=$a['nim']?>" class="btn btn-danger">Hapus</a>
    										</div>
    									</td>
    								</tr>
    							<?php $no++; } ?>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</div>

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyright © 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.</strong>
</footer>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable();
  })
</script>