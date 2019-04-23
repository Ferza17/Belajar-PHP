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
      <h1>Belajar Operator Assigment</h1>
      <p> $a=5;</p>
      <p> $a+=8;</p>
      <p> $str = "Hallo ..";</p>
      <p> $str .="Selamat Datang di PHP! ";</p>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?
       $a=5;
       $a+=8;
       $str = "Hallo ..";
       $str .="Selamat Datang di PHP! ";

      echo ("Nilai \$a : ").($a).("<br/>");
      echo "string !"."<br/>";
      echo ("\$str = $str ").("<br/>");
      /* NOTE:
        $a+=8; artinya a = 5 + 8;
        $str .="Selamat Datang di PHP! "; artinya $str="hello" ditambah .="Selamat Datang di PHP! ";
        sama dengan "Hello ..Selamat Datang di PHP!"
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
