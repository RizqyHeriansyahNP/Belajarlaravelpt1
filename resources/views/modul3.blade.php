<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Portofolio Pribadi</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Link ke file CSS -->
</head>
<body>
 <div class="container">
 <!-- Judul Halaman -->
 <h1 class="text-center">Portofolio Pribadi</h1>
 <!-- Gambar Profil -->
 <div class="text-center">
 <img src="assets/AKU.jpg" alt="Gambar Profil" width="150">
 
 </div>
 <!-- Tentang Saya -->
 <h2 class="text-center">Tentang Saya</h2>
 <p class="text-center">Selamat datang di portofolio saya! Saya adalah seorang mahasiswa yang penuh
 semangat dan ambisi!.</p>
 <blockquote class="text-center">"Kreativitas adalah intelijensi yang bersenang-senang." - Albert Einstein
 </blockquote>
 <!-- Pengalaman Kerja -->
 <h2 class="text-center">Pengalaman Kerja</h2>
 <table>
 <tr>
 <th>Posisi</th>
 <th>Perusahaan</th>
 <th>Tahun</th>
 </tr>
 <tr>
 <td>Web Developer</td>
 <td>PT. Teknologi</td>
 <td>2020-2023</td>
 </tr>
 <tr>
 <td>Junior Developer</td>
 <td>PT. Inovasi</td>
 <td>2018-2020</td>
 </tr>
 </table>
 <!-- Hobi -->
 <h2>Hobi Saya</h2>
 <ul>
 <li>Mancing</li>
 <li>Lari</li>
 <li>Hikking</li>
 </ul>
 <ol>
 <li>Badminton</li>
 <li>Renang</li>
 <li>Menggambar</li>
 </ol>
 <!-- Audio -->
 <h2 class="text-center">Lagu Favorit</h2>
 <audio controls>
 <source src="assets/SAYA.mp3" type="audio/mpeg">
 Browser Anda tidak mendukung pemutar audio.
 </audio>
 <!-- Embed Audio -->
 <div class="audio-embed">
 <iframe src="#"
 style="display:block; border-radius: 6px; border: none; height: 204px; width: 600px;"></iframe>
 <a href='#'
 style="text-align: center; display: block; color: #0345b0; font-size: 12px; font-family: sans-serif; line-height: 16px; margin-top: 8px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">embed-musik</a>
 </div>
 <!-- Video Karya -->
 <iframe
        width="640"
        height="360"
        src="https://www.youtube.com/embed/wUgRIzetd_U?si=GgBbyjVV6eFo0T_h"
        title="Video Karya"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
        </iframe>
 <!-- Link ke Media Sosial -->
 <h2 class="text-center">Ikuti Saya</h2>
 <p class="text-center">
 <a href="https://www.instagram.com/rizqypratamax" target="_blank">Instagram</a> |
 <a href="https://www.linkedin.com/in/rizqy-heriansyah-nugraha-pratama-24a97a419" target="_blank">LinkedIn</a>
 </p>
 <!-- Footer -->
 <footer>
 &copy; 2024 Portofolio Pribadi. Semua hak dilindungi.
 </footer>
 </div>
</body>
</html>