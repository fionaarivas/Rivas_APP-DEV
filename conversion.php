
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Measure Conversion Chart – Lengths (UK)</title>

<style>
body {
  font-family: Arial, sans-serif;
  background: #ffa4dc;
}

.container {
  width: 900px;
  margin: 30px auto;
  background: white;
  padding: 20px;
  border: 2px solid black;
}

.header-top {
  display: flex;
  justify-content: space-between;
  font-size: 12px;
  margin-bottom: 10px;
}

h2 {
  text-align: center;
  color: #ff00ae;
  margin: 15px 0;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

td {
  border: 1px solid gray;
  padding: 6px;
  font-size: 13px;
}

.section {
  background: yellow;
  font-weight: bold;
  text-align: center;
}
</style>
</head>

<body>

<div class="container">

<div class="header-top">
  <span>Name</span>
  <span>Date</span>
</div>

<h2>MEASURE CONVERSION CHART – LENGTHS (UK)</h2>

<?php
/* METRIC */
?>

<table>
<tr class="section"><td colspan="5">METRIC CONVERSIONS</td></tr>
<tr><td>1 centimetre</td><td>=</td><td>10 millimetres</td><td>1 cm</td><td>= 10 mm</td></tr>
<tr><td>1 decimetre</td><td>=</td><td>10 centimetres</td><td>1 dm</td><td>= 10 cm</td></tr>
<tr><td>1 metre</td><td>=</td><td>100 centimetres</td><td>1 m</td><td>= 100 cm</td></tr>
<tr><td>1 kilometre</td><td>=</td><td>1000 metres</td><td>1 km</td><td>= 1000 m</td></tr>
</table>

<?php
/* IMPERIAL */
?>

<table>
<tr class="section"><td colspan="5">IMPERIAL CONVERSIONS</td></tr>
<tr><td>1 foot</td><td>=</td><td>12 inches</td><td>1 ft</td><td>= 12 in</td></tr>
<tr><td>1 yard</td><td>=</td><td>3 feet</td><td>1 yd</td><td>= 3 ft</td></tr>
<tr><td>1 chain</td><td>=</td><td>22 yards</td><td>1 ch</td><td>= 22 yd</td></tr>
<tr><td>1 furlong</td><td>=</td><td>220 yards</td><td>1 fur</td><td>= 220 yd</td></tr>
<tr><td>1 mile</td><td>=</td><td>1760 yards</td><td>1 mi</td><td>= 1760 yd</td></tr>
</table>

<?php

?>

<table>
<tr class="section"><td colspan="5">METRIC → IMPERIAL CONVERSIONS</td></tr>
<tr><td>1 millimetre</td><td>=</td><td><?php echo 0.03937; ?> inches</td><td>1 mm</td><td>= 0.03937 in</td></tr>
<tr><td>1 centimetre</td><td>=</td><td><?php echo 0.3937; ?> inches</td><td>1 cm</td><td>= 0.3937 in</td></tr>
<tr><td>1 metre</td><td>=</td><td><?php echo 39.3701; ?> inches</td><td>1 m</td><td>= 39.3701 in</td></tr>
<tr><td>1 metre</td><td>=</td><td><?php echo 3.28084; ?> feet</td><td>1 m</td><td>= 3.28084 ft</td></tr>
<tr><td>1 kilometre</td><td>=</td><td><?php echo 0.62137; ?> miles</td><td>1 km</td><td>= 0.62137 mi</td></tr>
</table>

<?php

?>

<table>
<tr class="section"><td colspan="5">IMPERIAL → METRIC CONVERSIONS</td></tr>
<tr><td>1 inch</td><td>=</td><td><?php echo 2.54; ?> centimetres</td><td>1 in</td><td>= 2.54 cm</td></tr>
<tr><td>1 foot</td><td>=</td><td><?php echo 30.48; ?> centimetres</td><td>1 ft</td><td>= 30.48 cm</td></tr>
<tr><td>1 yard</td><td>=</td><td><?php echo 0.9144; ?> metres</td><td>1 yd</td><td>= 0.9144 m</td></tr>
<tr><td>1 mile</td><td>=</td><td><?php echo 1.60934; ?> kilometres</td><td>1 mi</td><td>= 1.60934 km</td></tr>
</table>

</div>

</body>
</html>
``
