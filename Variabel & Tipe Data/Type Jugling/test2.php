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
      <p> $b=6;</p>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
       $a="5";
       $b="6";
       $jmlh = $a+$b;
       echo ("\$a + \$b = $jmlh  <br/>");
       echo ("\$a + \$b = ").($a+$b).("<br/>");

      /* NOTE:
        Type Jugling yang kedua (string(isi numerik) + sting(isi numerik))
        karena string berisi nilai numerik maka string tersebut bisa di tambah layaknya
        tipe data integer. maka hasilnya 5+6 = 11
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
