<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>ajax-dischi</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

      <header>
        <aside class="main-left">

        </aside>

        <div class="main-top container">
          <div class="menu-top">
            <ul>
              <li>Discover</li>
              <li>Browse</li>
              <li>Stream</li>
              <li>Charts</li>
              <li>Shop</li>
              <li>News</li>
              <li>Purchase</li>
            </ul>
          </div>
      </header>

      <main>
        
        <div class="card_container container">

        </div>

        <script id="entry-template" type="text/x-handlebars-template">
          <div class="card_template">
                <div class="card">
                  <div class="cover">
                    <img class="cover" src=" {{poster}} " alt="cover">
                    <img class="play" src="img/play.png" alt="play">
                  </div>
                  <div class="description">
                    <h3> {{title}} </h3>
                    <p class="author"> {{author}} </p>
                    <p class="year"> {{year}} </p>
                    <p class="genre"> {{genre}} </p>
                  </div>
                </div>
          </div>
        </script>
      </main>

      <footer>

      </footer>

  <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
