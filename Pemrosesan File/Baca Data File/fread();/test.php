<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar ferad();</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar  fread();</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?

          $fp=fopen("bukutelepon.txt","r");
            while($isi =fread($fp,30)){
              print($isi).("<br/>");
            }
              //fread membaca per 30 karakter dengan mode safe mode
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
