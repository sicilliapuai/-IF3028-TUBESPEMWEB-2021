<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LAPOR PAK!</title>
    <link rel="stylesheet" href=<?php echo base_url('style.css'); ?>>
  </head>
  <body>
    <div class="garis_tepi">
      <h1>LAPOR PAK!</h1>
      <br>
		  <br>
		  <form>
			  <input class="search" type="text" placeholder=" " required>
  		  <input class="button" type="button" value="Cari">
		  </form>
      <div class="lapor">
        <a href=<?php echo base_url('index.php/melapor/tambah') ?>>Buat Laporan/Komentar</a>
      </div>
      <div class="listing">
        <p>Laporan/Komentar Terakhir</p>
      </div>
      <hr>
      <?php
      if( ! empty($lampiran)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
        foreach($lampiran as $data){ // Lakukan looping pada variabel data dari controller
          echo "<p>".substr($data->komentar, 0, 6).".....</p>";
          echo "<ul>";
          echo "<li><a>lampiran: ".$data->lampiran."</a></li>";
          echo "<li><a>Aspek: ".$data->aspek."</a></li>";
          echo "<li><a>Waktu: ".$data->tgl_masuk."</a></li>";
          echo "<li>";
          echo anchor('melapor/spesifik/'.$data->lampiran,'Lihat Selengkapnya');
          echo "</ul>";
        }
      }else{ // Jika data tidak ada
        echo "<p>Data tidak ada</p>";
      }
      ?>
    </div>
  </body>
</html>
