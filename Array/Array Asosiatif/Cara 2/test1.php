<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Array Assosiatif</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Array  Assosiatif cara kedua di PHP</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
        function main(){
          $nomor = array(
            "fery" => "087884218187", // Kenapa pake " "  karena kalau depanya angka 0 (nol) pasti akan error jika tidak pakai " "
            "reza" => 994395756756,
            "adit" => 77567
          );

          //Tampilkan Data

          echo "Telepon Fery : ".$nomor["fery"]."<br/>";
          echo "Telepon Reza : ".$nomor["reza"]."<br/>";
          echo "Telepon Adit  : ".$nomor["adit"]."<br/>";

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
