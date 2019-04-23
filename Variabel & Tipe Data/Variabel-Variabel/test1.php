<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title> Variabel - Variabel </title>
</head>
<body>
  <div class="container">
    <header>
      <pre>
        <h2>Contoh Variabel - Variabel </h2>
        <p>$a=7;</p>
        <p>$b="a";</p>
        <p>$c=$$b;</p>
        <p>$d=$7;</p>
    </header>
    <nav>
    </nav>
    <section>
      <?
      $a=7;
      $b="a";
      $c=$$b;//mengisi variabel c dengan isi di variabel a
      $d=$a;

      echo ("Nilai Variabel a : ").($a).("<br/>");
      echo ("Nilai Variabel b : ").($b).("<br/>");
      echo ("Nilai Variabel c : ").($c).("<br/>");
      echo ("Nilai Variabel d : ").($d).("<br/>");
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
