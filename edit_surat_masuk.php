	<?php
	include 'koneksi.php';

		if (isset($_REQUEST['edit'])) {
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
			$path				= "upload/surat_masuk/".$file;

			//proses update
			if (move_uploaded_file($file, $path)) {
				$query = "SELECT * FROM surat_masuk WHERE no='$_GET[no]'";
				$sql   = mysqli_query($connect, $query);
				$data  = mysqli_fetch_array($sql);
			//jika filenya ada, hapus filenya
				if (file_exists("upload/surat_masuk/".$data['file'])){
					unlink("upload/surat_masuk/".$data['file']);
				}
			//jika mengubah file		
				$query 	= "UPDATE `surat_masuk` SET `klarifikasi` = '$klarifikasi', `tanggal_terima` = '$tanggal_terima', `asal_surat` = '$asal_surat', `tanggal_surat` = '$tanggal_surat', `nomor_surat` = '$nomor_surat', `perihal` = '$perihal', `disposisi` = '$disposisi', `kepada` = '$kepada', `file` = '$file' WHERE `surat_masuk`.`no` = '$_GET[no]'";

				$sql   	= mysqli_query($connect, $query);
				if ($sql) {
					echo '<script language="javascript">
							  window.alert("Data berhasil di ubah")
	               	  		  window.location.href="./index.php?page=surat_masuk";
              	  		  </script>';
				}else{
					echo '<script>
						   	  window.alert("Data gagal diubah");
			 			  </script>';
				}
			}else{
			//jika tidak mengubah file
				$query 	= "UPDATE `surat_masuk` SET `klarifikasi` = '$klarifikasi', `tanggal_terima` = '$tanggal_terima', `asal_surat` = '$asal_surat', `tanggal_surat` = '$tanggal_surat', `nomor_surat` = '$nomor_surat', `perihal` = '$perihal', `disposisi` = '$disposisi', `kepada` = '$kepada', `file` = '$file' WHERE `surat_masuk`.`no` = '$_GET[no]'";

				$sql	= mysqli_query($connect, $query);
				if ($sql) {
					echo '<script language="javascript">
						  window.alert("Data berhasil di ubah")
               	  		  window.location.href="./index.php?page=surat_masuk";
              	  		  </script>';
				}else{
					echo '<script>
						  window.alert("Data gagal di ubah");
			 			  </script>';
				}
			}
		}
	?>	

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Edit Surat Masuk</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Edit Surat Masuk</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- Form edit surat masuk -->
						<?php
							$query 	= "SELECT * FROM surat_masuk WHERE no='$_GET[no]'";
							$sql 	= mysqli_query($connect, $query);
							while ($data = mysqli_fetch_array($sql)) {
						?>	
							<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Tanggal Terima<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="tanggal_terima" class="form-control has-feedback-left" id="tanggal2" required="required" value="<?php echo IndonesiaTgl($data['tanggal_terima']);?> ">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>	
							</div> 
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">No<span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<text name="no"  class="form-control col-md-7 col-xs-12" value="<?php echo $data['no']?>"><i>Penomoran Otomatis</i></text>
								</div>
							</div>	
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Klarifikasi<span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="klarifikasi" class="form-control col-md-7 col-xs-12" value="<?php echo $data['klarifikasi']?>">
								</div>
							</div>							
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Asal Surat<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="asal_surat" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['asal_surat']?>">
								</div>
							</div>	
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Tanggal Surat<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="tanggal_surat" class="form-control has-feedback-left" id="tanggal" required="required" value="<?php echo IndonesiaTgl($data['tanggal_surat']);?> ">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>	
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Surat <span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nomor_surat" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['nomor_surat']?>">
								</div>
							</div>	
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="perihal" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['perihal']?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Disposisi <span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="disposisi" class="form-control col-md-7 col-xs-12" value="<?php echo $data['disposisi']?>">
								</div>
							</div>		
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Kepada <span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="kepada" class="form-control col-md-7 col-xs-12" value="<?php echo $data['kepada']?>">
								</div>
							</div>	

							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">File <span>&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" name="file" class="form-control col-md-7 col-xs-12" value="<?php echo $data['file(filename)']?>">
								</div>
							</div>	
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									
									<input type="submit" class="btn btn-success" value="Simpan" name="edit">
								</div>
							</div>												
						</form>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>