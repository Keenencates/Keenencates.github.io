<!DOCTYPE html>
<html lang="en-US">
<!--Metadata-->
<head>
<meta name="description" content="personal programmming blog">
<meta name="keywords" content="HTML, CSS, JavaScript, C">
<meta name="author" content="Keenen Cates">
<meta charset="UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/stylesheets/index.css">
</head>

<html>

<body>

<div class = "card">
<h2><strong>Hutter Prize Project</strong></h2>
<h3>Engineer: <a href="index.html" style="text-decoration:none">Keenen Cates</a></h3>
<h3>Sponsor/Advisor: Dr. Robert Morse</h3>
<h4>Mini Proposal</h4>
<p> I am working towards implementing an approach to compressing the Hutter Prize File for submission. This project could include multiple approaches with comparisons between different approaches. The Hutter Prize Founders believe that text compression and artificial intelligent agents are similar problems; if not the same problem. For this reason, I will be investigating how artificial intelligence could be used to solve the problem, in addition to more tradtional approaches.</p>
</div>

<?php
  $totalHours = 0;
  $inFile = fopen("design.log", "r");
  while(!feof($inFile))
  {
      $line = fgets($inFile);
      if ($line != "" && $line[0] != '#')
      {
         $parts = explode ("|", $line);
         echo "<div class = \"card\">";
         echo "<h2><strong>$parts[0]</strong></h2>";
         echo "<h3>$parts[1] - $parts[2] hrs</h3>";
         echo "<p>$parts[3]</p></div>";
         $numHours = (double) $parts[2];
         $totalHours += $numHours;
      }
  }
  echo "<div class = \"card\" style = \"min-height:100px\">";
  echo "<h2><strong>Total Hours</strong></h2>";
  echo "<p>$totalHours</p>";
  echo "</div>";
?>    

</body>
</html>
