<?php
session_start();
if (!$_SESSION['admin']){   
header('Location: giris.php');
}
else{
include 'baglanti.php';
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Title -->
    <title>Yönetim Paneli | Kullanıcılar</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Template -->
    <link rel="stylesheet" href="assets/css/graindashboard.css">
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">
        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
            <!-- Logo For Mobile View -->
            <a class="navbar-brand navbar-brand-mobile" href="/">
                <img class="img-fluid w-100" src="assets/img/logo-mini.png" alt="Graindashboard">
            </a>
            <!-- End Logo For Mobile View -->

            <!-- Logo For Desktop View -->
            <a class="navbar-brand navbar-brand-desktop" href="/">
                <img class="side-nav-show-on-closed" src="assets/img/logo-mini.png" alt="Graindashboard" style="width: auto; height: 33px;">
                <img class="side-nav-hide-on-closed" src="assets/img/logo.png" alt="Graindashboard" style="width: auto; height: 33px;">
            </a>
            <!-- End Logo For Desktop View -->
        </div>

        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">
                <!-- Side Nav Toggle -->
                <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose"
                    data-target="#sidebar"
                    data-target-wrapper="body">
                    <i class="gd-align-left"></i>
                </a>
                <!-- End Side Nav Toggle -->

                <div class="dropdown ml-auto">
                </div>
                <!-- User Avatar -->
                <div class="dropdown mx-3 dropdown ml-2">
                    <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                        <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                        <span class="mr-md-2 avatar-placeholder">Y</span>
                        <span class="d-none d-md-block">Yönetici</span>
                        <i class="gd-angle-down d-none d-md-block ml-2"></i>
                    </a>

                    <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                        <li class="unfold-item">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="cikis.php">
                    <span class="unfold-item-icon mr-3">
                      <i class="gd-power-off"></i>
                    </span>
                                Çıkış Yap
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End User Avatar -->
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
		
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="index.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-home"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Anasayfa</span>
                </a>
            </li>

			
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="urunler.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-shopping-cart"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Ürünler</span>
                </a>
            </li>
			
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="kullanicilar.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-user"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Kullanıcılar</span>
                </a>
            </li>
			
            <!-- Static -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="cikis.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-power-off"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Çıkış Yap</span>
                </a>
            </li>
            <!-- End Static -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Ürün Düzenle</div>
                    </div>
                    <div>
                        <form action="urun-duzenle.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <?php
                            $urunler = $db->prepare("SELECT * FROM urunler WHERE id=$id");
                            $urunler->execute(array(0));
                            $cek = $urunler->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($cek as $row) { ?>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="baslik">Ürün Adı</label>
                                    <input type="text" class="form-control" value="<?php echo $row["baslik"]; ?>" id="baslik" name="baslik" placeholder="Ürün Adı:" required>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori" required>
                                        <option value="">Seçiniz</option>
                                        <option value="1" <?php if($row["kategori"]==1){ echo "selected";} ?>>Erkek</option>
                                        <option value="0"<?php if($row["kategori"]==0){ echo "selected";} ?>>Kadın</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                    <label for="resim">Ürün Resimleri</label>
                                    <input type="file" name="resim[]" multiple>
                                    <input type="aciklama" class="form-control" id="aciklama" name="aciklama" value="<?php echo $row["aciklama"]; ?>" required>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="renk">Ürün Bedeni</label>
                                    <select class="form-control" id="beden" name="beden" required>
                                        <option value="">Seçiniz</option>
                                        <option value="S"<?php if($row["beden"]=="S"){ echo "selected";} ?>>S</option>
                                        <option value="M"<?php if($row["beden"]=="M"){ echo "selected";} ?>>M</option>
                                        <option value="L"<?php if($row["beden"]=="L"){ echo "selected";} ?>>L</option>
                                        <option value="XL"<?php if($row["beden"]=="XL"){ echo "selected";} ?>>XL</option>
                                        <option value="XXL"<?php if($row["beden"]=="XXL"){ echo "selected";} ?>>XXL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                    <label for="fiyat">Ürün Fiyatı</label>
                                    <input type="fiyat" class="form-control" id="fiyat" name="fiyat" value="<?php echo $row["fiyat"]; ?>" required>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="renk">Ürün Rengi</label>
                                    <select class="form-control" id="renk" name="renk" required>
                                        <option value="">Seçiniz</option>
                                        <option value="KIRMIZI"<?php if($row["renk"]=="KIRMIZI"){ echo "selected";} ?>>KIRMIZI</option>
                                        <option value="YEŞİL"<?php if($row["renk"]=="YEŞİL"){ echo "selected";} ?>>YEŞİL</option>
                                        <option value="MAVİ"<?php if($row["renk"]=="MAVİ"){ echo "selected";} ?>>MAVİ</option>
                                        <option value="MOR"<?php if($row["renk"]=="MOR"){ echo "selected";} ?>>MOR</option>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-primary float-right" name="urun-duzenle">Düzenle</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>

        <!-- Footer -->
        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
				&copy; 2022 Yönetim Paneli
                </div>

                <div class="col-lg text-center text-lg-right">
                    Versiyon 1.0
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</main>


<script src="assets/js/graindashboard.js"></script>
<script src="assets/js/graindashboard.vendor.js"></script>

</body>
</html>
<?php } ?>