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
    				<div class="box-header with-border">
    					<h3 class="box-title">Tambah Data Prodi</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_desa" method="post">
    					<div class="box-body">
                            <input type="hidden" name="id_desa" value="<?=$p['id_desa']?>">
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control" id="kecamatan" name="kecamatan">
                                    <option>-- Pilih Kecamatan --</option>
                                    <?php 
                                        foreach ($kecamatan as $f) { 
                                            if ($f['id_kecamatan'] == $p['id_kecamatan']) { ?>
                                                <option value="<?=$f['id_kecamatan']?>" selected><?=$f['nama_kecamatan']?></option>
                                            <?php } else { ?>
                                                <option value="<?=$f['id_kecamatan']?>"><?=$f['nama_kecamatan']?></option>
                                            <?php } 
                                        } ?>
                                </select>
                            </div>
    						<div class="form-group">
                                <label for="nama_desa">Nama Desa</label>
                                <input type="text" name="nama_desa" class="form-control" id="nama_desa" placeholder="Enter Nama Desa" value="<?=$p['nama_desa']?>">
                            </div>                            
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="update" name="update" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Mengupdate Data Ini ?')">Edit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
    					</div>
    				</form>
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