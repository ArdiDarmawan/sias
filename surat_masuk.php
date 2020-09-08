<?php
include 'koneksi.php';
	?>
<div class="">
 		<div class="page-title">
 			<div class="title_left">
 				<h3>Surat Masuk</h3>
 			</div>
 		</div>
 		<div class="clearfix"></div>

 		<div class="row">
 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<h2>Data Surat Masuk</h2>&nbsp; &nbsp;<a href="index.php?page=tambah_surat_masuk" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Surat Masuk</a>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<table id="surat_masuk" class="table table-striped table-bordered table-hover">
 							<thead>
 								<tr style="font-size: 13px;">
 									<th width="1" style="vertical-align: middle;">Hari/Tanggal Terima</th>
 									<th><center>No</center></th>
 									<th><center>Klarifikasi</center></th>
 									<th><center>Asal Surat<br></center></th>
 									<th><center>Tanggal Surat</center></th>
 									<th><center>Nomor Surat</center></th>
 									<th><center>Perihal</center></th>
 									<th><center>Disposisi</center></th>
 									<th><center>Kepada</center></th>
 									<th><center>File</center></th>
 									<th style="vertical-align: middle;"><center>Action</center></th>
 								</tr>
 							</thead>
 							<tbody>
 								<tr>
 									<?php
 										$no=1;
 										$query	= "SELECT * FROM surat_masuk";
 										$sql	= mysqli_query($connect, $query);
 									    while ($data= mysqli_fetch_array($sql)) {
 									?>
 									
 									<td style="vertical-align: middle;"><?php echo IndonesiaTgl($data['tanggal_terima'])?></td>
 									<td style="vertical-align: middle;"><?php echo $data['no'] ?></td>
 									<td style="vertical-align: middle;"><?php echo $data['klarifikasi'] ?></td>
 									<td style="vertical-align: middle;"><?php echo $data['asal_surat'] ?></td>
 									<td style="vertical-align: middle;"><?php echo IndonesiaTgl($data['tanggal_surat']) ?></td>
 									<td style="vertical-align: middle;"><?php echo $data ['nomor_surat'] ?></td>
 									<td style="vertical-align: middle;"><?php echo $data ['perihal'] ?></td>
 									<td style="vertical-align: middle;"><?php echo $data ['disposisi'] ?></td>
 									<td style="vertical-align: middle;"><?php echo $data ['kepada'] ?></td>
 									<td style="vertical-align: middle;"><?php echo $data ['file'] ?></td>
 									
 									<td>
 										<center>
 											<a href="index.php?page=edit_surat_masuk&no=<?php echo $data['no']; ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 											<a href="index.php?page=hapus_surat_masuk&no=<?php echo $data['no'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
 											
 											<?php  if($_SESSION['level']== 'admin') {?>
 											<a href="index.php?page=disposisi&no=<?php echo $data['no'] ?>" class="btn btn-primary" title="Disposisi"><i class="fa fa-file-text-o"></i></a>
 											<a href="cetak_disposisi.php?no=<?php echo $data['no']; ?>" class="btn btn-success" title="Print" type="submit" target="_blank" name="cetak"><i class="fa fa-print"></i></a>
 											<?php } ?>
 										</center>
 									</td>
 								</tr>
 								<?php 
								} 
								?>
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>