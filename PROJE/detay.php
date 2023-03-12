<?php
include 'yonetim/baglanti.php';
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BEG</title>
    <!-- GLİDE.JS CSS İÇİN CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css">
    <!-- BOOTSTRAP İKONLARI İÇİN CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <!-- ÜST MENÜ BAŞLANGIÇ -->
    <header>
      <div class="reklam">
        <div class="container">
          <p>
            KIŞ MEVSİMİ FIRSATLARI BAŞLADI! TÜM SWEATSHİRT ÜRÜNLERİNDE %50'YE
            VARAN İNDİRİMLER SENİ BEKLİYOR!
          </p>
        </div>
      </div>
      <div class="header-row">
        <div class="container">
          <div class="header-wrapper">
            <div class="header-mobile">
              <i class="bi bi-list" id="btn-menu"></i>
            </div>
            <div class="header-sol">
              <a href="index.php" class="logo">
                <img src="img/beglogoust.png" style="width:100px; height:100px; margin-top:7px;">
              </a>
            </div>
            <div class="header-orta" id="sidebar">
              <nav class="navigation">
                <ul class="menu-list">
                  <li class="menu-list-item">
                    <a href="index.php" class="menu-link">ANASAYFA</a>
                  </li>

                  <li class="menu-list-item">
                    <a href="erkek.php" class="menu-link"
                      >ERKEK <i class="bi bi-chevron-down"></i
                    ></a>

                    <div class="menu-dropdown-wrapper">
                      <ul class="menu-dropdown-content">
                        <li>
                          <a href="#">Erkek Sweatshirt</a>
                        </li>

                        <li>
                          <a href="#">Erkek Ceket</a>
                        </li>

                        <li>
                          <a href="#">Erkek Mont</a>
                        </li>

                        <li>
                          <a href="#">Erkek Şort</a>
                        </li>

                        <li>
                          <a href="#">Erkek Ayakkabı</a>
                        </li>
                      </ul>
                    </div>
                  </li>

                  <li class="menu-list-item">
                    <a href="kadin.php" class="menu-link"
                      >KADIN <i class="bi bi-chevron-down"></i
                    ></a>
                    <div class="menu-dropdown-wrapper">
                      <ul class="menu-dropdown-content">
                        <li>
                          <a href="#">Kadın Sweatshirt</a>
                        </li>

                        <li>
                          <a href="#">Kadın Ceket</a>
                        </li>

                        <li>
                          <a href="#">Kadın Mont</a>
                        </li>

                        <li>
                          <a href="#">Kadın Şort</a>
                        </li>

                        <li>
                          <a href="#">Kadın Ayakkabı</a>
                        </li>
                      </ul>
                    </div>
                  </li>

                  <li class="menu-list-item">
                  <a href="hakkimizda.php" class="menu-link">HAKKIMIZDA</a>
                  </li>

                  <li class="menu-list-item">
                    <a href="iletisim.php" class="menu-link">İLETİŞİM </a>
                  </li>
                </ul>
              </nav>
              <i class="bi-x-circle" id="close-sidebar"></i>
            </div>
            <div class="header-sag">
              <div class="header-sag-butonlar">
                <a href="login.php" class="header-account">
                  <i class="bi bi-person"></i>
                  
                </a>

                <button class="search-button">
                  <i class="bi bi-search"></i>
                </button>

                <a href="#">
                  <i class="bi bi-heart"></i>
                </a>

                <div class="header-cart">
                  <a href="sepet.html" class="header-cart-link">
                    <i class="bi bi-bag"></i>
                    <span class="header-cart-count">0</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ÜST MENÜ BİTİŞ -->
    
    <!-- ÜRÜN ARAMA BUTONU VE İÇERİKLERİ BAŞLANGIÇ -->
    <div class="modal-search">
      <div class="modal-wrapper">
        <h3 class="modal-title">Ürünleri Ara</h3>
        <p class="modal-text">
          Bulmak İstediğiniz Ürünleri Yazarak Arayabilirsiniz.
        </p>
        <form class="search-form">
          <input type="text" placeholder="Bulmak istediğiniz ürün" />
          <button>
            <i class="bi bi-search"></i>
          </button>
        </form>
        <div class="search-results">
          <div class="search-heading">
            <h3>BULUNAN ÜRÜNLER</h3>
          </div>
          <div class="results">
            <a href="#" class="result-item">
              <img src="img/ürünler/ürün1/1.png" alt="" class="search-thumb" />
              <div class="search-info">
                <h4>1. ÜRÜN BAŞLIĞI</h4>
                <span class="search-kod">1. ÜRÜN KODU</span>
                <span class="search-fiyat">1. ÜRÜN FİYAT</span>
              </div>
            </a>
            <a href="#" class="result-item">
              <img
                src="img/ürünler/sweatshirt-kadin/1.png"
                alt=""
                class="search-thumb"
              />
              <div class="search-info">
                <h4>2. ÜRÜN BAŞLIĞI</h4>
                <span class="search-kod">2. ÜRÜN KODU</span>
                <span class="search-fiyat">2. ÜRÜN FİYAT</span>
              </div>
            </a>
          </div>
        </div>
        <i class="bi bi-x-circle" id="close-search"></i>
      </div>
    </div>
    <!-- ÜRÜN ARAMA BUTONU VE İÇERİKLERİ BİTİŞ -->


    <!-- ÜRÜN İNCELEME SAYFASI BAŞLANGIÇ -->

    <section class="single-product">
        <div class="container">
            <div class="single-product-wrapper">
                <!-- sayfa sıralaması başlangıç -->
                <div class="single-topbar">
                    <nav class="breadcrumb">
                        <ul>
                            <li><a href="index.php">Anasayfa</a></li>
                            <li><a href="erkek.php">Erkek</a></li>
                            <li><a href="#">Erkek Pantolon</a></li>
                            <li>Ürün 1</li>
                        </ul>
                    </nav>
                </div>
                <!-- sayfa sırası bitiş -->
                 <!-- ürün galerileri başlangıç -->
                 <?php 
              $urunsor=$db->prepare("SELECT * FROM urunler WHERE id=$id ORDER BY id DESC");
              $urunsor->execute();
              while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { ?>
              <?php 
              $urun_id=$uruncek['urunid'];
              $urunfotosor=$db->prepare("SELECT * FROM urunresimler INNER JOIN urunler ON urunresimler.urun_id = urunler.urunid WHERE urun_id=:id LIMIT 3");
              $urunfotosor->execute(array(

              'id'=>$urun_id

              ));
              $cek = $urunfotosor->fetchAll(PDO::FETCH_ASSOC);
              ?>
                 <div class="single-content">
                    <main class="site-main">
                        <div class="product-gallery">
                            <div class="single-image-wrapper">

                            </div>
                            <div class="product-thumb hero">
                              <div class="glide__track" data-glide-el="track">
                                <ol class=" glide__slides">
                                <?php
                                foreach($cek as $row)
                                echo " <li class='glide__slide slider'><img src=yonetim/resimler/".$row["resim"]." style='width:500px;'></li>";
                                ?>
                                </ol>
                              
                              <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            </div></div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h1 class="product-title">
                            <?php echo $row["baslik"]; ?>
                            </h1>
                            <div class="product-review">
                                <ul class="product-star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <span>2 Görüntüleme</span>
                            </div>
                            <div class="product-price">
                                <s class="old-price">₺165</s>
                                <strong class="new-price">₺<?php echo $row["fiyat"]; ?></strong>
                            </div>
                            <p class="product-description">
                            <?php echo $row["aciklama"]; ?>
                            </p>
                            <form class="variations-form">
                                <div class="variations">
                                    <div class="colors">
                                        <div class="colors-label">
                                            <span>RENK</span>
                                        </div>
                                        <div class="colors-wrapper">
                                            <div class="color-wrapper <?php if($row["renk"]=="KIRMIZI"){ echo "active"; } ?>">
                                                <label class="red-color">
                                                    <input type="radio" name="product-color">
                                                </label>
                                            </div>
                                            <div class="color-wrapper <?php if($row["renk"]=="YEŞİL"){ echo "active"; } ?>">
                                                <label class="green-color">
                                                </label>
                                            </div>
                                            <div class="color-wrapper <?php if($row["renk"]=="MAVİ"){ echo "active"; } ?>">
                                                <label class="blue-color">
                                                    <input type="radio" name="product-color">
                                                </label>
                                            </div>
                                            <div class="color-wrapper <?php if($row["renk"]=="MOR"){ echo "active"; } ?>">
                                                <label class="purple-color">
                                                    <input type="radio" name="product-color">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="values">
                                        <div class="values-label">
                                            <span>BEDEN</span>
                                        </div>
                                        <div class="values-list">
                                            <span <?php if($row["beden"]=="S"){ echo 'class="active"'; } ?>>S</span>
                                            <span <?php if($row["beden"]=="M"){ echo 'class="active"'; } ?>>M</span>
                                            <span <?php if($row["beden"]=="L"){ echo 'class="active"'; } ?>>L</span>
                                            <span <?php if($row["beden"]=="XL"){ echo 'class="active"'; } ?>>XL</span>
                                            <span <?php if($row["beden"]=="XXL"){ echo 'class="active"'; } ?>>XXL</span>
                                        </div>
                                    </div>
                                    <div class="cart-button">
                                      <input type="number" value="1" min="1" id="quantity">
                                      <button class="btn btn-lg btn-primary" id="add-to-cart" type="button">Sepete Ekle</button>
                                    </div>
                                    <div class="product-extra-buttons">
                                        <a href="#">
                                            <i class="bi bi-globe"></i>
                                            <span>Boyut rehberi</span>
                                        </a>
                                        <a href="#">
                                            <i class="bi bi-heart"></i>
                                            <span>Favorilere ekle</span>
                                        </a>
                                        <a href="#">
                                            <i class="bi bi-share"></i>
                                            <span>Bu ürünü paylaş</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <div class="divider"></div>
                            <div class="product-meta">
                                <div class="product-sku">
                                    <span>Ürün Kodu:</span>
                                    <strong>BE45VGRT</strong>
                                </div>
                                <div class="product-categories">
                                    <span>Kategori:</span>
                                    <strong>Pantolon , Erkek</strong>
                                </div>
                                <div class="product-tags">
                                    <span>Etiket:</span>
                                    <a href="#">black</a>
                                    ,
                                    <a href="#">white</a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <?php } ?>
                <!-- ürün galerileri bitiş -->

                 <!-- detay başlangıç -->
                <div class="single-tabs">
                    <ul class="tab-list">
                        <li>
                            <a href="#" class="tab-button active" data-id="desc">Açıklama</a>
                        </li>
                        <li>
                            <a href="#" class="tab-button" data-id="info">
                                Ek Bilgiler
                            </a>
                        </li>
                    </ul>
                    <div class="tab-panel">
                        <div class="tab-panel-descriptions" data-id="desc">
                            <p>ÜRÜN AÇIKLAMASI 1</p>
                            <br>
                            <p>ÜRÜN AÇIKLAMASI 2</p>
                        </div>
                        <div class="tab-panel-information content"  id="info">
                            <h3>Ek Bilgiler</h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>RENK SEÇENEKLERİ</th>
                                        <td>
                                            <p>
                                                Elma Kırmızısı, Biyo Mavi, Tatlı Turuncu, Mavi, Yeşil, Pembe, Siyah, Beyaz</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>BEDEN SEÇENEKLERİ</th>
                                        <td>
                                            <p>
                                                XXS, XS, S, M, L, XL, XXL</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <!-- detay bitiş -->
            </div>
        </div>
    </section>

    <!-- ÜRÜN İNCELEME SAYFASI BİTİŞ -->




    <!-- POLİTİKA BAŞLANGIÇ -->

    <section class="policy">
        <div class="container">
            <ul class="policy-list">
                <li class="policy-item">
                    <i class="bi bi-truck"></i>
                    <div class="policy-text">
                        <strong>ÜCRETSİZ TESLİM</strong>
                        <span>49.00₺ ve üzeri alışverişlerde</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-headset"></i>
                    <div class="policy-text">
                        <strong>24/7 DESTEK</strong>
                        <span>24 Saat hizmet</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-arrow-clockwise"></i>
                    <div class="policy-text">
                        <strong>30 GÜN İADE</strong>
                        <span>30 Gün içinde kolay iade</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-credit-card"></i>
                    <div class="policy-text">
                        <strong>ÖDEME YÖNTEMİ</strong>
                        <span>Güvenilir sistem</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    
    <!-- POLİTİKA BİTİŞ -->


      <!-- ALT KISIM BAŞLANGIÇ -->

