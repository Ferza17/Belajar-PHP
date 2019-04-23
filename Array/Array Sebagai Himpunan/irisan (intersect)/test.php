<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Array Sebagai irisan (Intersect)</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Array Sebagai irisan (Menampilkan Element yang sama) (Intersect)</h1>
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

          //Mencari data yang sama
          $irisan = array_intersect($data_1,$data_2); // function khusus untuk mencari data yang sama. kemudian di save di variabel $irisan
          echo "<h3>Isi Irisan(data yan sama) dari \$data_1 dan \$data_2 </h3>";
          print_r($irisan);
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
