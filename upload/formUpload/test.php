<html lang="en-US">
<head>
  <charset meta="utf-8">
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Input Nama File Untuk Upload </h1>
    </div>
    <div class="nav">
    </div>
    <div class="section">
      <h3> Klik tombol untuk memilih </h3>
      <form enctype="multipart/form-data" method="post" action="do_upload.php">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000">
        Nama File : <input type="file" name="file1" size="30"><br/>
        <input type="submit" value="Upload">
      </form>
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