<footer class="footer">
    <div class="left-row">
        <div class="container">
            <div class="footer-row-wrapper">
                <div class="footer-left-wrapper">
                    <div class="footer-left">
                        <div class="footer-left-top">
                          <img src="img/beglogoalt.png" alt="Batuhan Efe Group" >
                        </div>
                        
                    </div>
                    <div class="footer-left-bottom">
                      <p class="left-desc">Just Fill in the BEG</p>
                    </div>
                </div>
                <div class="footer-contact-wrapper">
                    <div class="footer-contact-top">
                        <h3 class="contact-title">
                            Yardıma ihtiyacın var mı? <br>
                            (+90) 538 286 01 09 <br>
                            (+90) 536 638 37 57
                        </h3>
                        <p class="contact-desc">
                            <strong>Müşteri temsilcisi çalışma saatleri:</strong>
                             <br>
                            Hafta içi 08:00 - 19:00
                        </p>
                    </div>
                    <div class="footer-contact-bottom">
                        <p class="privacy-text">
                            <strong>KALIN YAZI BURAYA</strong> UZUN YAZILAR DA BURAYA GELECEK
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widgets-row">
        <div class="container">
            <div class="footer-widgets">
              <div class="brand-info">
                <div class="footer-logo">
                  <a href="index.html" class="logo">BEG</a>
                </div>
                <div class="footer-desc">
                  <p> Just Fill the BEG</p>
                </div>
                <div class="footer-contact">
                  <p>
                    <a href="tel:555 555 55 55">(+90) 538 286 0109</a> – <a
                      href="mailto:info@BEG.com">info@BEG.com</a>
                  </p>
                </div>
              </div>
              <div class="widget-nav-menu">
                <h4>Bilgilendirme</h4>
                <ul class="menu-list">
                  <li>
                    <a href="#">Hakkımızda</a>
                  </li>
                  <li>
                    <a href="#">Gizlilik Politikası</a>
                  </li>
                  <li>
                    <a href="#">İade Politikası</a>
                  </li>
                  <li>
                    <a href="#">Nakliye Politikası</a>
                  </li>
                  <li>
                    <a href="#">Adrese Teslimat</a>
                  </li>
                </ul>
              </div>
              <div class="widget-nav-menu">
                <h4>Hesap</h4>
                <ul class="menu-list">
                  <li>
                    <a href="#">Siparişlerim</a>
                  </li>
                  <li>
                    <a href="#">Favorilerim</a>
                  </li>
                  <li>
                    <a href="#">Hesap Detayları</a>
                  </li>
                  <li>
                    <a href="#">Siparişleri Takip Et</a>
                  </li>
                </ul>
              </div>
              <div class="widget-nav-menu">
                <h4>Alışveriş</h4>
                <ul class="menu-list">
                  <li>
                    <a href="#">Kuruluşlar</a>
                  </li>
                  <li>
                    <a href="#">En Çok Satanlar</a>
                  </li>
                  <li>
                    <a href="#">İndirimler</a>
                  </li>
                  <li>
                    <a href="#">Son Çıkan Ürünler</a>
                  </li>
                </ul>
              </div>
              <div class="widget-nav-menu">
                <h4>Kategoriler</h4>
                <ul class="menu-list">
                  <li>
                    <a href="erkek.html">Erkek</a>
                  </li>
                  <li>
                    <a href="kadin.html">Kadın</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
    </div>
    <div class="copyright-row">
        <div class="container">
            <div class="footer-copyright">
              <div class="site-copyright">
                <p>
                    © 2022 BEG - Tüm Hakları Saklıdır. Powered by Efe SİPAHİ and Batuhan KALAÇ.
                </p>
              </div>
              <a href="#">
                <img src="img/markalar/cards.png" alt="">
              </a>
              <div class="footer-menu">
                <ul class="footer-menu-list">
                  <li class="list-item">
                    <a href="#">Gizlilik Politikası</a>
                  </li>
                  <li class="list-item">
                    <a href="#">Şartlar ve Koşullar</a>
                  </li>
                  <li class="list-item">
                    <a href="#">İade Politikası</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
    </div>
</footer>

    <!-- ALT KISIM BİTİŞ -->

    <script src="js/single-productx.js" type="module"></script>
    <script src="js/mainx.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="js/glide.js" type="module"></script>
    <script>
          var glideHero = new Glide('.hero', {
      type: 'carousel',
      animationDuration: 2000,
      autoplay: 4500,
      focusAt: '2',
      startAt: 2,
      perView: 1, 
    });

    glideHero.mount();
    </script>
  </body>
</html>
