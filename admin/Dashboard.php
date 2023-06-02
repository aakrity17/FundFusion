<?php
include "routeconfig.php";
include "sessioncheck.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> | FundFusion Dashboard |</title>
    <link rel="stylesheet" href="<?php echo $site_url ?>css/Dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/webfonts/fa-duotone-900.woff2">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/webfonts/fa-duotone-900.woff">  </head>
  <body>
  
    <div class="container">
      <?php
      @include('partials/navigation.php')
      ?>
      <!-- main -->
      <div class="main">
        <div class="topbar">
          
          <!-- Search -->
          <div class="search">
            <label>
              <input type="text" placeholder="Search here" />
            </label>
          </div>
      </div>
    </div>
  </body>
   <script src="<?php echo $site_url ?>js/Dashboard.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</html>
