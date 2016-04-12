<?php
require_once ("assets/includes/global.php");
require_once ("assets/database/MysqliDb.php");
require_once ("assets/database/dbconnect.php");


//html page header and menu
require_once ("assets/includes/header.php");
?>

    <!-- Begin page content -->
    <div class="container">

      <div class="page-header">
          <h1>Demo Reset</h1>
      </div>

      <p class="lead">Dropping and rebuilding database with seed data.</p>
      <hr>
      <p>
        <?php
        //drop and rebuild database with seed records
        require_once ("assets/database/seed.php");
         ?>
      </p>


      <?php
      //html page footer
      require_once ("assets/includes/footer.php");
      ?>
