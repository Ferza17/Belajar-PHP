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
      <h1>Belajar Variabel Global</h1>
      </pre>
    </header>
    <nav>
    </nav>
    <section>
      <?

       $a="Fery Reza Aditya";
       $b=(int)"170899eek";
       function nama(){

         global $a;  //Pengaksesan Cara 1
         global $b; //Pengaksesan Cara 1

         hiasan();
         echo "Data Dari Variabel Global<br/>";
         echo "$a "."$b <br/>";

       }

       function nama2(){
         $GLOBALS['a']; //Pengaksesan cara 2 dengan variabel array globals
         $GLOBALS['b']; //Pengaksesan cara 2 dengan variabel array globals
         hiasan();
         echo "Data Dari Variabel Global<br/>";
         echo $GLOBALS['a']." ".$GLOBALS['b']."<br/>";
         hiasan();
         echo "Data Variabel global diubah<br/>";
         $GLOBALS['a']="Ferza";  //Mengganti data array Global
         $GLOBALS['b']=200012;  //Mengganti data array global
         echo $GLOBALS['a']." ".$GLOBALS['b']."<br/>";

       }

       function hiasan(){
         echo "+-------------------------------------------+<br><br/>";
       }

       nama();
       nama2();
       hiasan();
       echo "Data Di array global terganti<br>";
       echo "$a $b";

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
