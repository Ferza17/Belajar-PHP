<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Perulangan</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Function User Defined Function</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
          $num_1 = 10;
          $num_2 = 5;

          function tambah($num_1, $num_2){
            return $num_1 + $num_2;
          }

          function kurang($num_1, $num_2){
            return $num_1 - $num_2;
          }

          function kali($num_1, $num_2){
            return $num_1 * $num_2;
          }

          function bagi($num_1, $num_2){
            return $num_1 / $num_2;
          }

          print ("Hasil Penambahan  : ").(tambah($num_1,$num_2)).("<br/>");
          print ("Hasil Pengurangan : ").(kurang($num_1,$num_2)).("<br/>");
          print ("Hasil Perkalian   : ").(kali($num_1,$num_2)).("<br/>");
          print ("Hasil Pembagian   : ").(bagi($num_1,$num_2)).("<br/>");

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
