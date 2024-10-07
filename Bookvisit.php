<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Visit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: aqua;
       
        }
        h1 {
            color: blue;
            text-align: center;
            font-size: 50px;

        }
        .form-container {
            max-width: 12cm;
            margin: 0 auto;
            padding: 20px;
            background: blue;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            
            
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<body></body>
    <h1>Book a Visit</h1>
    <div class="form-container">
    <form action="connect.php" method="post">
                    <div class="input-row">
                        <div>
                        <div class="form-group">
                            <label for="">Id</label>
                            <input type="text" placeholder="enter your id number" name="id"/>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" placeholder="enter your name" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="">Number</label>
                            <input type="text" placeholder="enter phone number" name="number"/>
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" placeholder="enter your email address" name="email"/>
                        </div>
                        
                       <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department" required>
                    <option value="" disabled selected>Select a department</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="General Medicine">General Medicine</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
                    </div>

                    </div>
                  
                    <button type="submit" name="submit">Submit</button>

                </form>
            

    </div>

</body>
</html>
