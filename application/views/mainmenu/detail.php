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
      <div class="listing">
        <p>Detail Laporan/Komentar</p>
      </div>
      <hr>
      <?php
      if( ! empty($lampiran)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
        foreach($lampiran as $data){ // Lakukan looping pada variabel gambar dari controller
          echo "<p>".$data->komentar."</p>";
          echo "<a>lampiran: </a><br>";
          echo "<img src='".base_url("lampiran/".$data->lampiran)."' width='300' height='200'>";
          echo "<ul>";
          echo "<li><a>Aspek: ".$data->aspek."</a></li>";
          echo "<li><a>Waktu: ".$data->tgl_masuk."</a></li>";
          echo "<li>";
          echo anchor('melapor/edit/'.$data->lampiran,'Ubah');
          echo "</li>";
          echo "<li>";
          echo anchor('melapor/hapus/'.$data->lampiran,'Hapus');
          echo "</li></ul>";
        }
      }else{ // Jika data tidak ada
        echo "<p>Data tidak ada</p>";
      }
      ?>
    </div>
  </body>
</html>
