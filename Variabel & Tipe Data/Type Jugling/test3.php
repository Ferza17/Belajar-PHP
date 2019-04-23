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
      <h1>Belajar Operator Type Jugling</h1>
      <p> $a="5";</p>
      <p> $b="6";</p>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
       $a="5";
       $b="6";
       $jmlh = $a.$b;
       echo ("\$a + \$b = $jmlh  <br/>");

      /* NOTE:
        Lah kenapa tidak berubah kan isinya string(numerik) + string(numerik) ?
        karena operator "." mengindikasikan bahwa tipe data itu tetap string dan dihitungnya sebuah char(kata)
        jadi hasilnya 56 "
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
