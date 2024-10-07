<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Health Consultation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: aqua;
            text-align: center;
        }
        .content {
            max-width: 600px;
            margin: 0 auto;
            padding: 35px;
            background: aliceblue;
            float: left;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<?php include 'Nav.php'; ?>
<body>

    <h1>Heart Health Consultation</h1>
    <div class="content">
        <?php
        $paragraph = "General medicine plays a crucial role in heart health consultations, focusing on prevention, "
                   . "diagnosis, and management of cardiovascular diseases. Physicians assess risk factors such as "
                   . "hypertension, diabetes, and cholesterol levels while providing tailored advice on lifestyle "
                   . "modifications, including diet and exercise. Regular check-ups enable early detection of heart "
                   . "conditions, allowing for timely interventions. Patients benefit from personalized care plans that "
                   . "may include medication management and referrals to specialists when necessary. By fostering open "
                   . "communication, general practitioners empower patients to take an active role in their heart health, "
                   . "ultimately aiming to reduce the incidence of heart disease and improve overall well-being.";
        
        echo "<p>$paragraph</p>";
        ?>
    </div>

</body>
</html>
