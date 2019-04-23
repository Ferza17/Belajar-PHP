<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title> Belajar Variabel Web mode Konstanta</title>
</head>
<body>
  <div class="container">
    <header>
      <pre>
      <h1> Belajar Variabel Web mode Konstanta</h1>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
        define ("phi",22/7); // Mode Konstanta
        echo "jumlah dari phi :".phi."<br/><br/>";

        function lingkaran(){
          $r=7;

          echo "Jari - jari Lingkaran : ".phi*$r*$r."<br/>";
          echo "Luas Lingkaran : ".phi*$r*$r."<br/>";
          echo "Keliling Lingkaran : ".phi*2*$r."<br/>";
        }

        lingkaran();
        /* NOTE:
              jadi setiap phi bernilai  22/7 atau 3.1428571428571
        */
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
