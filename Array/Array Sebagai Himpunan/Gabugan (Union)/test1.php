<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Array Sebagai Himpunan (Union)</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Array Sebagai Himpunan(menggabungkan array) (Union)</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
        function main(){
          // Array data pertama
          $data_1 = array(
            "fery","reza","Aditya",
            17,"08",99
          );
          echo "<h3>Isi Array variabel \$data_1 </h3>";
          print_r($data_1);         // function khusus untuk menampilkan isi Array. tampil array variabel $data_1
          echo "<br/>";
          // Array Data Kedua
          $data_2= array(
            "Ninda","Yunintias",
            17,"08",99
          );
          echo "<h3>Isi Array variabel \$data_2 </h3>";
          print_r($data_2);       // function khusus untuk menampilkan isi Array. tampil array variabel $data_2

          //gabungan 2 array diatas
          $gabung = array_merge($data_1,$data_2);   //array_merge() merupakan function khusus untuk menggabungkan array. $data_1 akan disimpan di indeks pertama, $data_2 indeks kedua dan seterusnya
          echo "<h3>Isi Array Gabungan </h3>";
          print_r($gabung);

          //Menghapus data yang sama
          $unique = array_unique($gabung); //array_unique() merupakan function khusus untuk menghapus data yang sama pada sebuah array
          echo "<h3>Isi Array Gabungan yang diberi function unique</h3>";
          print_r($unique);
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
