
<?php   

        

        function randomPassword() {
            $len = $_GET['passwordLen'];
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i <= $len; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
        };

        



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <h1>cc</h1>
    <div>
        <form action="index.php"  method="GET">

            

            <div>
                <input type="number" name="passwordLen">
            </div>

            <button>
                Invia
            </button>

        </form>
    </div>
    
    <?php
        Password: echo randomPassword( );

    ?>
    
</body>
</html>