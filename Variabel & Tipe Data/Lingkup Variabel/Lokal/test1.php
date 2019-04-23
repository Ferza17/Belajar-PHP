<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title> Belajar  Operator Assigment</title>
</head>
<body>
  <div class="container">
    <header>
      <pre>
      <h1>Belajar Variabel Lokal</h1>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
        $a="hehe"; // //Variabel Global
        function info(){
          $nama ="Fery Reza Aditya"; //Variabel Lokal
          $nim  ="17.11.1731";  //Variabel Lokal
          $prodi ="Informatika";  //Variabel Lokal

          hiasan();
          echo "Nama    : $nama <br/>";
          echo "NIM     : $nim <br/>";
          echo "Prodi   : $prodi <br/>";
          hiasan();
        }

        function hiasan(){
          echo "<br/>+------------------------------------------+<br/><br/>";
        }

        info();
        /* NOTE: variabel lokal yaitu variabel yang hanya bisa diakses oleh function itu sendiri
        */
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
