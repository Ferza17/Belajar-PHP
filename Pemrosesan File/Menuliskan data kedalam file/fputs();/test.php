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
            function getdata(){
              $namafile ="outfile.txt";
              $mydata = "Budi, Bandung, 170899";
              $fp = fopen($namafile,"w");
              fputs($fp,$mydata);
              fclose($fp);

              print("Membuat file dengan nama : $namafile <br/>");
              print("Data yang dituliskan : $mydata");
            }

            getdata();

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
