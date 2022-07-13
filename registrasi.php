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
<div class="clearfix"></div>
          <form action="" method="post">
            <div class="row">
            <div class="col-md-3 col-sm-3"></div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Registrasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form method="POST">
                      <div class="form-group">
                            <label for="nama_pegawai">Nama</label>
                            <input type="text" required class="form-control" placeholder="Masukkan Nama" name="nama_pegawai" id="nama_pegawai">
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" required class="form-control" placeholder="Masukkan NIP" name="nip" id="nip">
                        </div>
                        <div class="form-group">
                            <label for="id_jabatan">ID</label>
                            <input type="text" required class="form-control" placeholder="Masukkan ID" name="id_jabatan" id="id_jabatan">
                        </div>
                        <div class="form-group">
                            <label for="id_golongan"></label>
                            <input type="text" required class="form-control" placeholder="Masukkan Ulang ID" name="id_golongan" id="id_golongan">
                        </div>
                        <hr>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-3"></div>
            </div>
            </div>
            </form>
        </div>
        <?php
        require 'koneksi.php';

        if (isset($_POST['submit'])) {
            if(registrasi($_POST) > 0){
              echo "<script>
                      alert('Data Berhasil Ditambahkan');
                    </script>";
            }
            else{
              echo "<script>
                      alert('Gagal Menambahkan Data');
                    </script>";
            }
            
        }
        ?>
                              </body>
                              </html>
                              