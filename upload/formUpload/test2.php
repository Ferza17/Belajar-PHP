<html lang="en-US">
<head>
  <title>Upload Data dari Form</title>
  <charset meta="utf-8"/>
</head>
<body>
  <div class="container">
    <h1> Input nama file</h1>
    <br>
    Klik Tombol untuk memilih
    <form enctype="multipart/form-data" method="post" action="do_upload2.php">
      <input type="hidden" name="MAX_FILE_SIZE" value="10000">
      Nama File <input type="file" name="file2" size="30">
    <br>
    <input type="submit" value="Upload">
  </div>
</body>
</html>
