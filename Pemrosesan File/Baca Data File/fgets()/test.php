<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar fgets();</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar  fgets();</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?

          $fp=fopen("bukutelepon.txt","r");
            while($isi =fgets($fp,30)){
              print($isi).("<br/>");
            }

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
