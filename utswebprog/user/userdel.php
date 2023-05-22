<?php
    include("../konfigurasi.php");
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");
    $iduser = $_GET["p1"];
    $sql = "SELECT tu.nama, tu.email, tu.username FROM tbuser tu WHERE tu.iduser='$iduser';";
    $hasil = mysqli_query($cnn, $sql);
    if(mysqli_num_rows($hasil) > 0){
        $h = mysqli_fetch_assoc($hasil);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<div class="container">
<h3>Hapus Data User <?=$h["username"]?></h3>
<form method="POST" action="../dashboard.php">
    <input type="hidden" name="act" value="destroyuser">
    <input type="hidden" name="iduser" value="<?=$iduser?>">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?=$h["nama"]?>">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Alamat Email" value="<?=$h["email"]?>">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txUSER" class="form-control" id="floatingInput" placeholder="User Name" value="<?=$h["username"]?>">
        <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-danger"> Hapus Data User </button>
    <a href="../dashboard.php" class="btn btn-secondary"> Batal </a>
</form>
<?php
    }else{
        echo "<script>window.location.href='../dashboard.php';</script>";
    }
?>
</div>