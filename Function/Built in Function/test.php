<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Perulangan</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Perulangan Do..While</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?

        for($i=0;$i<26;$i++){
          echo chr(65+$i); // chr(); merupakan function built in php
          if($i<25){
            print (" | ");
          }
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
