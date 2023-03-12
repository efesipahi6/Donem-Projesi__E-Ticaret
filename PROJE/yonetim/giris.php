<!DOCTYPE html>
<html lang="tr">
  <head>
    <!-- Title -->
    <title>Yönetim Paneli | Giriş</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Template -->
    <link rel="stylesheet" href="assets/css/graindashboard.css">
  </head>

  <body class="">

    <main class="main">

      <div class="content">

			<div class="container-fluid pb-5">

				<div class="row justify-content-md-center">
					<div class="card-wrapper col-12 col-md-4 mt-5">
						<div class="brand text-center mb-3">
							<a href="/"><img src="assets/img/logo.png"></a>
						</div>
						<div class="card">
							<div class="card-body">
								<form action="giriskontrol.php" method="POST">
									<div class="form-group">
										<label for="kadi">Kullanıcı Adı</label>
										<input id="kadi" type="text" class="form-control" name="kadi" required="" autofocus="">
									</div>

									<div class="form-group">
										<label for="sifre">Şifre
										</label>
										<input id="sifre" type="password" class="form-control" name="sifre" required="">
									</div>

									<div class="form-group no-margin">
										<button type="submit" class="btn btn-primary btn-block">
											Giriş Yap
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>



			</div>

      </div>
    </main>

	<script src="assets/js/graindashboard.js"></script>
    <script src="assets/js/graindashboard.vendor.js"></script>
  </body>
</html>