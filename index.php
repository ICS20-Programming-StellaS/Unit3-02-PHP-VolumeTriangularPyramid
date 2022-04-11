<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Triangular Pyramid, PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Stella S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Calculating the Volume of a Right Triangular Pyramid </title>
  </head>
  
  
  <center><body>  

		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Calculating the Volume using PHP </h1>";
    ?>
    
  <?php
			echo "<h3>Calculate the Volume of a Right Triangular Pyramid </h3>";
		?>
    
    <!-- Values for calculating area and perimeter of trapezoid-->
    <form action="./results.php" method="post" target="results">  
      <label for=Base">Base (cm) :</label>
      <input type="text"  name="base" id="base" placeholder="base of triangular pyramid" name="base"><br><br>

            <label for=Height">Height (cm):</label>
      <input type="text"  name="height" id="height" placeholder="height of triangular pyramid" name="height"><br><br>
      
            <label for=Length">Length (cm) :</label>
      <input type="text"  name="length" id="length" placeholder="length of triangular pyramid" name="length"><br><br>

      <input type="submit" value="Calculate">
    <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">	
      </iframe>
  </body></center>
</html>