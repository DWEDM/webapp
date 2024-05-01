<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
    </head>
<body>



  <?php include('include/header.php')?>






  <div class="title-section">
    <div class="main-title-section">
      <div class="wall-art"></div>
      <img class="logo-animated"  src="../resources/homepage/logo-animated.gif">
        <div class="title">
          <section class="hidden">
            Welcome!
          </section>
        </div>
    </div>
  </div>



    <div class="content">
      <div class="main-content">
        <div class="AOTD">
        <section class="hidden">
          <h2>Art of The Day:</h2>
        </section>
          <div class="AOTD-content">
            <div class="image-AOTD">
              <section class="hidden">
                <img src="../resources/artworks/Dinner in the sun(1938) - fernando amorsolo.jpg" alt="people eating filipino local foods outside the hut">
              </section>
              </div>
            <div class="AOTD-description">

              <section class="hidden"><h4>Dinner in The Sun - 1938</h4></section>

              <section class="hidden"><h5>By: Fernando Amorsolo</h5></section>

              <section class="hidden">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                  pariatur. Excepteur sint occaecat cupidatat non proident, 
                  sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              </section>
            </div>
          </div>
        </div>
        <div class="divider-gradient-1"></div>



        <div class="featured">
          <div class="baybayin-bg"></div>
          
            <div class="featured-section">
            <section class="hidden">
              <h2>Featured Art:</h2>
            </section>
                <div class="featured-content">
                <div class="featured-box">
                  <section class="hidden">
                        <img class="image-featured" src="../resources/artworks/philippine bululs.jpg" alt="sitting carved human called bululs">
                  </section>
                </div>

                  <div class="featured-description">
                    <section class="hidden">
                      <h3>Philippine Bululs</h3>
                    </section>

                    <section class="hidden">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, 
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </section>
                  </div>
                </div>
            </div>
        </div>
        <div class="divider-gradient-2"></div>






        <div class="announcements">
        <section class="hidden">
          <h2>Announcements:</h2>
          <br>
        </section>

          <div class="news-container">
            <div class="news-box hidden"><?php include('include/card.php')?></div>
            <div class="news-box hidden"><?php include('include/card.php')?></div>
            <div class="news-box hidden"><?php include('include/card.php')?></div>
          </div>

        </div>



      </div>
    </div>



    <?php include('include/footer.php')?>
</body>
</html>