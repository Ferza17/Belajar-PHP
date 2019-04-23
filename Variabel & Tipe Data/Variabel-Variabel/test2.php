<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title> Belajar Variabel Dinamik </title>
</head>
<body>
  <div class="container">
    <header>
      <h2>Contoh Variabel varaiabel</h2>
      <pre>
        <p>$a=9;</p>
        <p>$b="a";</p>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <h3>Hasil Eksekusi Dengan PHP :</h3>
        <?
        $a=7;
        $b="a";

        echo ("\$a = $a").("<br/>");
        echo ("\$b = $b").("<br/>");
        echo ("variabel dinamik isi var a : ${$b}").("<br>");

        /* NOTE: Menampilkan isi variabel a di variabel b dengan menggunakan konsep dinamik
          maka memerlukan syntax ${$b}
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
