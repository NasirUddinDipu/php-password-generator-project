<?php include_once "function.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Password Generator</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body> 
        <h1>PASSWORD GENERATOR</h1>
        <div id="container">
            <div id="form_section">
                <form action="" method="post">
                    <label for="given_value"><span class="bold">Password Range:</span></label>
                    <input type="text" name="given_value" id="given_value" />
                    <input type="submit" name="btn" value="Click" />
                </form>
            </div>
            <div id="result_section">
                
                <?php 
                
                if(isset($_POST['btn'])){
                    $value = $_POST['given_value'];
                    if(is_numeric($value) && !empty($value)){
                        echo password_func($value);
                    } else{
                        $value = ucwords("expecting integer value");
                        echo "<span>$value</span>";
                    }
                }
                
                ?>

            </div>
        </div>
    </body>
</html>
