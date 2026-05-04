
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resume</title>

<?php
$name = "Fiona Nicole Rivas";
$position = "Student";
$phone = "0916 295 2560";
$email = "fionaarivas@gmail.com";
$address = "Quezon City";

$about = "I'm someone who finds joy in little things and I am always open to learning new things. I enjoy exploring opportunities and continously improving my skills. Im also a person who puts real effort to understand and learn, even when things are challenging. I try my best to adapt to new situations and grow from every experience that comes my way.";
$career = "To obtain an opportunity where I can utilize my skills and enhance my knowledge while gaining real‑world experience.";

$skills = ["Hardworking", "Teamwork", "Self-motivated", "Adaptability"];
$hobbies = ["Watching movies", "Gaming", "Reading", "Cooking"];
$languages = ["Filipino", "English"];
?>

<style>

body {
  font-family: 'Segoe UI', Arial, sans-serif;
  background: #e5e5e5;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding: 40px 0;
}


.resume {
  width: 800px;
  min-height: 1200px; /* ✅ taller portrait */
  background: #ffffff;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}


.header {
  background: linear-gradient(to right, #ff71bf, #f6fbff);
  padding: 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header h1 {
  margin: 0;
  font-size: 36px;
  color: #333;
}

.position {
  margin-top: 6px;
  color: #666;
  font-size: 16px;
}

.header-right p {
  margin: 5px 0;
  font-size: 14px;
  color: #333;
}


.content {
  display: flex;
  padding: 40px;
  gap: 30px;
  padding-bottom: 140px; 
}


.left {
  width: 32%;
}

.left h3 {
  background: #ffc0e1;
  padding: 6px 12px;
  font-size: 14px;
  margin-bottom: 10px;
  letter-spacing: 1px;
}

.left p,
.left li {
  font-size: 14px;
  line-height: 1.6;
}


.right {
  width: 68%;
}

.right h2 {
  font-size: 18px;
  margin-top: 0;
  border-bottom: 2px solid #ddd;
  padding-bottom: 5px;
}

.right p,
.right li {
  font-size: 14px;
  line-height: 1.7;
}

/* ===== LIST STYLES ===== */
ul {
  padding-left: 20px;
  margin-top: 0;
}

li {
  margin-bottom: 6px;
}


@media print {
  body {
    background: white;
    padding: 0;
  }
  .resume {
    box-shadow: none;
    width: 100%;
    min-height: 100%;
  }
}
</style>
</head>

<body>

<div class="resume">

  
  <div class="header">
    <div>
      <h1><?php echo $name; ?></h1>
      <p class="position"><?php echo $position; ?></p>
    </div>
    <div class="header-right">
      <p>📞 <?php echo $phone; ?></p>
      <p>✉ <?php echo $email; ?></p>
      <p>📍 <?php echo $address; ?></p>
    </div>
  </div>

  
  <div class="content">

    <!-- LEFT -->
    <div class="left">
      <h3>EDUCATION</h3>
      <p>
        <strong>FEU Institute of Technology</strong><br>
        BSIT‑WMA<br>
        2024 – Present
      </p>

      <h3>SKILLS</h3>
      <ul>
        <?php foreach($skills as $skill){ echo "<li>$skill</li>"; } ?>
      </ul>

      <h3>LANGUAGES</h3>
      <ul>
        <?php foreach($languages as $lang){ echo "<li>$lang</li>"; } ?>
      </ul>
    </div>

    <!-- RIGHT -->
    <div class="right">
      <h2>ABOUT ME</h2>
      <p><?php echo $about; ?></p>

      <h2>CAREER OBJECTIVE</h2>
      <p><?php echo $career; ?></p>

      <h2>HOBBIES</h2>
      <ul>
        <?php foreach($hobbies as $hobby){ echo "<li>$hobby</li>"; } ?>
      </ul>
    </div>

  </div>
</div>

</body>
</html>
