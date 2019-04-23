<html lang="en-US">
<head>
  <title></title>
  <charset meta="utf-8"/>
</head>
<body>
  <div class="container">
    <h1>Simpan file yang diupload<h1>
      <!-- <p>Nama File : <? echo $file2; ?></p> -->
      <br>
      <?
        if($file2 !="none")
        {
          copy("$file2","hasilupload.txt") or die ("No Files!");
        }else {
          die ("Tidak ada file yang akan diUpload");
        }
      ?>
  </div>
</body>
</html>
