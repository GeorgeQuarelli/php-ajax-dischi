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
      <div class="container">
          <img src="img/logo.png" alt="logo" />
      </div>
    </header>

    <main>
      <div class="card_container">
          <?php foreach ($dischi as $disco) { ?>
            <div class="card">
              <div class=""><img src="<?php echo $disco['poster']; ?>" alt="cover"></div>
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

    <script src="src/app.js" charset="utf-8"></script>
  </body>
</html>
