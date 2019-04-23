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
      <h1>Belajar Operator Assigment</h1>
      <p> $a=5;</p>
      <p> $b=&$a;</p>
      <p> $a=7;</p>
      <p> $b = &$a;</p>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
      $a=5;
      $b=&$a;
      echo ("\$a : $a").("<br/>");
      echo ("\$b : $b").("<br/>");
      echo "<h3>Setelah Di ganti : </h3>";
      $a=7;
      $b = &$a;
      echo ("\$a : $a").("<br/>");
      echo ("\$b : $b").("<br/>");

      /* NOTE:
        $a=5;
        $b= &$a;  pointer dalam bahasa pemrograman.
        artinya variabel b menyimpan data dan alamat dari variabel a
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
