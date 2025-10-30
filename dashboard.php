<?php
    session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
    include 'db.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olshop SMKN 5 Selayar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
        <a href="index.php"><div class="logo"></div></a>
        <ul>
           <li><a href="dashboard.php">Dashboard</a></li>
           <li><a href="profil.php">Profil</a></li>
           <li><a href="data-produk.php">Data Produk</a></li>
           <li><a href="Keluar.php">Keluar</a></li>
        </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h3 style="text-align:center">Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Olshop SMKN 5 Selayar</h3>
            </div>
        </div>
        
        <div class="container">
        <h3>Produk Terbaru</h3>
        <div class="box">
            <?php
                $user=$_SESSION['a_global']->admin_id;
                // echo $admin;
                $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE admin_id='$user'  AND image_status=1  ORDER BY image_id DESC LIMIT 4");
                // $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_status=1  ORDER BY image_id DESC LIMIT 4");
                if(mysqli_num_rows($foto) > 0){
                    while($p = mysqli_fetch_array($foto)){
            ?>
            <a href="detail-produk.php?id=<?php echo $p['image_id'] ?>">
            
            <div class="col-4">
                <!-- <div class="zoom-effect">
                    <div class="kotak">
                    <img src="foto/<?php echo $p['image'] ?>" height="160px" />
                    </div>
                </div> -->
                    <div class="zoom-effect">
                        <div class="kotak"><img src="foto/<?php echo $p['image'] ?>" height="160px" /></div>
                    </div>
                <p class="nama"><?php echo substr($p['image_name'], 0, 30)  ?></p>
                <!-- <p class="admin">Upload by : <?php echo $p['admin_name'] ?></p> -->
              <p class="harga">Harga: Rp. <?php echo $p['price']  ?></p>
            </div>
            
            </a>
            <?php }}else{ ?>
                <p>Produk belum tersedia</p>
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