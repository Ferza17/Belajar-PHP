<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title> Belajar  Operator Assigment</title>
</head>
<body>
  <div class="container">
    <header>
      <pre>
      <h1>Belajar Variabel Lokal</h1>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
        $a="hehe"; // //Variabel Global
        function info(){
          $x =0; //Variabel Lokal
          echo "\$s = $x <br/>";
          $x++;
        }

        function hiasan(){
          echo "<br/>+------------------------------------------+<br/><br/>";
        }

        hiasan();
        info();
        hiasan();
        info();
        hiasan();
        info();
        hiasan();
        /* NOTE: variabel lokal yaitu variabel yang hanya bisa diakses oleh function itu sendiri
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
