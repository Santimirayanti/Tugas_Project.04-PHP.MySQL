<?php

include 'login/config.php';

session_start();

error_reporting(0);
if(isset($_SESSION['name'])){
    header("Location: index.html");
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql="INSERT INTO contacts(name, email, message)
    VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<scrip>alert('Your Message is Sent')</script>";
    }else{
        echo "<scrip>alert('Woops! Something went wrong.')</script>";
    }

}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Rumah Santi</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
  </head>
  <body>
    <nav>
      <div class="wrapper">
        <div class="logo"><a href="#">Rumah Santi</a></div>
        <div class="menu">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="wrapper">
        <img src="images/ProfilSanti.png" alt="Programming" />
        <div class="kolom">
          <h4 class="deskripsi">
            NI KETUT SANTI MIRAYANTI
         <h4>Tetap Semangat dan Jangan Lupa Berdoa</h4>
        </div>
      </section>
      <section id="gallery">
        <div class="tengah">
          <div class="kolom">
            <h2>Gallery</h2>
            <p>
              Inilah koleksi foto-foto saya saat organisasi dan juga saat
              bersama teman-teman
            </p>
            <div class="gallery-list">
              <div class="gallery-item">
                <img src="images/image.jpg" alt="Organisasi" />
                <p>Organisasi</p>
              </div>
              <div class="gallery-item">
                <img src="images/image1.jpg" alt="Organisasi" />
                <p>Organisasi</p>
              </div>
              <div class="gallery-item">
                <img src="images/image2.jpg" alt="Organisasi" />
                <p>Organisasi</p>
              </div>
              <div class="gallery-item">
                <img src="images/image4.jpg" alt="Organisasi" />
                <p>Santi</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="blog">
        <div class="kolom">
          <h2>Blog</h2>
          <article>
            <h3>
              Pengaruh Kemajuan Teknologi Komunikasi dan Informasi terhadap
              Karakter Anak
            </h3>
            <img
              src="https://assets-a3.kompasiana.com/items/album/2024/03/21/21a65df0-1fb8-4e28-8f13-f354fc6b1767-620x375-65fbdc37de948f53be7a8022.jpeg?t=o&v=410&x=225"
              alt=""
            />
            <p>
              Kehidupan manusia yang bermula dari kesederhanaan kini menjadi
              kehidupan yang bisa dikategorikan sangat modern. Di jaman yang
              semakin canggihnya teknologi informasi dan komunikasi yang
              berkembang saat sekarang, segala sesuatu dapat diselesaikan dengan
              cara yang praktis. Teknologi informasi dan komunikasi adalah
              sesuatu yang bermanfaat untuk mempermudah semua aspek kehidupan
              manusia. Dunia informasi saat ini seakan tidak bisa terlepas dari
              teknologi Penggunaan teknologi informasi dan komunikasi oleh
              masyarakat menjadikan dunia teknologi semakin lama semakin
              canggih. Dunia informasi saat ini seakan tidak bisa terlepas dari
              teknologi. Penggunaan teknologi oleh masyarakat menjadikan dunia
              teknologi semakin lama sainakin canggih. Komunikasi yang dulunya
              memerlukan waktu yang lama dalam penyampaiannya, kini dengan
              teknologi segalanya menjadi sangat cepat dan seakan tanpa jarak.
            </p>
            <p>
              Sumber:
              <a
                href="https://bdkjakarta.kemenag.go.id/pengaruh-kemajuan-teknologi-komunikasi-dan-informasi-terhadap-karakter-anak/"
                >https://bdkjakarta.kemenag.go.id/pengaruh-kemajuan-teknologi-komunikasi-dan-informasi-terhadap-karakter-anak/</a
              >
            </p>
          </article>
          <article>
            <h3>Perayaan Ogoh-ogoh 2024 Tanggal Berapa? Simak Informasinya</h3>
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2024/02/24/parade-ogoh-ogoh-di-tabanan-bali-dalam-rangka-menyambut-nyepi-2024-1_169.jpeg?w=700&q=90"
              alt=""
            />
            <p>
              Perayaan Ogoh-ogoh Tanggal 10 Maret 2024 Merujuk situs resmi
              Pemerintah Provinsi (Pemprov) Bali, untuk tahun ini puncak
              perayaan Ogoh-ogoh jatuh pada tanggal 10 Maret 2024. Tanggal
              perayaan Ogoh-ogoh 2024 ini bertepatan satu hari sebelum Hari Raya
              Nyepi tanggal 11 Maret 2024. Sebagai informasi, pemerintah juga
              telah menetapkan tanggal merah jadwal hari libur nasional dan cuti
              bersama peringatan Hari Raya Nyepi 2024. Libur nasional Nyepi pada
              tanggal 11 Maret 2024, dan cuti bersama Nyepi pada tanggal 12
              Maret 2024.
            </p>
            <p>
              Sumber:
              <a
                href="https://news.detik.com/berita/d-7215946/perayaan-ogoh-ogoh-2024-tanggal-berapa-simak-informasinya"
                >https://news.detik.com/berita/d-7215946/perayaan-ogoh-ogoh-2024-tanggal-berapa-simak-informasinya</a
              >
            </p>
          </article>
          <article>
            <h3>
              PBSI Optimistis Indonesia Raih Emas di Olimpiade 2024 Meski Loyo
              di Beberapa Turnamen
            </h3>
            <img src="images/image3.jpg" alt="" />
            <p>
              Persatuan Bulu Tangkis Seluruh Indonesia (PBSI) tetap merasa
              optimistis Indonesia akan meraih medali dalam Olimpiade 2024 Paris
              yang bakal digelar di Prancis pada 26 Juli-11 Agustus 2024 meski
              tampil kurang maksimal pada beberapa turnamen terakhir. Saat ini,
              para pebulu tangkis Indonesia tengah mengumpulkan poin kualifikasi
              menuju Paris. Mereka pun masih harus melakoni setidaknya enam
              turnamen hingga 28 April 2024 demi memastikan peringkat agar lolos
              ke Olimpiade.
            </p>
            <p>
              Sumber:
              <a
                href="https://www.bola.net/bulutangkis/pbsi-optimistis-indonesia-raih-emas-di-olimpiade-2024-meski-loyo-di-beberapa-turnamen-91e92a.html"
                >https://www.bola.net/bulutangkis/pbsi-optimistis-indonesia-raih-emas-di-olimpiade-2024-meski-loyo-di-beberapa-turnamen-91e92a.html</a
              >
            </p>
          </article>
        </div>
      </section>
    </div>

    <section id="contact">
        <h1 class="heading">Contact Me<h1>
            <form action="" method="POST" class="form">
                <input type="text" name="name" class="input" placeholder="Enter Your Name">
                <input type="email" name="email" class="input" placeholder="Enter Your Email">
                <textarea name="message" id="message" cols="70" rows="20" placeholder="Enter Your Message"></textarea>
                <button name="submit" id="btn">Submit</button>
</form>
</section>

<footer>
    <span>Created By @santimirayanti |
        2024 All rights reserved.</span>
</footer>

<script src="script.js"></script>
</body>
</html>