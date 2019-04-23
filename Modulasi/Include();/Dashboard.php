<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title>Belajar Modulasi include()</title>
</head>
<body>
  <div class="container">
    <header>
      <?include('header.php');?>
    </header>
    <nav>
    </nav>
    <section>
      <?
        include('section.php');
      ?>
    </section>
    <aside>
    </aside>
    <article>
    </article>
    <footer>
      <?include('footer.php');?>
    </footer>
  </div>
</body>
</html>
