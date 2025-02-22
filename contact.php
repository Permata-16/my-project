<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span>INFORMASI LAUT</h2>
				<?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
									<div class="alert alert-success">
									Terima kasih, pesan anda sudah terkirim!
									</div>
					<?php

					}

					?>
					<form action="laut.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>Id
								<input type="text" number="Id" class="form-control input-md" placeholder="Isikan id anda dengan benar" required> 
								</td>
							</tr>
							<tr>
								<td>Nama laut
								<input type="text" name="Nama_laut" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Nama peneliti
								<input type="text" name="Nama_peneliti" class="form-control input-md" placeholder="Isikan nama penelitinya" required>
								</td>
							</tr>
							<tr>
								<td>Tahun penemuan
								<textarea type="text" number="Tahun_penemuan" class="form-control input-md" required> </textarea>
								</td>
							</tr>
							<tr>
								<td>
								<input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>Sumber Kehidupan</h4>
				<img src="images/lautnya.jpg" class="img-thumbnail img-responsive">
				<p>Samudra adalah tempat tinggal beranekaragam kehidupan yang memanfaatkannya sebagai habitat.<br/>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		
<?php include "footer.php"; ?>