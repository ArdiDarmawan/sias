	<?php
		//menghitung jumlah surat masuk
		$query 	= "SELECT * FROM surat_masuk";
		$sql   	= mysqli_query($connect, $query);
		$count1	= mysqli_num_rows($sql); 

		//menghitung jumlah surat keluar
		$query 	= "SELECT * FROM surat_keluar";
		$sql   	= mysqli_query($connect, $query);
		$count2	= mysqli_num_rows($sql);  

		//menghitung jumlah Disposisi
		$query 	= "SELECT * FROM disposisi";
		$sql   	= mysqli_query($connect, $query);
		$count3	= mysqli_num_rows($sql);
		  
		//menghitung jumlah User
		$query 	= "SELECT * FROM user";
		$sql   	= mysqli_query($connect, $query);
		$count4	= mysqli_num_rows($sql);  
  
	?>
	<!-- Info Box -->
	
	<div class="">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h1>Wellcome SIAS Camat Negara</h1>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"> <i class="fa fa-chevron-up"></i></a></li>
							<li><a class="close-link"> <i class="fa fa-close"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-8 col-lg-10 col-sm-7">
							<!-- blockquote -->
							<blockquote>
								<span class="info-box-number">SELAMAT DATANG DI SISTEM INFORMASI ARSIP SURAT (SIAS)</span>
								<p>Silahkan pilih menu Navigator untuk mempermudah anda dalam bekerja</p>
							</blockquote>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Dashboard</h3>
			</div>
		</div>	
		<div class="clearfix"></div>
		<div class="row top_tiles">
			<a href="index.php?page=surat_masuk">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-envelope-o"></i></div>
						<div class="count"><?php echo $count1 ?></div>
						<h3>Surat Masuk</h3>
					</div>
				</div>
			</a>
			<a href="index.php?page=surat_keluar">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-envelope-o"></i></div>
						<div class="count"><?php echo $count2 ?></div>
						<h3>Surat Keluar</h3>
					</div>
				</div>
			</a>

				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-envelope-o"></i></div>
						<div class="count"><?php echo $count3 ?></div>
						<h3>Disposisi</h3>
					</div>
				</div>
				
			<a href="index.php?page=users">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-users"></i></div>
						<div class="count"><?php echo $count4 ?></div>
						<h3>Users account</h3>
					</div>
				</div>
			</a>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12 col-sm-9 col-xs-15">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Grafik Data <small>Persentase</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   <div class="chart" id="chart" style="height: 100%; width: 100%"></div>
                </div>
            </div>
        </div>	
       
		
		

