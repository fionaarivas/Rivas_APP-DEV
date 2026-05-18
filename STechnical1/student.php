<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial;
            background-color: #eeeeee;
        }

        .form-box {
            width: 900px;
            margin: 30px auto;
            background-color: white;
            border: 2px solid black;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .section-title {
            background-color: black;
            color: white;
            padding: 6px;
            font-weight: bold;
            margin-top: 12px;
        }

        .row {
            display: flex;
            border: 1px solid black;
            border-top: none;
        }

        .field {
            flex: 1;
            padding: 10px;
            border-right: 1px solid black;
        }

        .field:last-child {
            border-right: none;
        }

        .label {
            font-weight: bold;
            font-size: 14px;
        }

        .answer {
            border-bottom: 1px solid black;
            margin-top: 10px;
            padding-bottom: 4px;
            min-height: 20px;
        }
    </style>
</head>
<body>

<?php
$studentNumber = "202410121";
$section = "TW22";
$yearLevel = "2nd Year";

$collegeDepartment = "College of Information Technology";
$program = "Bachelor of Science in Information Technology";
$major = "Web and Mobile Development";
$semester = "3rd Semester";
$schoolYear = "2025-2026";

$fullName = "Fiona Nicole Rivas";
$nickname = "fionaa";
$gender = "Female";
$placeOfBirth = "Bulacan, Calumpit";
$civilStatus = "Single";

$previousSchool = "San Francisco High School";
$strand = "ABM";

$medicalCondition = "None";
$contactPerson = "Russel Rivas";
$contactNo = "09123456789";

$birthCountry = "Philippines";
$provinceOfBirth = "Bulacan";
$religion = "Catholic";
?>

<div class="form-box">

    <h1>Student Registration Form</h1>

    <div class="section-title">Registration Details</div>
    <div class="row">
        <div class="field">
            <div class="label">Student Number</div>
            <div class="answer"><?php echo $studentNumber; ?></div>
        </div>
        <div class="field">
            <div class="label">Section</div>
            <div class="answer"><?php echo $section; ?></div>
        </div>
        <div class="field">
            <div class="label">Year Level</div>
            <div class="answer"><?php echo $yearLevel; ?></div>
        </div>
    </div>

    <div class="section-title">College Information</div>
    <div class="row">
        <div class="field">
            <div class="label">College Department</div>
            <div class="answer"><?php echo $collegeDepartment; ?></div>
        </div>
        <div class="field">
            <div class="label">Program</div>
            <div class="answer"><?php echo $program; ?></div>
        </div>
    </div>

    <div class="row">
        <div class="field">
            <div class="label">Major / Specialization</div>
            <div class="answer"><?php echo $major; ?></div>
        </div>
        <div class="field">
            <div class="label">Semester</div>
            <div class="answer"><?php echo $semester; ?></div>
        </div>
        <div class="field">
            <div class="label">School Year</div>
            <div class="answer"><?php echo $schoolYear; ?></div>
        </div>
    </div>

    <div class="section-title">Student Information</div>
    <div class="row">
        <div class="field">
            <div class="label">Full Name</div>
            <div class="answer"><?php echo strtoupper($fullName); ?></div>
        </div>
        <div class="field">
            <div class="label">Nickname</div>
            <div class="answer"><?php echo ucfirst($nickname); ?></div>
        </div>
    </div>

    <div class="row">
        <div class="field">
            <div class="label">Gender</div>
            <div class="answer"><?php echo $gender; ?></div>
        </div>
        <div class="field">
            <div class="label">Place of Birth</div>
            <div class="answer"><?php echo $placeOfBirth; ?></div>
        </div>
        <div class="field">
            <div class="label">Civil Status</div>
            <div class="answer"><?php echo $civilStatus; ?></div>
        </div>
    </div>

    <div class="section-title">Previous School Information</div>
    <div class="row">
        <div class="field">
            <div class="label">Name of Previous School</div>
            <div class="answer"><?php echo $previousSchool; ?></div>
        </div>
        <div class="field">
            <div class="label">Strand</div>
            <div class="answer"><?php echo $strand; ?></div>
        </div>
    </div>

    <div class="section-title">Health Information</div>
    <div class="row">
        <div class="field">
            <div class="label">Medical Condition</div>
            <div class="answer"><?php echo $medicalCondition; ?></div>
        </div>
    </div>

    <div class="row">
        <div class="field">
            <div class="label">Contact Person</div>
            <div class="answer"><?php echo $contactPerson; ?></div>
        </div>
        <div class="field">
            <div class="label">Contact No</div>
            <div class="answer"><?php echo $contactNo; ?></div>
        </div>
    </div>

    <div class="section-title">Citizenship</div>
    <div class="row">
        <div class="field">
            <div class="label">Birth Country</div>
            <div class="answer"><?php echo $birthCountry; ?></div>
        </div>
        <div class="field">
            <div class="label">Province of Birth</div>
            <div class="answer"><?php echo $provinceOfBirth; ?></div>
        </div>
        <div class="field">
            <div class="label">Religion</div>
            <div class="answer"><?php echo $religion; ?></div>
        </div>
    </div>

</div>

</body>
</html>