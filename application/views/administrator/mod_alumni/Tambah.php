<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tambah Data Alumni
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Alumni</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-6">    			

    			<div class="box box-primary"> 
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Alumni</h3>
            </div>
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_alumni" method="post" enctype="multipart/form-data">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nim">NO KTP *</label>
    							<input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Enter Nomor KTP" required>
    						</div>
    						<div class="form-group">
    							<label for="nama_lengkap">Nama Lengkap *</label>
    							<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Enter Nama Lengkap" required>
    						</div>
    						<div class="form-group">
    							<label for="email">Email *</label>
    							<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
    						</div>
    						<!-- <div class="form-group">
    							<label for="jk">Jenik Kelamin</label>
    							<div class="radio">
    								<label>
    									<input type="radio" name="jk" value="L">
    									Laki - Laki
    								</label>
    								<br>
    								<label>
    									<input type="radio" name="jk" value="P">
    									Perempuan
    								</label>
    							</div>
    						</div> -->
    						<div class="form-group">
    							<label>Alamat Lengkap *</label>
    							<textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat" required></textarea>
    						</div>
    						<div class="form-group">
    							<label>Kecamatan *</label>
    							<select class="form-control" id="kecamatan" name="kecamatan" required>
    								<option>-- Pilih Kecamatan --</option>
    								<?php 
                   foreach ($kecamatan as $k) { ?>
                    <option value="<?=$k['id_kecamatan']?>"><?=$k['nama_kecamatan']?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
               <label>Desa *</label>
               <select class="form-control" id="desa" name="desa" required>
               </select>
             </div>
             <div class="form-group">
               <label for="tahun_masuk">Tahun Masuk *</label>
               <input type="text" name="tahun_masuk" class="form-control" id="tahun_masuk" placeholder="Enter Nomor Tahun Masuk" required>
             </div>
             <div class="form-group">
               <label for="tahun_lulus">Tahun Lulus *</label>
               <input type="text" name="tahun_lulus" class="form-control" id="tahun_lulus" placeholder="Enter Nomor Tahun Lulus" required>
             </div>
             <div class="form-group">
              <label for="telepon">Telepon *</label>
              <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Enter Nomor Telepon" required>
            </div>
            
          </div>
          <!-- /.box-body -->                      				
        </div>
      </div>

      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-body">
            <div class="form-group">
              <label for="pekerjaan">Pekerjaan *</label>
              <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Enter Pekerjaan" required>
            </div>
            <div class="form-group">
              <label for="nama_usaha">Nama Usaha</label>
              <input type="text" name="nama_usaha" class="form-control" id="nama_usaha" placeholder="Enter Nama Usaha">
            </div>
            <div class="form-group">
              <label for="nama_lengkap">Bidang Usaha</label>
              <input type="text" name="bidang_usaha" class="form-control" id="bidang_usaha" placeholder="Enter Bidang Usaha">
            </div>
            <div class="form-group">
              <label for="foto_alumni">Foto Usaha</label>
              <input type="file" name="foto_usaha" class="form-control" id="foto_usaha">
            </div>
            <div class="form-group">
              <label for="nama_lengkap">Akun Facebook</label>
              <input type="text" name="akun_fb" class="form-control" id="akun_fb" placeholder="Enter Nama Akun Facebook">
            </div>
          </div>
        </div>                
      </div>

      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-body">
           <div class="form-group">
            <label for="username">Username * </label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
            <small style="color: red">Password Minimal 3 Digit</small>
          </div>
          <div class="form-group">
            <label for="password">Password *</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required> <input type="checkbox" name="lihatpwd" id="lihatpwd" onclick="seepwd()"> Lihat Password | 
            <small style="color: red">Password Minimal 3 Digit</small>
          </div>
          <div class="form-group">
            <label for="foto_alumni">Foto Diri *</label>
            <input type="file" name="foto_alumni" class="form-control" id="foto_alumni" required>
          </div>
          <div class="box-footer">
            <button type="submit" id="submit" name="submit" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Menyimpan Data Ini ?')">Submit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
          </div>
        </div>  
      </div>                
    </div>
  </form>
</div>
</section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script>
	$(function () {		

		$("#kecamatan").on('change', function() {
			$.post('<?=base_url()?>administrator/get_desa', {id: this.value}, (result) => {
				$("#desa").find("option").remove();
				$.map(result, function(val, i) {
					$('#desa').append(
						`
						<option value='${val.id_desa}'>${val.nama_desa}</option>
						`
						)
				})
			})
		})

    $("#username").on('focusout', function() {
      if ($("#username").val().length < 3) {
        alert('username Harus Lebih Dari 3 Digit');
        $("#submit").attr('disabled', true);
      } else {
        $("#submit").attr('disabled', false);
      }
    })

    $("#password").on('focusout', function() {
      if ($("#password").val().length < 3) {
        alert('Password Harus Lebih Dari 3 Digit');
        $("#submit").attr('disabled', true);
      } else {
        $("#submit").attr('disabled', false);
      }
    })

	})

  function seepwd()
  {
    var temp = document.getElementById("password"); 
    if (temp.type === "password") { 
      temp.type = "text"; 
    } 
    else { 
      temp.type = "password"; 
    } 
  }
</script>