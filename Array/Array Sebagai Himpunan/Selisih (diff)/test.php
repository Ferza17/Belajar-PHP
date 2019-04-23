<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Array Sebagai Selisih (diff)</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Array Sebagai Selisih (Menampilkan Element yang sama) (diff)</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
        function main(){
          // Array data pertama
          $data_1 = array(4,6,2,5);
          echo "<h3>Isi Array Data Pertama </h3>";
          print_r($data_1);

          //Array data kedua
          $data_2 =  array(1,5,2,4);
          echo "<h3>Isi Array Data Kedua </h3>";
          print_r($data_2);

          //Array Selisih
          $diff = array_diff($data_1,$data_2);
          // NOTE: Jadi $data_1 mencari nilai yang sama di $data_2 .jika elementnya sama maka element yang sama akan dihapus. dan data yang berbeda pada array $data_1 akan disimpan
          // NOTE: Kenapa kok element $data_2 gadimasukin ? karena $data_2 cuma untuk pembanding. yang di save tetap di $data_1
          echo "<h3>Isi Array Seilisih</h3>";
          print_r($diff);
        }

        main();

        ?>
    </section>
    <aside>
    </aside>
    <article>
    </article>
    <footer>
    </footer>
  </div>
</body>
</html>
