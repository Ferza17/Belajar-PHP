<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Function</title>
  <?

    // tulis
    function input(...$arr_data){
      printf("Data yang akan dijumlahkan : <br/>");
      for($i=0;$i<count($arr_data);$i++){
        if($i>0){
          print($arr_data[$i]).(" , ");
        }
      }
      print("<br/>Jumlahnya adalah : ");
    }

    //dua
    function jumlahkan(int ...$arr_data):int{
      $jml=0;
      for($i=0;$i<count($arr_data);$i++){
        $jml += $arr_data[$i];
      }
      return $jml;
    }
  ?>
</head>
<body>
  <div class="container">
    <header>
    </header>
    <nav>
      <section>
    </nav>
      <h1> Belajar Function Menjadi Array</h1>
      <p>Hasil Eksekusi PHP<br><p>
        <?
            print(input(2,3,1,4,6,3,5,3,3));
            print(jumlahkan(2,3,1,4,6,3,5,3,3)).("<br/>");
            print(input(12.6,3.33,3.14,4.65,6.44,3.55,5.63,3.64,6.63));
            print(jumlahkan(12.6,3.33,3.14,4.65,6.44,3.55,5.63,3.64,6.63)).("<br/>");

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
