<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            min-height: 100%;
        }

        body {
            font-family: "Trebuchet MS", Arial, sans-serif;
            background: linear-gradient(135deg, rgb(248, 202, 214), #f8c6d6);
            color: #222;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: linear-gradient(135deg, #403d34, #403d34);
            color: white;
            text-align: center;
            padding: 35px 20px;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }

        header p {
            font-size: 18px;
            font-weight: bold;
        }

       .resume-container {
            width: 85%;
            max-width: 1050px;
            margin: 35px auto;
            background: white;
            border-radius: 25px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            border: 3px solid #ffd1e8;
}
        h2 {
            text-align: center;
            color: #5b4b8a;
            margin-bottom: 25px;
            font-size: 30px;
        }

        .sample-resume-layout {
            width: 100%;
            border: 2px solid #403d34;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .top-section {
            display: grid;
            grid-template-columns: 280px 1fr;
            border-bottom: 2px solid #403d34;
        }

        .photo-area {
            border-right: 2px solid #403d34;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fffafd;
        }

        .photo-area img {
            width: 190px;
            height: 190px;
            object-fit: cover;
            object-position: center top;
            border-radius: 10px;
            border: 3px solid #403d34;
        }

        .info-area {
            padding: 25px;
            text-align: center;
            background: #fffafd;
        }

        .info-area h2 {
            color: #5b4b8a;
            margin-bottom: 15px;
            font-size: 26px;
        }

        .info-area p {
            margin: 7px 0;
            font-size: 16px;
        }

        .resume-links a {
            display: block;
            text-align: center;
            padding: 9px;
            border-bottom: 2px solid #403d34;
            color: #5b4b8a;
            text-decoration: none;
            font-size: 17px;
            font-weight: bold;
            background: white;
        }

        .resume-links a:hover {
            background: #ffe5f5;
        }

        .resume-links a:last-child {
            border-bottom: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        th {
            background: #ffb6d9;
            color: white;
            font-size: 18px;
        }

        th, td {
            border: 1px solid #fd8cc4;
            padding: 14px;
            text-align: left;
        }

        td {
            background: #fffafd;
            font-size: 16px;
        }

        tr:nth-child(even) td {
            background: #ffe5f5;
        }

        .section-title {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        footer {
            background: #403d34;
            color: #f5f0df;
            text-align: center;
            padding: 22px 20px;
            font-weight: bold;
            font-size: 13px;
           margin-top: auto;
}

        footer::before {
            content: "";
            display: block;
            width: 80%;
            height: 1px;
            background: rgba(245, 240, 223, 0.35);
            margin: 0 auto 18px auto;
        }

        footer p {
            margin: 4px 0;
        }

        @media screen and (max-width: 768px) {
            .resume-container {
                width: 92%;
                padding: 20px;
            }

            header h1 {
                font-size: 28px;
            }

            .top-section {
                grid-template-columns: 1fr;
            }

            .photo-area {
                border-right: none;
                border-bottom: 2px solid #403d34;
            }
        }

        .resume-nav {
               background: white;
               text-align: center;
               padding: 15px;
               border-bottom: 2px solid #ffd1e8;
               box-shadow: 0 3px 8px rgba(0,0,0,0.10);
       }

        .resume-nav a {
              display: inline-block;
              text-decoration: none;
              color: #5b4b8a;
              font-weight: bold;
              margin: 8px;
              padding: 8px 12px;
              border-radius: 8px;
          }

        .resume-nav a:hover {
              background: #ffb6d9;
              color: white;
}




    </style>
</head>

<body>

<header>
    <h1>Student Resume</h1>
    <p>College Student</p>
</header>

<nav class="resume-nav">
    <a href="personal.php">Personal Information</a>
    <a href="career.php">Career Objective</a>
    <a href="edu.php">Educational Attainment</a>
    <a href="skills.php">Skills</a>
    <a href="affiliation.php">Affiliation</a>
    <a href="workexp.php">Work Experience</a>
</nav>

<div class="resume-container">