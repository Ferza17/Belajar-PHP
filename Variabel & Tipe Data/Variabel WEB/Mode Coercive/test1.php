<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title> Belajar Variabel Web mode Coercive</title>
</head>
<body>
  <div class="container">
    <header>
      <pre>
      <h1> Belajar Variabel Web mode Coercive</h1>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
        function sum(int ...$ints){
          return array_sum($ints);
        }

        echo("<h1>Tipe Data Coercive</h1>");
        echo "<h4> Penjumlahan isi array integer : </h4>";
        echo (sum(2,1,4,2));
        echo("<br/>");
        echo "<h4> Penjumlahan isi array campuran : </h4>";
        echo (sum(2,"4",4.4));
        /* NOTE:
          Definisi tipe data dari suatu variabel akan ditentukan berdasarkan tipe data yang dimasukan kedalam
          variabel tersebut dan bisa berganti kapan saja sesuai dengan yang dimasukan
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
