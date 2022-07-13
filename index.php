<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="build/images/logo-btn.png">

    <title>SIPPEKA | Login</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="check_login.php" method="POST">
              <h1>Selamat Datang</h1>
              <div>
                <input type="text" class="form-control" placeholder="NIP" name="nip" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password"  name="password" />
              </div>
              <div>
                <button type="submit" name="login" class="btn btn-default submit">Masuk</button>
              </div>
              <div>
                <button type="submit" name="register" class="btn btn-default submit">Tambah Data</button>
              </div>
              </form>
              

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="build/images/logo-btn.png" alt="" width="300px"></h1>
                  <p>Sistem Informasi Bank Tabungan Negara</p>
                  <p>©2021 Bank Tabungan Negara, All Rights Reserved.</p>
                </div>
              </div>
            
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
