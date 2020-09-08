<?php
 include 'koneksi.php';

		if (isset($_REQUEST['submit'])) {
			$no 				= $_POST['no'];
			$klarifikasi		= $_POST['klarifikasi'];
			$tanggal_terima 	= InggrisTgl($_POST['tanggal_terima']);	
			$asal_surat			= $_POST['asal_surat'];
			$tanggal_surat 		= InggrisTgl($_POST['tanggal_surat']);
			$nomor_surat 		= $_POST['nomor_surat'];
			$perihal 			= $_POST['perihal'];
			$disposisi 			= $_POST['disposisi'];
			$kepada				= $_POST['kepada'];
			$file				= $_FILES['file']['name'];
			$user   			= $_SESSION['fullname'];
			

			$query 		= "INSERT INTO `surat_masuk` (`no`, `klarifikasi`, `tanggal_terima`, `asal_surat`, `tanggal_surat`, `nomor_surat`, `perihal`, `disposisi`, `kepada`, `file`) VALUES ('$no', '$klarifikasi', '$tanggal_terima', '$asal_surat', '$tanggal_surat', '$nomor_surat', '$perihal', '$disposisi', '$kepada', '$file')";


				$sql 		= mysqli_query($connect, $query);

			if($sql){
				echo '<script>
						window.alert("Data berhasil di simpan");
						window.location.href="./index.php?page=surat_masuk";
					  </script>';
			}else{
				echo '<script>
						window.alert("Data gagal di simpan");
					  </script>';
			}
		}
	?>	

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Tambah Surat Masuk</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Tambah Surat Masuk</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>



					<div class="x_content">
						<!--Form tambah surat masuk -->
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Terima <span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="tanggal_terima" class="form-control has-feedback-left" id="tanggal2">
								<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div> 
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">No<span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<text name="no" class="form-control col-md-7 col-xs-12"><i>Penomoran Otomatis</i></text>
								</div>
							</div>	
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Klarifikasi<span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="klarifikasi" class="form-control col-md-7 col-xs-12">
								</div>
							</div>							
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Asal Surat<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="asal_surat" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>	
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Surat<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="tanggal_surat" class="form-control has-feedback-left" id="tanggal">
								<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Surat <span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nomor_surat" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>	
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="perihal" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Disposisi <span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="disposisi" class="form-control col-md-7 col-xs-12">
								</div>
							</div>		
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Kepada <span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="kepada" class="form-control col-md-7 col-xs-12">
								</div>
							</div>	

							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">File <span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" name="file" class="form-control col-md-7 col-xs-12">
								</div>
							</div>	
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									<button type="reset" class="btn btn-default">Reset</button>
  									<input type="submit" class="btn btn-success" value="Simpan" name="submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>