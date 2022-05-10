<?php 

include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nama_lengkap'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
 $nik = $_POST['nik'];
 $nama_lengkap = $_POST['nama_lengkap'];

 if ($password == $cpassword) {
  $sql = "SELECT * FROM users WHERE nik='$nik'";
  $result = mysqli_query($koneksi, $sql);
  if (!$result->num_rows > 0) {
   $sql = "INSERT INTO users (nik, nama_lengkap)
     VALUES ('$nik', '$nama_lengkap')";
   $result = mysqli_query($koneksi, $sql);
   if ($result) {
    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
    $nik = "";
    $nama_lengkap = "";
    // $_POST['password'] = "";
    // $_POST['cpassword'] = "";
   } else {
    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
   }
  } else {
   echo "<script>alert('Woops! NIK Sudah Terdaftar.')</script>";
  }
  
 } else {
  echo "<script>alert('NIK atau Nama Lengkap Tidak Sesuai')</script>";
 }
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" href="css/style.css">

 <title>Peduli Diri - Register</title>
</head>
<body>

<!-- Sign up form -->
  <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form action="" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="nik"><img src="icon/postcard-fill.svg"></label>
                                <input type="text" placeholder="NIK" name="nik" value="<?php echo $nik; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap"><img src="icon/person-fill.svg"></label>
                                <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" required>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/login.svg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">Sudah punya akun</a>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>