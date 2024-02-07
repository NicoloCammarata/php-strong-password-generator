
<?php   

include 'partials/generate.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <h1>Text generator</h1>
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