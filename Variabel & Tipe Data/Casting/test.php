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
      <h1>Belajar Operator Type Jugling</h1>
      <p> $a="592eek";</p>
      <p> $b=(int)"592eek";</p>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
       $a="592eek";
       $b=(int)"592eek";
       echo "\$a : $a <br/>";
       echo "\$b : $b <br/>";

      /* NOTE:
        Casting
         $b=(int)"592eek"
         artinya memaksa memasukan operand variabel a ke variabel b tapi
         yang dimasukan hanya yang bertipe numerik(integer)
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
