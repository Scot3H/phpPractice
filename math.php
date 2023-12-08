<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styling.css">
</head>

<?php
    $salary = $pennies= $penniesPerSecond = 0;
    if($_SERVER["REQUEST_METHOD"]="POST"){
        if(empty($_POST["salary"])){
            $salaryErr = "Please enter a salary";
        } else {
            $salary = $_POST["salary"];
            $pennies = $salary/3600;
            $penniesPerSecond = 1/$pennies;
            $penniesPerSecond = $penniesPerSecond/100;
        }
    }
?>

<body>
    <h2 class="center">Enter your hourly salry:</h2>
    <form action="" method="post" class="center">
        <input type="number" id="salary" name="salary" class="center" min="0" step="0.01" required>
        <br><br>
        <input class="center" id="pennyImage" type="image" src="a6c0a34b6ddf94130fa69e7b8a4c2cd9.png" border="0" alt="Submit" />
    </form>
    <br>
    <div class="center">
    <?php
        if($penniesPerSecond !=0){
            echo "You make one penny every $penniesPerSecond seconds!";
        }
    ?>
    </div>
</body>
</html>
