<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet"> 


<s></s>
    <title>first projet php</title>
</head>
<body>
<header>
    <?php require_once 'menu.php'?>
    </header>
    <div class="container">
        <h1 class="text-primary">table de multiplications</h1>
        <?php
        $multiple = 3; 
        for($i=1; $i
        ;$i++) {
        $result = $multiple * $i;
        echo "<ul class='list-group'>
            <li class='list-group-item'>
            $i x $multiple = $result;
            </li>
        </ul>";
        }
        ?>

</div>

</body>
</html>