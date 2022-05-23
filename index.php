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
        <?php
            session_start();
            $file = simplexml_load_file('./Salvacion&Constantino_IT2E_recipebook.xml');

            foreach($file->food as $f){
                echo "
                <div class='row item'>
                    <div class='three columns'>
                        <img src='$f->image'>
                    </div>
                    <div class='nine columns'>
                        <form action='viewrecipe.php' method='get'>
                            <h4>$f->name</h4>
                            <p>Prep Time: $f->prepT</p>
                            <p>Cook Time: $f->cookT</p>
                            <input type='hidden' name='recipe' value='$f->name'>
                            <button class='button-primary'>View Recipe</button>
                        </form>
                    </div>
                </div>
                ";
            }
        ?>

        <br>
        <div class="row footer">
            <div class="twelve columns">
                <div class="margin">
                    <h5>Created By:</h5>
                    <p>This website is made possible by Spencer Constantino and Warren Bopp Salvacion, college students of Marinduque State College.</p>
                </div>
                <div class="margin">
                    <h5>Mission</h5>
                    <p>A credible information that will help Filipino people serve healthy food on their table.</p>
                </div>
                <div class="margin">
                    <h5>Vision</h5>
                    <p>Knowledgeable Filipino people on how to cook easy and healthy food by 2050.</p>
                </div>
                <div class="center">
                    <p><b>Copyright &reg; 2022</b></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>