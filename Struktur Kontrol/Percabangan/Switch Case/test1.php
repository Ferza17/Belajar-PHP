<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar If Else</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar Switch Case di PHP</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
        function main(){
          $hari = 7;

          switch ($hari) {
            case 1:{
              print ("Minggu");
              break;
            }
            case 2:{
              print ("Senin");
              break;
            }
            case 3:{
              print ("Selasa");
              break;
            }
            case 4:{
              print ("Rabu");
              break;
            }
            case 5:{
              print ("Kamis");
              break;
            }
            case 6:{
              print ("jum'at");
              break;
            }case 7:{
              print ("Sabtu");
              break;
            }
            default:
              print ("Data Yang dimasukan tidak ada <br/>");
              break;
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
