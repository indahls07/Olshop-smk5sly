<?php
    error_reporting(0);
    include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
	$a = mysqli_fetch_object($kontak);
	
	$produk = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);

    // $komen = mysqli_query($conn, "SELECT * FROM tb_komentar WHERE image_id = '".$_GET['id']."' ");
	// $k = mysqli_fetch_object($komen);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olshop SMKN 5 Selayar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-like.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header>  
        <div class="container">
        <a href="index.php"><div class="logo"></div></a>
        <!-- <h1><i class="bx bx-photo-album icon bx-md"></i><a href="index.php">Olshop</a></h1> -->
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
    
    <!-- product detail -->
    <div class="section">
        <div class="container">
             <h3>Detail Produk</h3>
            <div class="box">
                <div class="col-2">
                   <img src="foto/<?php echo $p->image ?>" width="60%" /> 
                </div>
                <div class="col-2">
                   <h3><?php echo $p->image_name ?><br />Kategori : <?php echo $p->category_name  ?></h3>
                   <h1>Rp. <?php echo $p->price  ?></h1>
                   <!-- <h5>Nama User : <?php echo $p->admin_name ?><br />
                   Upload Pada Tanggal : <?php echo $p->date_created  ?></h4> -->
                   <br>
                   <input type="submit" name="beli" value="Beli Sekarang" class="btn-submit">
                   <p>Deskripsi :<br />
                        <?php echo $p->image_description ?>
                   </p>
                   <!-- <i class='bx bx-share-alt bx-md bx-rotate-180 bx-border-circle'></i>
                   <i class='bx bxs-like bx-md'></i>
                   <i class='bx bxs-heart bx-md bx-border-circle'></i> Like -->
            </div>
        </div>
    </div>
    <!-- <script src="js/script.js"></script> -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2025 - Olshop SMKN 5 Selayar.</small>
        </div>
    </footer>
</body>
</html>