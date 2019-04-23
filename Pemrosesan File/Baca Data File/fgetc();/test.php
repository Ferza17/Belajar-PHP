<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar fgetc();</title>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
    </nav>
    <section>
      <h1> Belajar  fgetc();</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?

          function main(){
            $fp=fopen("bukutelepon.txt","r");
            $huruf=0;
            $baris=1;
              while(!feof($fp)){
                $ch = fgetc($fp);
                if(($ch!=" ")&&($ch!="\n"&&($ch!="\t"))){
                  $huruf++;
                }if(($ch=="\n")){
                  $baris++;
                }
              }

            printf("<br/>");
            printf("Jumlah Huruf : $huruf");
            printf("<br/>");
            printf("Jumlah Baris : $baris");
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
