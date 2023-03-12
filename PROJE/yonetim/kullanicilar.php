<?php
session_start();
if (!$_SESSION['admin']){   
header('Location: giris.php');
}
else{
include 'baglanti.php';
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
                        <div class="h3 mb-0">Kullanıcılar</div>
                    </div>


                    <!-- KULLANICILAR -->
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Kullanıcı Adı</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">E-Posta</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Kayıt Tarihi</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Durum</th>
                            </tr>
                            </thead>
                            <tbody>
                    <?php
                    $kullanicilar = $db->prepare("SELECT * FROM kullanicilar");
                    $kullanicilar->execute(array(0));
                    $cek = $kullanicilar->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($cek as $row) {
                    $tarih = new DateTime($row["kayit_tarihi"]);
                    $ytarih = date_format($tarih, "d/m/Y");
                    ?>
                            <tr>
                                <td class="py-3"><?php echo $row["id"]; ?></td>
                                <td class="align-middle py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative mr-2">
                                            <span class="indicator indicator-lg indicator-bordered-reverse indicator-top-left indicator-success rounded-circle"></span>
                                            <!--img class="avatar rounded-circle" src="#" alt="John Doe"-->
                                            <span class="avatar-placeholder mr-md-2">K</span>
                                        </div>
                                        <?php echo $row["kullanici_adi"]; ?>
                                    </div>
                                </td>
                                <td class="py-3"><?php echo $row["email"]; ?></td>
                                <td class="py-3"><?php echo $ytarih; ?></td>
                                <td class="py-3">
                                    <span class="badge badge-pill badge-success">Aktif</span>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <div class="card-footer d-block d-md-flex align-items-center d-print-none">
                        </div>
                    </div>
                    <!-- End Users -->
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