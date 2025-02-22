<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Laut</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Id</th>
							<th>Nama Laut</th>
							<th>Nama Peneliti</th>
							<th>Tahun Penemuan</th> 
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from informasi order by id ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['nama_laut']?></td>
							<td><?php echo $row['nama_peneliti']?></td>
							<td><?php echo $row['tahun_penemuan']?></td>
							<td><a href="contact.php?id=<?php echo $row['informasi_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>LAUT</h4>
				<img src="images/penyu 2.jpg" class="img-thumbnail img-responsive">
				<p>semua makhluk hidup yang ada di laut baik hewan maupun tumbuhan atau karang. Secara umum biota laut dibagi menjadi tiga kelompok besar yaitu plankton, nekton dan Bentos pembagain ini tidak ada kaitannya dengan klasifikasi ilmiah, ukuran, hewan atau tumbuhan tetapi berdasarkan pada kebiasaan hidup secara umum, seperti gerak berjalan, pola hidup dan persebaran menurut ekologi.<br/><a class="btn btn-danger btn-xs" href="ruang_kelas.html"role="button">Info Laut</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>