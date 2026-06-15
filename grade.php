
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grade Rank Checker</title>

<style>
body {
  font-family: Arial, sans-serif;
  background: #ff96ca;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.wrapper {
  background: #ff0080;
  width: 400px;
  padding: 70px;
  border-radius: 9px;
}

h2 {
  margin-top: 0;
  text-align: center;
}

input {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border-radius: 6px;
  border: none;
}

button {
  width: 100%;
  padding: 10px;
  background: #ffb5e5;
  color: #000;
  border: none;
  font-weight: bold;
  border-radius: 9px;
  cursor: pointer;
}

.output {
  margin-top: 20px;
  background: #020617;
  padding: 15px;
  border-radius: 8px;
  text-align: center;
}

.output img {
  width: 120px;
  display: block;
  margin: 10px auto 0;
  border-radius: 8px;
}
</style>
</head>

<body>

<div class="wrapper">
  <h2>Grade Ranking</h2>

  <form method="post">
    <input type="text" name="student" placeholder="Student Name" required>
    <input type="number" name="score" placeholder="Grade (0–100)" required>
    <button type="submit">Check Rank</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student = $_POST['student'];
    $score = $_POST['score'];

    if ($score >= 93 && $score <= 100) {
      $ranking = "A";
    } elseif ($score >= 90) {
      $ranking = "A-";
    } elseif ($score >= 87) {
      $ranking = "B+";
    } elseif ($score >= 83) {
      $ranking = "B";
    } elseif ($score >= 80) {
      $ranking = "B-";
    } elseif ($score >= 77) {
      $ranking = "C+";
    } elseif ($score >= 73) {
      $ranking = "C";
    } elseif ($score >= 70) {
      $ranking = "C-";
    } elseif ($score >= 67) {
      $ranking = "D+";
    } elseif ($score >= 63) {
      $ranking = "D";
    } elseif ($score >= 60) {
      $ranking = "D-";
    } else {
      $ranking = "F";
    }

    echo "<div class='output'>";
    echo "<p><strong>Name:</strong> $student</p>";
    echo "<p><strong>Grade:</strong> $score</p>";
    echo "<p><strong>Rank:</strong> $ranking</p>";
    echo "<img src='https://i.redd.it/nf045vdogss41.jpg' alt='Student Photo'>";
    echo "</div>";
  }
  ?>
</div>

</body>
</html>
