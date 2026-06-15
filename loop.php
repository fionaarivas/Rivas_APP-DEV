
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Two-Digit Combinations</title>

<style>
body {
  font-family: Arial, sans-serif;
  background: #ffbdeb;
  padding: 40px;
}

.container {
  background: white;
  padding: 20px;
  border: 1px solid #000;
  width: 800px;
  margin: auto;
}

h2 {
  text-align: center;
}
</style>
</head>

<body>

<div class="container">
  <h2>Two-Digit Decimal Combinations</h2>

  <p>
    <?php
    for ($i = 0; $i <= 9; $i++) {
      for ($j = 0; $j <= 9; $j++) {
        echo $i . $j;
        if (!($i == 9 && $j == 9)) {
          echo ", ";
        }
      }
    }
    ?>
  </p>
</div>

</body>
</html>

