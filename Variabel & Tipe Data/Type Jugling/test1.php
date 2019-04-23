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
       $b=6;
       $jmlh = $a+$b;
       echo ("\$a + \$b = $jmlh  <br/>");
       echo ("\$a + \$b = ").($a+$b).("<br/>");

      /* NOTE:
        Type Jugling pertama (string(isi numerik) + integer)
        variabel a bertipe string. tapi isimya numerik 5
        nah jika isinya hanya numerik 5 maka bisa di tambah dengan variabel b
        yang berisi 6 dan bertipe integer(numerik).
        maka hasilnya adalah 11 "
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
