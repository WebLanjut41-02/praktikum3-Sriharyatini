<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>MENU</title>
</head>
<body>

	<h3>SILAHKAN PESAN MAKANAN ANDA</h3>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<td>Kode Makanan</td><p>
				<td>Makanan Berat<td>
				<td>Harga</td>
				<td>Masukan Pesanan</td>

			</tr><p><p>
		</thead>
		<tbody>
			<?php 
				foreach($data->result_array() as $i):
					$id=$i['id'];
					$mb=$i['makananberat'];
					$total=$i['total'];
			?>
			<tr>
				<td><?php echo $id;?></td>
				<td><?php echo $mb;?></td>
				<td><?php echo $total;?></td>
				<td><input type="checkbox" name="checkbox" value="check"  /></td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table><br>
	<input type="submit" value="Submit" ></div>
	
</div>
</body>
</html>