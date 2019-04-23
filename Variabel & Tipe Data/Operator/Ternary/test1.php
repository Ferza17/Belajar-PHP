<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title> Belajar  Operator Tenary</title>
</head>
<body>
  <div class="container">
    <header>
      <pre>
      <h1>Belajar Operator Tenary</h1>
      <p> $a=10;</p>
      <p> $b=9;</p>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
      $a = 10;
      $b = 9;
      $selisih = ($a>$b) ? ($a-$b) : ($b-$a);

      echo ("Nilai a : ").($a).("<br/>");
      echo ("Nilai b : ").($b).("<br/>");
      echo ("Selisihnya : ").($selisih);
      /* NOTE:
        code tersebut merupakan penyederhanaan dari if else
        pertama jika ($a>=$b) benar maka  ($a-$b)
        kedua jika  ($a<=$b) salah maka  ($b-$a)
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
