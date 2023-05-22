<?php
        include("konfigurasi.php");

        $jdpage = "List";
        $pg = "#mhslist";
        $notif = "";

        $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");
        if(isset($_POST["act"])){
          $act = $_POST["act"];
          switch ($act){
            case "storemhs":
              $nama = $_POST["txNAMA"];
              $nim = $_POST["txNIM"];
              $prodi = $_POST["txPRODI"];
              $idmhs = md5($nim);
              $sql = "INSERT INTO tbmhs(nama, nim, prodi, idmhs) VALUES('$nama', '$nim', '$prodi', '$idmhs');";
              $hasil = mysqli_query($cnn, $sql);
              if($hasil){
                $notif = "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data mahasiswa berhasil ditambahkan',
                    showConfirmButton: false,
                    timer: 1800
                });
                </script>";
              }else{
                $notif = "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Data mahasiswa gagal ditambahkan',
                    showConfirmButton: false,
                    timer: 1800
                });
                </script>";
              }
              break;
            case "updatemhs":
              $nama = $_POST["txNAMA"];
              $nim = $_POST["txNIM"];
              $prodi = $_POST["txPRODI"];
              $idmhs = $_POST["idmhs"];
              $sql = "UPDATE tbmhs SET nama='$nama', nim='$nim', prodi='$prodi' WHERE idmhs='$idmhs';";
              $hasil = mysqli_query($cnn, $sql);
              if($hasil){
                  $notif = "<script>
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Data user berhasil diperbaharui',
                      showConfirmButton: false,
                      timer: 1800
                  });
                  </script>";
              }else{
                $notif = "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Data user gagal diperbaharui',
                    showConfirmButton: false,
                    timer: 1800
                });
                </script>";
              }
              break;
            case "destroymhs":
              $idmhs = $_POST["idmhs"];
              $sql = "DELETE FROM tbmhs WHERE idmhs='$idmhs';";
              $hasil = mysqli_query($cnn, $sql);
              if($hasil){
                $notif = "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data mahasiswa berhasil dihapus',
                    showConfirmButton: false,
                    timer: 1800
                });
                </script>";
            }else{
                $notif = "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Data mahasiswa gagal dihapus',
                    showConfirmButton: false,
                    timer: 1800
                });
                </script>";
              break;
            }
          }
        }
    ?>
