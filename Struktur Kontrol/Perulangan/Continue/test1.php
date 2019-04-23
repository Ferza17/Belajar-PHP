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
      <h1> Belajar Perulangan Do..While</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
        function main(){
          for($i=0;$i<10;$i++){
            if($i%2){
              continue; // dilewatin kalo pake continue
            }else{
              print("$i ");
            }
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
