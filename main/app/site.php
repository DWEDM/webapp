<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
        <link rel="stylesheet" href="style.css">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
    
    </head>
<body>



  <?php include('include/header.php')?>





  
  <div class="title-section">
    <div class="main-title-section">
      <div class="title">
        Welcome!
      </div>
      <img class="logo-animated"  src="../resources/logo-animated.gif">
    </div>
  </div>



    <div class="content">
      <div class="main-content">
        <div class="AOTD">
          <h2>Art of The Day:</h2>
          <div class="AOTD-content">
            <div class="image-AOTD">
              <img src="../resources/artworks/Dinner in the sun(1938) - fernando amorsolo.jpg" alt="people eating filipino local foods outside the hut">
            </div>
            <div class="AOTD-description">
              <h4>Dinner in The Sun - 1938</h4>
              <h5>By: Fernando Amorsolo</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                  pariatur. Excepteur sint occaecat cupidatat non proident, 
                  sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>



        <div class="featured">
          <div class="baybayin-bg"></div>
          
            <div class="featured-section">
              <h2>Featured Art:</h2>
                <div class="featured-content">
                  <div class="featured-box">
                      <img class="image-featured" src="../resources/artworks/philippine bululs.jpg" alt="sitting carved human called bululs">
                  </div>

                  <div class="featured-description">
                  <h3>Philippine Bululs</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                      reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                      pariatur. Excepteur sint occaecat cupidatat non proident, 
                      sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

            </div>
        </div>






        <div class="announcements">
          <h2>Announcements:</h2>
          <div class="news-container">
            <?php include('include/card.php')?>
            <?php include('include/card.php')?>
            <?php include('include/card.php')?>
          </div>

        </div>



      </div>
    </div>



    <?php include('include/footer.php')?>
</body>
</html>