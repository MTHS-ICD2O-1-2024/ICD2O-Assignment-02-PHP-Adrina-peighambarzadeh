<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The Volume of Cuboid Calculation, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina Peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Perimeter of the Right Triangle, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Perimeter of the Right Triangle, with PHP</span>
      </div>
    </header>

    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/right-triangle.png" alt="right triangle image" width="250" />
      </div>
        <div id="user-info">
          <div id="user-info">
            <?php
            // Input
            $aLegOfRightTriangle = $_GET["a-leg"];
            $bLegOfRightTriangle = $_GET["b-leg"];

            // Calculate the hypotenuse (c-leg) using the Pythagorean theorem
            $cLegOfRightTriangle = sqrt($aLegOfRightTriangle * $aLegOfRightTriangle + $bLegOfRightTriangle * $bLegOfRightTriangle);

            // Calculate the perimeter of the right triangle
            $perimeter = $aLegOfRightTriangle + $bLegOfRightTriangle + $cLegOfRightTriangle;

            // Output
            echo "If your triangle has the a = " . $aLegOfRightTriangle . " cm and b = " . $bLegOfRightTriangle . " cm:";
            echo "<br />";
            echo "<br />";
            echo "The perimeter is " . $perimeter . " cm.";
            ?>

          </div>
        </div>
        <div class="page-content-return">
          <a href="./index.php">Return ...</a>
        </div>
    </main>
  </div>
</body>

</html>