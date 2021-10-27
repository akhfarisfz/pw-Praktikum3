<?php
	$Barang =[
		[
			'NmBarang'=>"Beras",
			'Berat'=>3500,
			'Stok'=>100,
		] ,
		[
			'NmBarang'=>"Telur",
			'Berat'=>500,
			'Stok'=>0,
		] ,
		[
			'NmBarang'=>"Tepung Terigu",
			'Berat'=>450,
			'Stok'=>50,
		] ,
		[
			'NmBarang'=>"Garam Dapur",
			'Berat'=>360,
			'Stok'=>4,
		] ,
		[
			'NmBarang'=>"Indomie Goreng",
			'Berat'=>50,
			'Stok'=>200,
		],
		[
			'NmBarang'=>"Minyak",
			'Berat'=>100,
			'Stok'=>0,
		],
	];
	$index=0	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" <href = "style.css">
	<title>Konversi Barang</title>
</head>
<style>
	html{
		font-family: helvetica;
		background-color: blue;
	}
</style>
<body>

	<div class="container">
		<h1 class ="Judul">Konversi Barang Pak Joy</h1>
		<table border="5pt";class="Tabel">
	  	<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Berat (kg)</th>
			<th>Berat (gram)</th>
			<th>Berat (miligram)</th>
			<th>Stok</th>
		</tr>
		</thead>
	<tbody>
		
		<?php
		foreach($Barang as $Baring)
	{$index +=1?>
		  <tr>
			<td><?=$index?></td>
			<td><?=$Baring['NmBarang']?></td>
			<td><?=$Baring['Berat']?></td>
			<td><?=$Baring['Berat']*1000?></td>
			<td><?=$Baring['Berat']*100000?></td>
			<td><?=$Baring['Stok']?></td>
			</tr>	
	<?php }?>  
  </table>
	</div>
</body>
</html>