<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Awareness</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url("https://images.unsplash.com/photo-1551808040-21d10724bee9?q=80&w=1531&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
            background-position: cover;
            background-attachment: fixed;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            font-size: 50px;
        }
        .content {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            float: left;
        
        }
    </style>
</head>
<body>

    <h1>Mental Health Awareness</h1>
    <div class="content">
        <?php
        $paragraph = "Mental health is vital for overall well-being, encompassing emotional, psychological, and social aspects of life. "
                   . "It affects how individuals think, feel, and act, influencing relationships and daily functioning. Promoting mental "
                   . "health involves fostering resilience, managing stress, and seeking help when needed. Raising awareness and reducing "
                   . "stigma are essential steps toward creating supportive environments for those facing mental health challenges.";
        
        echo "<p>$paragraph</p>";
        ?>
    </div>

</body>
</html>
