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
      <h1> Belajar Perulangan foreach</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
        function main(){
          $nama = array("Fery" => 198991,
                        "Reza" => 980934,
                        "Aditya" => 12332
          );
          foreach ($nama as $key => $value) {
            print ("Nama Anak : $key nomor : $value <br/>");
          }

        }

        main();

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
