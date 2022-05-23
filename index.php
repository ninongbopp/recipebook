<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/skeleton.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Recipe Book</title>
</head>
<body>
    <div class="container full-width">
        <div class="row nav">
            <div class="twelve columns">
                <h3>RecipeBook</h3>
            </div>
        </div>
    </div>

    </div>

    <?php
        $file = simplexml_load_file('./Salvacion&Constantino_IT2E_recipebook.xml');

        foreach($file->food as $f){
            echo "
            <img src='$f->image'>
            ";
        }
    ?>
</body>
</html>