<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../../assets/lib/PHPMailer.php";
require_once "../../assets/lib/Exception.php";
require_once "../../assets/lib/OAuth.php";
require_once "../../assets/lib/POP3.php";
require_once "../../assets/lib/SMTP.php";
require_once "../../config/koneksi.php";

// Ambil data warga yang tanpa pekerjaan dan memiliki email
$queryWarga = "SELECT email_warga FROM warga WHERE pekerjaan_warga = 'Tanpa Pekerjaan'";
$hasilWarga = mysqli_query($db, $queryWarga);

// Daftar penerima email
$recipients = array();

while ($rowWarga = mysqli_fetch_assoc($hasilWarga)) {
  $recipients[] = $rowWarga['email_warga']; // Mengambil email warga
}

// Cek apakah ada penerima email
if (count($recipients) > 0) {
  $mail = new PHPMailer();

  // // Enable SMTP debugging.
  // $mail->SMTPDebug = 3;
  // Set PHPMailer to use SMTP.
  $mail->isSMTP();
  // Set SMTP host name.
  $mail->Host = "smtp.gmail.com"; // Ganti dengan host mail server Anda
  // Set this to true if SMTP host requires authentication to send email.
  $mail->SMTPAuth = true;
  // Provide username and password.
  $mail->Username = "fadlanbaihaqi116@gmail.com"; // Ganti dengan email SMTP Anda
  $mail->Password = "wfuqsullsuktzquo"; // Ganti dengan password SMTP Anda
  // If SMTP requires TLS encryption then set it.
  $mail->SMTPSecure = "tls";
  // Set TCP port to connect to.
  $mail->Port = 587;

  $mail->setFrom("fadlanbaihaqi116@gmail.com", "AdminRT"); // Ganti dengan email pengirim Anda
  $mail->isHTML(true);

  // Mengambil data pekerjaan dari database
  $queryPekerjaan = "SELECT nama_pekerjaan, tautan_pekerjaan FROM pekerjaan";
  $hasilPekerjaan = mysqli_query($db, $queryPekerjaan);

  // Cek apakah ada pekerjaan yang akan dikirimkan
  if (mysqli_num_rows($hasilPekerjaan) > 0) {
    $mail->Subject = 'Informasi Lowongan Pekerjaan'; // Ganti dengan subjek email yang diinginkan

    $message = 'Berikut ini adalah informasi lowongan pekerjaan terbaru:<br><br>';

    // Loop melalui setiap pekerjaan
    while ($rowPekerjaan = mysqli_fetch_assoc($hasilPekerjaan)) {
      $message .= 'Nama Pekerjaan: ' . $rowPekerjaan['nama_pekerjaan'] . '<br>';
      $message .= 'Tautan Pekerjaan: ' . $rowPekerjaan['tautan_pekerjaan'] . '<br><br>';
    }

    $message .= 'Silakan kunjungi tautan pekerjaan di atas untuk melihat detailnya.<br><br>';
    $message .= 'Terima kasih.<br>';

    // Mengirim email ke setiap penerima
    foreach ($recipients as $recipient) {
      $mail->addAddress($recipient); // Tambahkan penerima email
    }

    $mail->Subject = 'Informasi Lowongan Pekerjaan'; // Ganti dengan subjek email yang diinginkan
    $mail->Body = $message; // Isi email

    if ($mail->send()) {
      echo "Pesan telah berhasil dikirim.";
      ob_clean(); // Membersihkan output sebelum menggunakan header()
      header('Location: email.php?status=success');
      exit(); // Menghentikan eksekusi kode setelah header()
    } else {
      echo "Gagal mengirim pesan. Error: " . $mail->ErrorInfo;
      ob_clean(); // Membersihkan output sebelum menggunakan header()
      header('Location: email.php?status=error');
      exit(); // Menghentikan eksekusi kode setelah header()
    }

  } else {
    echo "Tidak ada pekerjaan yang akan dikirimkan.";
  }
} else {
  echo "Tidak ada penerima email yang ditemukan.";
}
?>
