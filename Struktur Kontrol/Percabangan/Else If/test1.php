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
      <h1> Belajar Array 1 Dimensi di PHP</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?

        function main(){
          $data_1 = 22;
          $data_2 = 20;

          $simpan = 8;

          if($simpan >= 40){
            print ("Lebih dari Empatpuluh <br/>");
          }else if($simpan >= 30){
            print ("Lebih dari Duapuluh <br/>");
          }else if($simpan >= 20){
            print ("Lebih dari Tigapuluh <br/>");
          }else if($simpan >= 10){
            print ("Lebih dari Empatpuluh <br/>");
          }else{
            print("Kurang Dari 10 <br/>");
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
