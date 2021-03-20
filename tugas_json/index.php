<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Rest Web Services</title>


<h5>Contoh Form Group</h5>
<form>
	<div class="form-group">
		<label for="NAMA">Nama</label>
		<input type="text" id="nama" class="form-control" placeholder="Nama">
	</div>

	<div class="form-group">
		<label for="NIM">Umur</label>
		<input type="nim" id="umur" class="form-control" placeholder="NIM">
	</div>

	<div class="form-group">
		<label for="PRODI">PROGDI</label>
		<select id="progdi" class="form-control">
			<option value="">- Pilih Progdi -</option>
			<option value="">TI</option>
			<option value="">MI</option>
			<option value="">SI</option>
		</select>
	</div>

	

	<button type="submit" class="btn btn-outline-success">Kirim</button>


	<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">NIM</th>
					<th scope="col">NAMA</th>
					<th scope="col">PROGDI</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$link = mysqli_connect('localhost', 'root', '', 'mahasiswa');
				$query = 'SELECT * FROM mahasiswa';
				$result = mysqli_query($link,$query);

				if($result-> num_rows > 0){
					$i = 1;
					while ($row = $result-> fetch_assoc()) {
						echo '<tr><th scope="row" >'.$i."</th><td>".$row['nim']."</td><td>".$row['nama']."</td><td>".$row['progdi']."<td></tr>";
						$i++;
					}
					echo "</table>";
				}else {
					echo "0 daftar";
				}

				mysqli_close($link);
				?>
			</tbody>
		</table>



		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</form>