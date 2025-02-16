<?php
// Start session if needed
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheme Finder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        select, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Find Government Schemes</h2>
        <form action="find-scheme.php" method="POST">
            <label>Gender:</label>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Any">Any</option>
            </select>

            <label>Age Group:</label>
            <select name="age_group">
                <option value="0-5 years">0-5 years</option>
                <option value="5-10 years">5-10 years</option>
                <option value="10-15 years">10-15 years</option>
                <option value="15-17 years">15-17 years</option>
                <option value="18-25 years">18-25 years</option>
                <option value="26-35 years">26-35 years</option>
                <option value="36-60 years">36-60 years</option>
                <option value="60 and above">60 and above</option>
            </select>

            <label>Category:</label>
            <select name="category">
                <option value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
            </select>

            <label>Occupation:</label>
            <select name="occupation">
                <option value="Student">Student</option>
                <option value="Businessman">Businessman</option>
                <option value="Government Employee">Government Employee</option>
                <option value="Private Employee">Private Employee</option>
                <option value="Farmer">Farmer</option>
                <option value="Worker">Worker</option>
                <option value="Unemployed">Unemployed</option>
            </select>

            <label>Residence:</label>
            <select name="residence">
                <option value="Urban">Urban</option>
                <option value="Rural">Rural</option>
            </select>

            <label>Family Income:</label>
            <select name="income_group">
                <option value="0-2.5L">0-2.5L</option>
                <option value="2.5-5.0L">2.5-5.0L</option>
                <option value="5.0-8.5L">5.0-8.5L</option>
                <option value="8.5L and above">8.5L and above</option>
            </select>

            <button type="submit">Find Scheme</button>
        </form>
    </div>
</body>
</html>
