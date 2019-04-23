<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar fread();</title>
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

          function telepon(){
            $isi=readfile("bukutelepon.txt");
            print($isi);
          }

          telepon();

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
