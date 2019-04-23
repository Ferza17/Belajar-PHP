<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Array Sebagai Selisih (diff)</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Array Sebagai Selisih (Menampilkan Element yang sama) (diff)</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
        function main(){
          define("HARI",["Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"]); //define() digunakan untuk memberikan nilai konstanta
          for($i=0;$i<7;$i++){
            echo ("<br/>").($i+1).("- ").(HARI[$i]);
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
