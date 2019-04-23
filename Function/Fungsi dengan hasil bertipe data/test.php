<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Function</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Function Fitur terbaru php7</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
          $float_1 = 10.7;
          $float_2 = 2.5;

          function tambah($float_1,$float_2):int{
            return $float_1 + $float_2;
          }

          print("Hasil Tambah : ").(tambah($float_1,$float_2)).("<br/>");
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
