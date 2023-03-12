<?php
session_start();
if (!$_SESSION['admin']){   
header('Location: giris.php');
}
else{
include 'baglanti.php';
$kadin = $db->query("SELECT COUNT(kategori) as kadin FROM urunler WHERE kategori='0'")->fetch(PDO::FETCH_ASSOC);
$erkek = $db->query("SELECT COUNT(kategori) as erkek FROM urunler WHERE kategori='1'")->fetch(PDO::FETCH_ASSOC);
$toplam = $db->query("SELECT COUNT(kategori) as toplam FROM urunler")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Title -->
    <title>Yönetim Paneli | Anasayfa</title>

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

            <div class="row">
                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-primary rounded-circle mr-3">
                            <i class="gd-shopping-cart icon-text d-inline-block text-primary"></i>
                        </div>
                        <div>
                            <h4 class="lh-1 mb-1"><?php echo $kadin["kadin"]; ?></h4>
                            <h6 class="mb-0">Kadın Ürünleri</h6>
                        </div>
                        <i class="gd-arrow-up icon-text d-flex text-success ml-auto"></i>
                    </div>
                    <!-- End Widget -->
                </div>

                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-secondary rounded-circle mr-3">
                            <i class="gd-shopping-cart icon-text d-inline-block text-secondary"></i>
                        </div>
                        <div>
                            <h4 class="lh-1 mb-1"><?php echo $erkek["erkek"]; ?></h4>
                            <h6 class="mb-0">Erkek Ürünleri</h6>
                        </div>
                        <i class="gd-arrow-up icon-text d-flex text-success ml-auto"></i>
                    </div>
                    <!-- End Widget -->
                </div>

                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-warning rounded-circle mr-3">
                            <i class="gd-shopping-cart icon-text d-inline-block text-warning"></i>
                        </div>
                        <div>
                            <h4 class="lh-1 mb-1"><?php echo $toplam["toplam"]; ?></h4>
                            <h6 class="mb-0">Toplam Ürün</h6>
                        </div>
                        <i class="gd-arrow-up icon-text d-flex text-success ml-auto"></i>
                    </div>
                    <!-- End Widget -->
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 mb-md-4">
                        <div class="card-header">
                            <h5 class="font-weight-semi-bold mb-0">Son Eklenen Ürünler</h5>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive-xl">
                                <table class="table text-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Ürün Adı</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Kategori</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Açıklama</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Fiyat</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Renk</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Beden</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Eklenme Tarihi</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php
                            $urunler = $db->prepare("SELECT * FROM urunler ORDER BY eklenmetarihi DESC LIMIT 3");
                            $urunler->execute(array(0));
                            $cek = $urunler->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($cek as $row) {
							$tarih = new DateTime($row["eklenmetarihi"]);
							$ytarih = date_format($tarih, "d/m/Y");
                            ?>
                            <tr>
                            <td class="py-3"><?php echo $row["id"]; ?></td>
                            <td class="py-3"><?php echo $row["baslik"]; ?></td>
                            <td class="py-3"><?php if($row["kategori"]==0){ echo "Kadın";} else{ echo "Erkek"; } ?></td>
                            <td class="py-3"><?php echo $row["aciklama"]; ?></td>
                            <td class="py-3"><?php echo $row["fiyat"]; ?></td>
                            <td class="py-3"><?php echo $row["renk"]; ?></td>
                            <td class="py-3"><?php echo $row["beden"]; ?></td>
                            <td class="py-3"><?php echo $ytarih; ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            </table>
                            </div>
                        </div>
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