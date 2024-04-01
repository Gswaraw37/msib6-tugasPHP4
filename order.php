<?php
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $proses = $_POST['proses'];

	switch ($produk) {
		case 'TV':
			$harsat = 3000000;
			break;
		case 'AC':
			$harsat = 5000000;
			break;
		case 'KULKAS':
			$harsat = 4000000;
			break;
		case 'LAPTOP':
			$harsat = 10000000;
			break;
		default:
			$harsat = 0;
			break;
	}

	$total = $jumlah * $harsat;
	$diskon = 0.2 * $total;
	$ppn = 0.1 * ($total - $diskon);
	$harber = ($total - $diskon) + $ppn;

	$harsat = formatUang($harsat);
	$total = formatUang($total);
	$diskon = formatUang($diskon);
	$ppn = formatUang($ppn);
	$harber = formatUang($harber);

	function formatUang($nilai) {
		return "Rp " . number_format($nilai, 0, ',', '.');
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tugas2 PHP - Genta Swarawisesa Erliarto Putra</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container-fluid" style="padding-top: 20px; padding-bottom: 169px;">
		<div class="row">
			<div class="col-md-8">
				<center style="background-color: pink;">
					<h1>FORM BELANJA</h1>
				</center>
				<form action="#" method="POST" abframeid="iframe.0.9000169463464569" abineguid="843C2D3769CE4924A4F875CF4FBD44FC">
					<div class="form-group row">
						<label for="nama" class="col-4 col-form-label">Nama Pelanggan:</label> 
						<div class="col-8">
							<input id="nama" name="nama" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="produk" class="col-4 col-form-label">Produk Pilihan:</label> 
						<div class="col-8">
							<select id="produk" name="produk" class="custom-select">
								<option value="">--- PILIH PRODUK ---</option>
								<option value="TV">TV</option>
								<option value="AC">AC</option>
								<option value="KULKAS">KULKAS</option>
								<option value="LAPTOP">LAPTOP</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="jumlah" class="col-4 col-form-label">Jumlah Beli:</label> 
						<div class="col-8">
							<input id="jumlah" name="jumlah" type="text" class="form-control">
						</div>
					</div> 
					<div class="form-group row" style="background-color: pink;">
						<div class="offset-4 col-8">
							<button name="proses" type="submit" class="btn btn-primary">Beli</button>
							<button name="unproses" type="reset" class="btn btn-danger">Batal</button>
						</div>
					</div>
				</form>
				<?php
					if (isset($proses)) {
				?>
				<center>
					<p>Nama Pelanggan: <?= $nama ?></p>
					<p>Produk Pilihan: <?= $produk ?></p>
					<p>Jumlah Beli: <?= $jumlah ?></p>
					<p>Harga Satuan: <?= $harsat ?></p>
					<p>Total Belanja: <?= $total ?></p>
					<p>Potongan Diskon: <?= $diskon ?></p>
					<p>PPN: <?= $ppn ?></p>
					<p>Harga Bersih: <?= $harber ?></p>
				</center>
				<?php } ?>
			</div>
			<div class="col-md-4">
				<dl>
					<dt>
						======================================
					</dt>
					<dt>
						Harga Satuan Barang:
					</dt>
					<dd>
						TV: Rp 3.000.000
					</dd>
					<dd>
						AC: Rp 5.000.000
					</dd>
					<dd>
						KULKAS: Rp 4.000.000
					</dd>
					<dd>
						LAPTOP: Rp 10.000.000
					</dd>
					<dt>
						Total Pembelian:
					</dt>
					<dd>
						Perkalian Antara Jumlah Pembelian dan Harga Satuan Barang
					</dd>
					<dt>
						Diskon:
					</dt>
					<dd>
						20% dari Total Pembelian
					</dd>
					<dt>
						PPN:
					</dt>
					<dd>
						10% dari Total Pembelian Dikurangi Diskon
					</dd>
					<dt>
						Harga Bersih:
					</dt>
					<dd>
						Total Pembelian Dikurangi Diskon Kemudian Ditambah Dengan PPN
					</dd>
					<dt>
						======================================
					</dt>
				</dl>
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>