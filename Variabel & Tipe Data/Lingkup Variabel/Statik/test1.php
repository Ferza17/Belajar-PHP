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
          static $x =0; //Variabel static
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
        /* NOTE: variabel static artinya nilainya tidak di reset seperti variabel lokal.
                  jadi data di simpan seperti terakhir kondisi digunakanya
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
