<?php
include 'koneksi.php';

	$id_surat1		= $_REQUEST['no'];
	$query		= "SELECT * FROM `surat_masuk` WHERE no='$_GET[no]'";
	$sql		= mysqli_query($connect, $query);
	$data		= mysqli_fetch_array($sql);
					
?>

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Disposisi</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Disposisi Surat</h2>&nbsp; &nbsp; 
						<a href="index.php?page=tambah_disposisi&id=<?php echo $data['no']?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Disposisi</a>
						<a href="index.php?page=tambah_disposisi" class="btn btn-warning btn-sm"><i class="fa fa-reply"></i> Kembali</a>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
						
					<div class="x_content">
						<table id="disposisi" class="table table-striped table-bordered table-hover">
							<thead>
								<tr style="font-size: 13px;">
									<th width="1" style="vertical-align: middle;">Id Disposisi</th>
									<th style="vertical-align: middle;"><center>Surat Dari</center></th>
									<th style="vertical-align: middle;"><center>No Surat</center></th>
									<th style="vertical-align: middle;"><center>Tanggal Surat</center></th>
									<th style="vertical-align: middle;"><center>Diterima Tanggal</center></th>
									<th style="vertical-align: middle;"><center>Nomor Agenda</center></th>
									<th style="vertical-align: middle;"><center>Sifat</center></th>
									<th style="vertical-align: middle;"><center>Perihal</center></th>
									<th style="vertical-align: middle;"><center>Diteruskan Kepada Saudara</center></th>
									<th style="vertical-align: middle;"><center>Dengan Hormat Harap </center></th>
									<th style="vertical-align: middle;"><center>Catatan</center></th>
									<th style="vertical-align: middle;"><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
										$no=1;
										$query2	= "SELECT * FROM disposisi JOIN surat_masuk ON disposisi.no = surat_masuk.no WHERE disposisi.no='$no'";
										$sql2	= mysqli_query($connect, $query2);
										while ($row= mysqli_fetch_array($sql)) {
									?>
									<td style="vertical-align: middle;"><?php echo $roow['id_disposisi']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['surat_dari']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['no_surat']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['tanggal_surat']?>, <br><?php echo InggrisTgl($row['batas_waktu']);?></td>
									<td style="vertical-align: middle;"><?php echo $row['diterima_tanggal']?>, <br><?php echo InggrisTgl($row['batas_waktu']);?></td>
									<td style="vertical-align: middle;"><?php echo $row['no_agenda']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['sifat']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['perihal']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['diteruskan']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['arahan']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['arahan']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['catatan']; ?></td>

									<td>
										<center>
											<a href="index.php?page=edit_disposisi&id=<?php echo $id_surat ?>&id_disp=<?php echo $row['id_disp'] ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="index.php?page=hapus_disposisi&id=<?php echo $id_surat ?>&id_disp=<?php echo $row['id_disp'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
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