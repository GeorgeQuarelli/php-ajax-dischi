<?php include 'database/dischi.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-dischi</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

    <div class="container_card">
    <?php foreach ($dischi as $disco) { ?>
      <img src="<?php echo $disco['poster']; ?>" alt="cover">
      <h3><?php echo $disco['title']; ?></h3>
      <span><?php echo $disco['author']; ?></span>
      <span><?php echo $disco['year']; ?></span>
      <span><?php echo $disco['genre']; ?></span>
    <?php } ?>
    </div>

    <script src="src/app.js" charset="utf-8"></script>
  </body>
</html>
