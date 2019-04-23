<?
  class objek{
    function counter(){
      return 5;
    }
    function do_pesan(){
      echo "Cetak Pesan"."<br>";
    }
  }

  $test = new objek;
  $test -> do_pesan();
  echo "<br>";
  echo $test -> counter();

  /*=========================================
    1. class bernama objek mempunyai method counter dan do_pesan
    2. untuk membuat PHP Data objek menggunakan syntax " $test = new objek; "
    3. untuk mengakses syntax $test -> do_pesan();
     menggunakan " -> "
  */
?>
