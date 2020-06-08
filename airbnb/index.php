<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>AirBnb</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/function.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </head>
  <body>
    <?php include("inc/nav.inc.php")?>

      <div id="slider-wrapper">
              <div id="slider-arrow-wrapper">
                <div class="slide-arrow" id="left-arrow"><ion-icon name="chevron-back-outline" class="arrow"></ion-icon></div>
                <div class="slide-arrow" id="right-arrow"><ion-icon name="chevron-forward-outline"class="arrow"></ion-icon></div>
              </div>

              
      </div>
      <div id="slides-wrapper">
                <div class="slide active">
                    #1
                </div>
                <div class="slide">
                    #2
                </div>
                <div class="slide">
                    #3
                </div>
              </div>
    
  </body>
</html>
