<?php include 'database/dischi.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-dischi</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

    <header>
      <div class="main-left">

      </div>
      <div class="container">

      </div>
    </header>

    <main>
      <div class="main-top container">

      </div>
      <div class="card_container container">
          <?php foreach ($dischi as $disco) { ?>
            <div class="card">
              <div class="cover">
                <img class="cover" src="<?php echo $disco['poster']; ?>" alt="cover">
                <img class="play" src="img/play.png" alt="play">
              </div>
              <div class="description">
                <h3><?php echo $disco['title']; ?></h3>
                <p class="author"><?php echo $disco['author']; ?></p>
                <p class="year"><?php echo $disco['year']; ?></p>
                <p class="genre"><?php echo $disco['genre']; ?></p>
              </div>
            </div>
          <?php } ?>
      </div>
    </main>

    <footer>

    </footer>

    <script src="src/app.js" charset="utf-8"></script>
  </body>
</html>
