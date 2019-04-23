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
          $arraya = array( array(5,3), array(1,7), array(2,8), array(9,10) ) ; //Array 2 Dimensi
          $b = sizeof($arraya);

          echo "Jumlah Array : ".sizeof($arraya)."<br/><br/>"; //mengetahui jumlah indeks Array

          for($i=0;$i<sizeof($arraya);$i++){
            for($j=0;$j<sizeof($arraya);$j++){
              echo $arraya[$i][$j];
            }
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
