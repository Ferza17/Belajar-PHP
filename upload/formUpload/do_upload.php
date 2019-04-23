<html lang="en-US">
<head>
  <charset me ta="utf-8">
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Simpan file yang diupload</h1>
    </div>
    <div class="nav">
    </div>
    <div class="section">
      <?
        if($file1 !="none")
        {
          copy("$file1","hasilupload.txt") or die ("NoFiles!");
        }
        else
        {
          die ("Tidak akan ada File Yang Di Upload !");
        }
      ?>
    </div>
    <div class="aside">
    </div>
    <div class="article">
    </div>
    <div class="footer">
    </div>
  </div>
</body>
</html>
