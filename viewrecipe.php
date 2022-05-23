<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/skeleton.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Search</title>
</head>
<body>

    <div class="container full-width">
        <div class="row nav">
            <div class="twelve columns">
                <h3>RecipeBook</h3>
            </div>
        </div>
        
    <!-- <food>
        <name></name>
        <image></image>
        <course></course>
        <cuisine></cuisine>
        <prepT></prepT>
        <cookT></cookT>
        <servings></servings>
        <calories></calories>
        <recipe>
            <item></item>
        </recipe>
        <step></step>
    </food> -->
        <div class='row result'>
            <div class='twelve columns'>
        <?php
            session_start();

            $file = simplexml_load_file('./Salvacion&Constantino_IT2E_recipebook.xml');

            $recipe = $_GET['recipe'];
            
            foreach($file->food as $f){
                if($f->name == $recipe){
                    echo "
                        <img src='$f->image' class='resimage'>
                        <h4>$f->name</h4>
                        <p><b>Course: </b> $f->course</p>
                        <p><b>Cuisine: </b> $f->cuisine</p>
                        <p><b>Preparation Time: </b> $f->prepT</p>
                        <p><b>Cooking Time: </b> $f->cookT</p>
                        <p><b>Servings: </b> $f->servings</p>
                        <p><b>Calories: </b> $f->calories</p>
                    ";
                    echo "<h5>Ingredients</h5>";
                    foreach($f->recipe->item as $r){
                        echo "<li>$r</li>";
                    }
                    echo "<br/><h5>Procedures</h5>";
                    foreach($f->step->item as $p){
                        echo "<p>$p</p>";
                    }
                    
                }
            }
        ?>
            </div>
        </div>
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