<?php 

include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nik'])) {
    header("Location: Dashboard.php");
}

if (isset($_POST['submit'])) {
 $nik = $_POST['nik'];
 $nama_lengkap = $_POST['nama_lengkap'];

 $sql = "SELECT * FROM users WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'";
 $result = mysqli_query($koneksi, $sql);
 if ($result->num_rows > 0) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION['nik'] = $row['nik'];
  header("Location: Dashboard.php");
 } else {
  echo "<script>alert('NIK atau Nama Lengkap Anda salah. Silahkan coba lagi!')</script>";
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

        <title>Aplikasi Peduli Diri - Login</title>
    </head>

    <body>

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/login2.svg" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Saya pengguna baru</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>

                        <form action="" method="POST" class="login-email" id="login-form">
                            <div class="form-group">
                                <label for="nik"><img src="icon/postcard-fill.svg"></label>
                                <input type="text" placeholder="NIK" name="nik" value="<?php echo $nik; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap"><img src="icon/person-fill.svg"></label>
                                <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo $_POST['nama_lengkap']; ?>" required>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="Login"/>
                            </div>
                        </form>     
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>