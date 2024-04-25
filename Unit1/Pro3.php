<!DOCTYPE html>
<html>
<head>
    <title>Voting Eligibility Checker</title>
    <style>
        body {
            background-color: #f0f0f0;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        h2 {
            color: #007bff;
        }
        form {
            margin-top: 20px;
        }
        input[type="number"], input[type="submit"] {
            padding: 5px 10px;
            margin-right: 10px;
            font-size: 16px;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <h2>Check Voting Eligibility</h2>
    <form method="post" action="#">
        Age: <input type="number" name="age">
        <input type="submit" value="Check Eligibility" name="submit">
    </form>

    <div class="result">
        <?php
     //if ($_SERVER["REQUEST_METHOD"] == "POST") 
	 if(isset($_POST['submit'])){
            $age = isset($_POST['age']) ? $_POST['age'] : null; // Get age from POST data

            // Using if...else
            if ($age >= 18) {
                echo "You are eligible to vote.";
            } else {
                echo "You are not eligible to vote yet.";
            }

            // Using switch
            switch ($age) {
                case 18:
                    echo "<br>You just turned 18!";
                    break;
                case 21:
				 echo "<br>You are 21!";
                    break;
                default:
                    // do nothing
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
