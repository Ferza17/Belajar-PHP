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
      <h1> Belajar Array  Assosiatif cara pertama di PHP</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
        function main(){
          $telepon["fery"]="087884218187";
          $telepon["agung"]="07899878332";
          $telepon["joko"]="990933242993";
          $telepon["anwar"]="99800039200932;";

          //Tampilkan Data

          echo "Telepon Fery : ".$telepon["fery"]."<br/>";
          echo "Telepon agung : ".$telepon["agung"]."<br/>";
          echo "Telepon joko : ".$telepon["joko"]."<br/>";
          echo "Telepon anwar : ".$telepon["anwar"]."<br/>";
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
