<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Array 1 Dimensi</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Array 1 Dimensi di PHP</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
        function main(){
          $arraya = array(5,3,52,4,22,4,42); //array 1 dimensi berindeks
          $b = sizeof($arraya);

          echo "Jumlah Array : ".sizeof($arraya)."<br/><br/>"; //mengetahui jumlah indeks Array

          for($i=0;$i<sizeof($arraya);$i++){
            echo "Array indeks ke $i : ".$arraya[$i]."<br/>";
          }
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
