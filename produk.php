<?php
    error_reporting(0);
    include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olshop SMKN 5 Selayar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
        <a href="index.php"><div class="logo"></div></a>
        <!-- <h1><a href="index.php">Olshop SMKN 5 Selayar</a></h1> -->
        <ul>
            <li><a href="produk.php">Produk</a></li>
            <li><a href="registrasi.php">Registrasi</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        </div>
         <!-- search -->
         <div class="search">
            <div class="container">
                <form action="produk.php">
                    <input type="text" name="search" placeholder="Cari Produk">
                    <button type="submit" name="cari"><i class="fa fa-search fa-2x"></i></button>
                    <!-- <button type="submit" name="cari"><i class="bx bx-search icon bx-xs"></i></button> -->
                </form>
            </div>
        </div>
    </header>

    <!-- new product -->
    <div class="section">
    <div class="container">
       <h3>Semua Produk</h3>
       <div class="box">
          <?php
		      if($_GET['search'] != '' || $_GET['kat'] != ''){
			     $where = "AND image_name LIKE '%".$_GET['search']."%' AND category_id LIKE '%".$_GET['kat']."%' ";
			  }
              $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_status = 1 $where ORDER BY image_id DESC");
			  if(mysqli_num_rows($foto) > 0){
				  while($p = mysqli_fetch_array($foto)){
		  ?>
          <a href="detail-produk.php?id=<?php echo $p['image_id'] ?>">
          <div class="col-4">
                <div class="zoom-effect">
                    <div class="kotak"><img src="foto/<?php echo $p['image'] ?>" height="160px" /></div>
                </div>
              <p class="nama"><?php echo substr($p['image_name'], 0, 30)  ?></p>
             <!-- <p class="admin">Upload by : <?php echo $p['admin_name'] ?></p> -->
             <p class="harga">Harga: Rp. <?php echo $p['price']  ?></p>
          </div>
            </a>
          <?php }}else{ ?>
              <p>Produk tidak ada</p>
          <?php } ?>
       </div>
    </div>
    </div>
    
    <!-- footer -->
     <footer>
        <div class="container">
            <small>Copyright &copy; 2025 - Olshop SMKN 5 Selayar.</small>
        </div>
    </footer>
</body>
</html>