<?php
    $jdpage = "List";
    $pg = "#userlist";
    $notifusr = "";

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

    if(isset($_POST["act"])){
        $act = $_POST["act"];
        switch ($act){
            case "storeuser":
                $pass1 = $_POST["txPASS1"];
                $pass2 = $_POST["txPASS2"];
                if($pass1 == $pass2){
                    $nama = $_POST["txNAMA"];
                    $email = $_POST["txEMAIL"];
                    $user = $_POST["txUSER"];
                    $iduser = md5($email);
                    $sql = "INSERT INTO tbuser(nama, email, username, paskey, iduser) VALUES('$nama', '$email', '$user', '$pass1', '$iduser');";
                    $hasil = mysqli_query($cnn, $sql);
                    if($hasil){
                        $notifusr = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil ditambahkan',
                            showConfirmButton: false,
                            timer: 1800
                        });
                        </script>";
                    }else{
                        $notifusr = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1800
                        });
                        </script>";
                    }
                }   

                break;
            case "updateuser":
                $pass1 = $_POST["txPASS1"];
                $pass2 = $_POST["txPASS2"];
                if($pass1 == $pass2){
                    $nama = $_POST["txNAMA"];
                    $email = $_POST["txEMAIL"];
                    $user = $_POST["txUSER"];
                    $iduser = $_POST["iduser"];
                    $sql = "UPDATE tbuser SET nama='$nama', email='$email', username='$user', paskey='$pass1' WHERE iduser='$iduser';";
                    $hasil = mysqli_query($cnn, $sql);
                    if($hasil){
                        $notifusr = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil diperbaharui',
                            showConfirmButton: false,
                            timer: 1800
                        });
                        </script>";
                    }else{
                        $notifusr = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal diperbaharui',
                            showConfirmButton: false,
                            timer: 1800
                        });
                        </script>";
                    }
                }   
                break;
            case "destroyuser":
                $iduser = $_POST['iduser'];
                $sql = "DELETE FROM tbuser WHERE iduser='$iduser';";
                $hasil = mysqli_query($cnn, $sql);
                    if($hasil){
                        $notif = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1800
                        });
                        </script>";
                    }else{
                        $notifusr = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal dihapus',
                            showConfirmButton: false,
                            timer: 1800
                        });
                        </script>";
                    }
                break;
          }
      }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eStartup</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo">
        <h1><a href="dashboard.php"><span>e</span>Startup</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#datamhs">Data Mahasiswa</a></li>
          <li><a class="nav-link scrollto" href="#user">Data User</a></li>
          <li><a class="nav-link scrollto" href="#">Data Matakuliah</a></li>
          <li><a class="nav-link scrollto" href="#">Data Dosen</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1>Selamat Datang Di eStartup</h1>
      <h2>Dihalaman ini anda bisa melakukan pengelolaan data</h2>
      <img src="assets/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
      <a href="#get-started" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>pengelolaan data yang tersedia</h2>
          <p class="separator">silahkan pilih dibawah ini...</p>

        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">

              <img src="assets/img/svg/mahasiswa.svg" alt="img">
              <h4>Data Mahasiswa</h4>
              <p>Dihalaman ini anda bisa menambahkan, mengubah, menghapus data mahasiswa.</p>
              <a href="#datamhs">selengkapnya</a>

            </div>
          </div>

          <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-block">

              <img src="assets/img/svg/user.svg" alt="img">
              <h4>Data User</h4>
              <p>Dihalaman ini anda bisa menambahkan, mengubah, menghapus data user.</p>
              <a href="#user">selengkapnya</a>

            </div>
          </div>

          <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">

              <img src="assets/img/svg/book.svg" alt="img">
              <h4>Data Matakuliah</h4>
              <p>Dihalaman ini anda bisa menambahkan, mengubah, menghapus data matakuliah.</p>
              <a href="#">selengkapnya</a>

            </div>
          </div>

          <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">

              <img src="assets/img/svg/dosen.svg" alt="img">
              <h4>Data Dosen</h4>
              <p>Dihalaman ini anda bisa menambahkan, mengubah, menghapus data dosen.</p>
              <a href="#">selengkapnya</a>

            </div>
          </div>

        </div>
      </div>

    </section><!-- End Get Started Section -->
    <div class="container" id="datamhs" data-aos="fade-in">
    <h3 id="mhslist"><b>Daftar Mahasiswa</b></h3>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">NIM</th>
          <th scope="col">Prodi</th>
          <th scope="col"><a href="mhs/mhsnew.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
        </tr>
      </thead>
      <tbody>
      <?php
      $sql = "SELECT tu.nama, tu.nim, tu.prodi, tu.idmhs FROM tbmhs tu ORDER BY tu.nama;";
      $hasil = mysqli_query($cnn, $sql);
      $cx = 0;
      while($h = mysqli_fetch_assoc($hasil)){
          $cx++;
      ?> 
        <tr>
          <th scope="row"><?=$cx?></th>
          <td><?=$h["nama"]?></td>
          <td><?=$h["nim"]?></td>
          <td><?=$h["prodi"]?></td>
          <td><a href="mhs/mhsedit.php?aksi=edit&p1=<?=$h["idmhs"]?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a> 
          <a href="mhs/mhsdel.php?aksi=del&p1=<?=$h["idmhs"]?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a></td>
        </tr>
        <?php
      }
        ?>
      </tbody>
    </table>
    </div>
    <div class="container" id="user" data-aos="fade-in">
    <h3 id="userlist"><b>Daftar User</b></h3>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Email</th>
          <th scope="col">Username</th>
          <th scope="col"><a href="user/usernew.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
        </tr>
      </thead>
      <tbody>
      <?php
      $sql = "SELECT tu.nama, tu.email, tu.username, tu.iduser FROM tbuser tu ORDER BY tu.nama;";
      $hasil = mysqli_query($cnn, $sql);
      $cx = 0;
      while($h = mysqli_fetch_assoc($hasil)){
          $cx++;
      ?>
        <tr>
          <th scope="row"><?=$cx?></th>
          <td><?=$h["nama"]?></td>
          <td><?=$h["email"]?></td>
          <td><?=$h["username"]?></td>
          <td><a href="user/useredit.php?aksi=edit&p1=<?=$h["iduser"]?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a> 
          <a href="user/userdel.php?aksi=del&p1=<?=$h["iduser"]?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    </div>
  </main><!-- End #main -->

  <!-- ======= footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">eStartup</a>
            <p>Adalah program web yang saya buat sendiri untuk melengkapi progres uts pada matakuliah Pemograman Web. dihalaman web ini anda bisa mengelola data data. </p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Tentang Kami</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="#">faq</a></li>
              <li><a href="#">Editor help</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights eStartup. All rights reserved.</p>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
          Designed by <a href="https://www.instagram.com/alitpranadita_/">Alit Pranadita</a>
        </div>
      </div>
    </div>

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?=$notif;?>
  <?=$notifusr;?>
</body>

</html>