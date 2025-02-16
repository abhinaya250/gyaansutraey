<?php
include 'dbcon.php';  // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $gender = $_POST['gender'];
    $age_group = $_POST['age_group'];
    $category = $_POST['category'];
    $occupation = $_POST['occupation'];
    $residence = $_POST['residence'];
    $income_group = $_POST['income_group'];

    // Query to fetch matching schemes
    $query = "SELECT scheme_name, eligibility FROM recommendations 
              WHERE (gender = '$gender' OR gender = 'Any')
              AND age_group = '$age_group'
              AND category = '$category'
              AND occupation = '$occupation'
              AND residence = '$residence'
              AND income_group = '$income_group'";

    $result = mysqli_query($con_recom, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheme Recommendations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #007bff;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #e9ecef;
            margin: 10px 0;
            padding: 10px;
            border-left: 5px solid #007bff;
            border-radius: 5px;
        }
        .no-result {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Recommended Schemes:</h3><ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li><strong>" . htmlspecialchars($row['scheme_name']) . "</strong> - " . htmlspecialchars($row['eligibility']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p class='no-result'>No matching schemes found.</p>";
    }
    ?>
</div>

</body>
</html>
<?php
}
?>
